<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
      <b>
<!-- CARDs -->
        <div class="container ">
        <div class="card  shadow p-3 mb-5 bg-body rounded ml-5 mr-5" style='margin-top:100px'>
            <div class="card-body">
            <?php
                include '../database.php';
                $pembayaran = new Pembayaran();
                foreach ($pembayaran->edit($_GET['id']) as $data) {
                    $id = $data['id'];
                    $kode_pembayaran = $data['kode_pembayaran'];
                    $tanggal_pembayaran = $data['tanggal_pembayaran'];
                    $uang_pendaftaran = $data['uang_pendaftaran'];
                    $uang_seragam = $data['uang_seragam'];
                    $uang_kegiatan = $data['uang_kegiatan'];

                    
                    
                }
            ?>
            <form action="../pembayaran/proses.php" method="post">
                <input type="hidden" name="aksi" value="update">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Kode Pembayaran</label> 
                        <input type="text" class="form-control" name="kode_pembayaran" required value="<?php echo $kode_pembayaran; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama</label>
                        <select name="id_pendaftaran" class="form-control" required id="">
                            <?php
                            include'database.php';
                            $pendaftaran = new Pendaftaran();
                            $no = 1;
                            foreach($pendaftaran->index() as $data){
                            ?>
                            <option value="<?php echo $data['id']?>"><?php echo $data['nama']?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tanggal Pembayaran</label>
                        <input type="date" class="form-control" name="tanggal_pembayaran" required value="<?php echo $tanggal_pembayaran; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Uang Pendaftaran</label>
                        <input type="text" class="form-control" name="uang_pendaftaran" required value="<?php echo $uang_pendaftaran; ?>">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Uang Seragam</label>
                    <input type="text" class="form-control" name="uang_seragam" required value="<?php echo $uang_seragam; ?>">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Uang Kegiatan</b></h5></label>
                    <input type="text" class="form-control" name="uang_kegiatan" required value="<?php echo $uang_kegiatan; ?>">
                    </div>
                    <button type="submit" name="save" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg"
                            width="16" height="16" fill="currentColor" class="bi bi-save" viewBox="0 0 16 16">
                            <path
                                d="M2 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9.5a1 1 0 0 0-1 1v7.293l2.646-2.647a.5.5 0 0 1 .708.708l-3.5 3.5a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L7.5 9.293V2a2 2 0 0 1 2-2H14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h2.5a.5.5 0 0 1 0 1H2z" />
                        </svg>
                        Simpan</button>
                    <a href="index.php" class="btn btn-primary btn-warning"><svg xmlns="http://www.w3.org/2000/svg"
                            width="16" height="16" fill="currentColor" class="bi bi-back" viewBox="0 0 16 16">
                            <path
                                d="M0 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-2H2a2 2 0 0 1-2-2V2zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H2z" />
                        </svg>
                        Kembali</a>
                </form>
                    
            
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