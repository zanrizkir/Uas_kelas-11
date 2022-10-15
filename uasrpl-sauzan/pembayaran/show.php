<!doctype html>
<html lang="en">
  <head>
    <!-- disable meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Show</title>
  </head>
  <body>
        <!-- CARDs -->
        <div class="container">
        <div class=" card shadow p-3 mb-5 mx-auto bg-body rounded w-75" style='margin-top:100px'>
        <center>
            <h2>Data Pembayaran</h2>
            <span class="d-block w-50 bg-dark" style='height: 3px'></span>
        </center>
            <div class="card-body">
            <?php
                include '../database.php';
                $pembayaran = new Pembayaran();
                foreach ($pembayaran->show($_GET['id']) as $data) {
                    $id = $data['id'];
                    $kode_pembayaran = $data['kode_pembayaran']; 
                    // $nama = $data['nama'];
                    $tanggal_pembayaran = $data['tanggal_pembayaran'];
                    $uang_pendaftaran = $data['uang_pendaftaran'];
                    $uang_seragam = $data['uang_seragam'];
                    $uang_kegiatan = $data['uang_kegiatan'];
                    $id_pendaftaran = $data['id_pendaftaran'];
                }
            ?>
            <b>
                <form class="">
                    <input type="hidden" name="aksi" value="create">
                        <div class="">
                                <br>
                            <div class="mb-3">
                                    <label for="kode_pembayaran" class="form-label">Kode Pembayaran</label>
                                    <input type="text" class="form-control" id="kode_pembayaran" name="kode_pembayaran" value="<?php echo $kode_pembayaran; ?>"  placeholder="Kode Pembayaran"  disabled>
                            </div>

                            <div class="form-group">
                                <label for="id_pendaftaran">Nama</label>
                                <select name ="id_pendaftaran" class="form-control" id="id_pendaftaran" value="" disabled>
                                <?php
                                    $pendaftaran =  new Pendaftaran();
                                    foreach ($pendaftaran->index() as $data_s){
                                ?>
                                    <option value="<?= $data_s['id'] ?>" <?php echo ($data_s['id'] == $id_pendaftaran)?"selected":null; ?> "><?= $data_s['nama'] ?></option>
                                <?php } ?>
                                </select>
                            </div>

                            <div class="mb-3">
                                    <label for="tanggal_pembayaran" class="form-label">Tanggal Pembayaran</label>
                                    <input type="date" class="form-control" id="tanggal_pembayaran" name="tanggal_pembayaran"  placeholder="Tanggal Pembayaran" value="<?php echo $tanggal_pembayaran; ?>" disabled>
                            </div>

                            <div class="mb-3">
                                    <label for="uang_pendaftaran" class="form-label">uang pendaftaran</label>
                                    <input type="number" class="form-control" id="uang_pendaftaran" name="uang_pendaftaran" value="<?php echo $uang_pendaftaran; ?>" placeholder="uang pendaftaran"  disabled>
                            </div>

                            <div class="mb-3">
                                    <label for="uang_seragam" class="form-label">uang seragam</label>
                                    <input type="number" class="form-control" id="uang_seragam" name="uang_seragam" value="<?php echo $uang_seragam; ?>" placeholder="uang seragam"  disabled>
                            </div>

                            <div class="mb-3">
                                    <label for="uang_kegiatan" class="form-label">uang kegiatan</label>
                                    <input type="number" class="form-control" id="uang_kegiatan" name="uang_kegiatan" value="<?php echo $uang_kegiatan; ?>" placeholder="uang kegiatan"  disabled>
                            </div>

                            <div>
                            <a href="index.php" class="btn btn-primary btn-warning"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-back" viewBox="0 0 16 16">
                            <path d="M0 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-2H2a2 2 0 0 1-2-2V2zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H2z"/>
                            </svg>
                                Kembali </a> 
                        </div>
                </form> </b>

            </div>
        </div>
        </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>