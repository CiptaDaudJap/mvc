<?php 
  // class home anak dari class controller 
  class Home extends Controller {
      public function index()
      {
          // echo 'home/index';
         $data['judul'] = 'Home'; 
         $this->view('templates/header', $data); 
         $this->view('home/index'); 
         $this->view('templates/footer');
      }
  }




?>