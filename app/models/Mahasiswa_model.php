<?php 

class Mahasiswa_model {
    // private $mhs = [
    //     [
    //         "nama" => "Satriyo Rizkyansah",
    //         "nim" => "221011700050",
    //         "email" => "satriyorizkyansah@gmail.com",
    //         "jurusan" => "Sistem Informasi"
    //     ],
    //     [
    //         "nama" => "Choirul Anam",
    //         "nim" => "221011700070",
    //         "email" => "jarwo@gmail.com",
    //         "jurusan" => "Teknik Perkapalan"
    //     ],
    //     [
    //         "nama" => "M.Ariiq",
    //         "nim" => "221011700020",
    //         "email" => "Ariiq@gmail.com",
    //         "jurusan" => "Teknik Perkapalan"
    //     ]
    //     ];

        private $dbh;
        private $stmt;

        public function __construct()
        {
            // data source name
            $dsn = 'mysql:host=localhost;dbname=phpmvc';

            try {
                $this->dbh = new PDO($dsn, 'root', '');
            } catch(PDOException $e){
                die($e->getMessage());
            }
            
        }

        public function getAllMahasiswa(){
            $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
            $this->stmt->execute();
            return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
        }
}