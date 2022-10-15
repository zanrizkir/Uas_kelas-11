<?php
    class Database{
        public $host = "localhost", $user = "root", $pass ="", $db = "uassauzan";
        public $koneksi;


        public function __construct(){
            $this ->koneksi = mysqli_connect($this->host,$this->user,$this->pass,$this->db);
            if($this->koneksi){
                // echo"Berhasil";
            }else{
                echo "Koneksi Database Gagal";
            }
        }
    }
    include "jurusan.php";
    include "pembayaran.php";
    include "pendaftaran.php";
    $db = new Database();
