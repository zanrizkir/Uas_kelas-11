<?php 
    // require "database.php";
    class Jurusan extends Database{
        // menampilkan data jurusan ke Index.php
        public function index(){
            $datajurusan = mysqli_query($this->koneksi, "SELECT * FROM jurusan");

            return $datajurusan;
        }

        public function create($kode_jurusan,$jurusan){
            mysqli_query($this->koneksi, "INSERT INTO jurusan VALUES (NULL, '$kode_jurusan', '$jurusan')");

            return $datajurusan;
        }
        public function edit($id) {
            $datajurusan = mysqli_query($this->koneksi, "SELECT * FROM jurusan WHERE id='$id'");
            return $datajurusan;
        }

        public function update($id,$kode_jurusan,$jurusan){
            mysqli_query($this->koneksi,"UPDATE jurusan SET kode_jurusan='$kode_jurusan', jurusan='$jurusan' WHERE id='$id'");
        }

        public function show ($id){
            $datajurusan = mysqli_query($this->koneksi,"SELECT * FROM jurusan WHERE id='$id'");

            return $datajurusan;

        }

        public function delete ($id){
            mysqli_query($this->koneksi,"DELETE FROM jurusan WHERE id='$id'");
        }
    }

?>