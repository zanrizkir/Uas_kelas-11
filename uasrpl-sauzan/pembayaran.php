<?php

class Pembayaran extends Database{
    // Menampilkan Data Dosen ke ....
    public function index(){
        $datapembayaran = mysqli_query($this->koneksi, "SELECT
        
         pembayaran.id, pembayaran.kode_pembayaran,
         pendaftaran.nama, pembayaran.tanggal_pembayaran, pembayaran.uang_pendaftaran, pembayaran.uang_seragam, 
         pembayaran.uang_kegiatan, 
         pembayaran.total_pembayaran
        FROM pembayaran
        JOIN pendaftaran
        ON pembayaran.id_pendaftaran = pendaftaran.id");

        return $datapembayaran;
    }

    public function create($kode_pembayaran, $tanggal_pembayaran , $uang_pendaftaran , 
    $uang_seragam , $uang_kegiatan , $total_pembayaran, $id_pendaftaran){
            return mysqli_query($this->koneksi, "insert into pembayaran values (null, '$kode_pembayaran','$tanggal_pembayaran'
            ,'$uang_pendaftaran','$uang_seragam','$uang_kegiatan','$total_pembayaran','$id_pendaftaran')");
    }

    public function edit($id){
        $datapembayaran = mysqli_query($this->koneksi, "SELECT
        
        pembayaran.id, pembayaran.kode_pembayaran,
        pendaftaran.nama, pembayaran.tanggal_pembayaran, pembayaran.uang_pendaftaran, pembayaran.uang_seragam, 
        pembayaran.uang_kegiatan, 
        pembayaran.total_pembayaran
       FROM pembayaran
       JOIN pendaftaran
       ON pembayaran.id_pendaftaran = pendaftaran.id  
       where pembayaran.id='$id'");

        return $datapembayaran;
    }

    public function update($id, $kode_pembayaran, $tanggal_pembayaran , $uang_pendaftaran , $uang_seragam , $uang_kegiatan , $total_pembayaran, $id_pendaftaran){
        mysqli_query($this->koneksi, "update pembayaran set kode_pembayaran='$kode_pembayaran',uang_pendaftaran='$uang_pendaftaran', uang_seragam='$uang_seragam', uang_kegiatan='$uang_kegiatan', total_pembayaran='$total_pembayaran',id_pendaftaran='$id_pendaftaran' where id='$id'");
    }

    public function show($id){
        $datapembayaran =mysqli_query($this->koneksi, "select * from pembayaran where id='$id'");

        return $datapembayaran;
    }

    public function delete($id){
        mysqli_query($this->koneksi, "delete from pembayaran where id='$id'");
    }
}