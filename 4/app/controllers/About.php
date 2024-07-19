<?php 

class About{

    public function index($nama = 'Satriyo Rizkyansah', $pekerjaan = 'Programmer'){
        echo "Halo nama saya adalah {$nama}, Pekerjaan saya adalah seorang {$pekerjaan}";
    }

    public function page(){
        echo "About/page";
    }
}