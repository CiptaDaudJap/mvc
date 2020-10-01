<?php
// class about sebagai controller nya 
// index sebagai method utama nya 
// kita tdk gunakan echo lagi tapi kita panggil method view
// di folder view , kita kasih extends Controller baru bisa kita
// gunakan View nya 
class About extends Controller {
    public function index($nama= 'Cipta', $pekerjaan = 'Programmer', $umur = 55)
    {
        // echo "Hallo, nama saya $nama, saya adalah $pekerjaan";
       // kita panggil view di folder about nama file nya index.php
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;    
        $data['judul']= 'About Me';
        $this->view('templates/header', $data); 
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }

    public function page()
    {
        // panggil view yg ada di folder about namanya page.php
        $data['judul']= 'Pages';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}