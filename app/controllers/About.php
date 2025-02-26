<?php 

class About extends Controller{

    public function index($nama = 'Satriyo Rizkyansah', $pekerjaan = 'Programmer', $umur = '22'){
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $data['title'] = 'About me';
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');

    }

    public function page(){
        $data['title'] = 'Page';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}