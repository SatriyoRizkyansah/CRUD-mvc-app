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

    private $table = 'mahasiswa';
    private $db;

    public function __construct()
    {   
        $this->db = new Database;
    }
        public function getAllMahasiswa(){
            $this->db->query('SELECT * FROM ' . $this->table);
            return $this->db->resultSet();
        }

        public function getMahasiswaById($id){
            $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id'); 
            $this->db->bind('id', $id);
            return $this->db->single();
        }
}