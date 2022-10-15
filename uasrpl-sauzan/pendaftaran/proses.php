<?php
include '../database.php';
$pendaftaran1 = new Pendaftaran();

if(isset($_POST['save'])){
    $id = $_POST['id'];
    $aksi = $_POST['aksi'];
    $kode_pendaftaran = $_POST['kode_pendaftaran']; 
    $nama  = $_POST['nama'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $nama_jurusan = $_POST['id_jurusan'];
                            

    if ($aksi == "create"){
        $pendaftaran1->create($kode_pendaftaran,$nama,$tanggal_lahir,$tempat_lahir,$jenis_kelamin,$agama,$nama_jurusan);
        header("location:index.php");

    }
    else if ($aksi == "update") {
        $pendaftaran1->update($id,$kode_pendaftaran,$nama,$tanggal_lahir,$tempat_lahir,$jenis_kelamin,$agama,$nama_jurusan);
        header("location:index.php");
    }
    else if ($aksi == "delete"){
        $pendaftaran1->delete($id);
        header("location:index.php");
    }
}
?>