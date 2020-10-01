<?php
// semua nama class huruf besar awalnya 
//
class Controller {
     public function view($view, $data = [])
     {  // asal nya di index kita keluar dulu masukke app/view
        // lalu cari file view.php 
         require_once '../app/views/' . $view . '.php';
     }

    }