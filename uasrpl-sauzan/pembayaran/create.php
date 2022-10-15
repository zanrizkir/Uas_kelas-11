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
  <body> <b>
        <div class="row">
            <div class="card w-75 mx-auto card shadow p-3 mb-5 bg-body rounded " style='margin-top:100px'>
                <h1 align="center">
                    Pembayaran
                </h1>
                <span class="d-block w-50 bg-secondary rounded mx-auto" style="height: 2px"></span>
                  <form action="../pembayaran/proses.php" method="POST" class="d-flex p-4">
                    <input type="hidden" name="aksi" value="create">
                    <div class="col-md-6 pe-4">
                        <br>

                        <div class="mb-3">
                            <label for="kode_pembayaran" class="form-label">Kode Pembayaran</label>
                            <input type="text" class="form-control" id="kode_pembayaran" required name="kode_pembayaran"  placeholder="Kode Pembayaran"  required>
                        </div>

                        <div class="form-group">
                            <label for="id_pendaftaran">Nama</label>
                            <select name ="id_pendaftaran" class="form-control" required id="id_pendaftaran">
                                <option selected hidden>Pilih Nama</option>

                                <?php
                                    include'../database.php';
                                    $pendaftaran =  new Pendaftaran();
                                    foreach ($pendaftaran->index() as $data){
                                ?>
                                <option value="<?= $data['id'] ?>"><?= $data['nama'] ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="tanggal_pembayaran" class="form-label">Tanggal Pembayaran</label>
                            <input type="date" class="form-control" id="tanggal_pembayaran" name="tanggal_pembayaran"  required placeholder="Tanggal Pembayaran"  required>
                        </div>
                        
                        <div class="form-group">
                            <div class="form-check form-check-inline">
                            </div>
                        <div class="form-check form-check-inline">
                        </div>
                    </div>

                        
                        <div class="mb-3">
                        </div>
                        <div class='mx-auto'>
                            <button type="submit" name="save" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-save" viewBox="0 0 16 16">
                            <path d="M2 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9.5a1 1 0 0 0-1 1v7.293l2.646-2.647a.5.5 0 0 1 .708.708l-3.5 3.5a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L7.5 9.293V2a2 2 0 0 1 2-2H14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h2.5a.5.5 0 0 1 0 1H2z"/>
                            </svg>
                                Simpan</button>
                            <a href="index.php" class="btn btn-primary btn-warning"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-back" viewBox="0 0 16 16">
                            <path d="M0 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-2H2a2 2 0 0 1-2-2V2zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H2z"/>
                            </svg>
                                Kembali</a>
                        </div>                       
                        </div>

                        <div class="col-md-6">
                        <br>

                        <div class="mb-3">
                            <label for="uang_pendaftaran" class="form-label">Uang pendaftaran</label>
                            <input type="number" class="form-control" id="uang_pendaftaran" name="uang_pendaftaran"  required placeholder="Uang pendaftaran"  required>
                        </div>

                        <div class="mb-3">
                                    <label for="uang_seragam" class="form-label">Uang seragam</label>
                                    <input type="number" class="form-control" id="uang_seragam" name="uang_seragam"  required placeholder="Uang seragam"  required>
                            </div>

                        <div class="mb-3">
                                    <label for="uang_kegiatan" class="form-label">Uang kegiatan</label>
                                    <input type="number" class="form-control" id="uang_kegiatan" name="uang_kegiatan"  required placeholder="Uang kegiatan"  required>
                            </div> 

                    </div>
                </form>
            </div>
        </div>



        <!-- CARDs -->
        <!-- <div class="container">
        <div class="card">
            <div class="card-header">
                Tambah Jurusan
            </div>
            
            <div class="card-body">
                
                
            <form action="../pendaftaran/proses.php" method="post">
                <input type="hidden" name="aksi" value="create">
                    <div class="form-group">
                        <label for="exampleInputEmail1">kode Pendaftaran</label> 
                        <input type="text" class="form-control" name="kode_pendaftaran" placeholder="Masukan Kode Pendaftaran">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="Masukan Nama Siswa">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tanggal_lahir">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tempat Lahir</label>
                        <input type="text" class="form-control" name="tempat_lahir" placeholder="Masukan Tempat Lahir">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Jenis Kelamin</label> <br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jk" id="inlineRadio1" value="laki-laki">
                            <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
                            </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jk" id="inlineRadio2" value="perempuan">
                            <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Agama</label>
                        <select class="form-select form-control drop"  name='agama' aria-label=".form-select-lg example">
                            <option selected hidden>Pilih Agama</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Jurusan</label>
                        <select class="form-select form-control drop" aria-label=".form-select-lg example">
                            <option disable>Pilih Jurusan</option>
                            <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                            <option value="Teknik Kendaraan">Teknik Kendaraan</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                        </select>
                    </div>
                    <center>
                    <div class='mx-auto'>
                        <button type="submit" name="save" class="btn btn-primary">Simpan</button>
                    </div>
                    </center>
                </form>

            </div> -->
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
    </b>
</body>
</html>