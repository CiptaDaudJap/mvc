<?php

class App {
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];

    public function __construct() {
        // echo 'Ok program MVC pertama ku !';
        $url = $this->parseURL();
        // cekapakah ada nama file tsb di folder controllers
        // keluar dulu dari index .. lalu masuk ke app/controllers
        // .   . itu concat sambung 
        // ini utk controller
        if( file_exists('../app/controllers/' . $url[0] . '.php') ){
             $this->controller =  $url[0];   
            unset($url[0]);
            // var_dump($url);    
        }
        // ingat pd waktu concate harus ada spasi ' . $this->controller . '
        require_once '../app/controllers/' . $this->controller . '.php';        
        $this->controller = new $this->controller;
        // var_dump($url);
        // utk method nya
        if ( isset($url[1]) ){
             if( method_exists($this->controller, $url[1]) ){
                 $this->method = $url[1];
                 unset($url[1]);
             }
        }
        // params
        if( !empty($url) ) {
            // nilai url ini akam masukke params di atas
            $this->params = array_values($url);
            // var_dump($url);
        }
        // tinggal jalankan controller & method, serta kirimkan params jika ada 
        call_user_func_array([$this->controller, $this->method], $this->params);

    }

    // rtrim ini utk menghapus / di akhir url nya 
    // kita mau ambil hanya string nya saja 
    // filter utk membersihkan url dari char yg tdk perlu
    // lalu di pecah keluarkan '/' dari huruf huruf di url 
    public function parseURL() {
        if( isset($_GET['url']) ) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}