<!doctype html>
<html lang="id" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="footer, address, phone, icons" />
        
        <title>Responsive Footer</title>
        
        <link rel="stylesheet" href="../style.css"> 
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        
        
        <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        
        <title>Home</title>
    </head>
  <body >
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light ">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand sauzan d-block px-2" href="#"   ><p class="font" style=''>Sauzan-Kun </p></a>

            <div  class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav mt-2 mt-lg-0 mx-auto">
                <li class="nav-item active">
                    <a class="nav-link " href="../home.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link daftar " href="../jurusan/index.php">Jurusan <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link " href="../pendaftaran/index.php">Pendaftaran <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link bg-black shadow-sm bg-body rounded" style="background-color : rgb(151, 151, 151);" href="index.php" href="index.php">Pembayaran <span class="sr-only">(current)</span></a>
                </li>
                </ul>
            </div>
            </nav>

            <!-- /Navbar  -->
        
        

        <center>
            <h2 class="h2"  style='font-weight: bolder'>Data Jurusan</h2>
            <span class="d-block w-50 bg-dark" style='height: 3px'></span>
            <br><br>
        </center>
        <!-- CARDs -->
        <div style="width: 100% mx-auto">

                <!-- TABLE Jurusan -->
                <table class=" mx-auto table table-bordered text-center shadow p-3 mb-5 bg-body rounded" cellpadding="20px" style="width: fit-content">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Kode Pembayaran</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Tanggal Pembayaran</th>
                            <th scope="col">Uang Pendaftaran</th>
                            <th scope="col">Uang Seragam</th>
                            <th scope="col">Uang Kegiatan</th>
                            <th scope="col">Total Pembayaran</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include '../database.php';
                            $pembayaran =  new Pembayaran();
                            $no = 1;
                            foreach ($pembayaran->index() as $data){
                        ?>
                        <tr>
                            <th scope="row"><?php echo $no++ ?></th>
                            <td><?php echo $data['kode_pembayaran'] ?></td>
                            <td><?php echo $data['nama'] ?></td>
                            <td><?php echo $data['tanggal_pembayaran'] ?></td>
                            <td><?php echo $data['uang_pendaftaran'] ?></td>
                            <td><?php echo $data['uang_seragam'] ?></td>
                            <td><?php echo $data['uang_kegiatan'] ?></td>
                            <td><?php echo $data['total_pembayaran'] ?></td>
                            
                            <td>
                                <a href="show.php?id=<?php echo $data['id']; ?>" class="btn btn-warning"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                </svg>  Show</a> 
                                <a href="edit.php?id=<?php echo $data['id']; ?>" class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                </svg>  Edit</a> 
                                <form action="proses.php" method="post" class="d-inline">
                                    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                                    <input type="hidden" name="aksi" value="delete">
                                    <button  type="submit" class="btn btn-danger d-inline" name="save" onclick="return confirm('Apakah Anda Yakin Mau menghapus data ini ?')">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                    </svg>  Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                      <?php
                            }
                        ?>
                    </tbody>
                </table>
                <center><a href="create.php" class="btn btn1 btn-primary shadow p-3 mb-5 bg-body rounded">Tambah Data</a></center>
                 <!-- /TABLE Jurusan -->
            </div>
        </div>


        <footer class="footer-distributed">

            <div class="footer-left">
                <img src= 'https://smkassalaambandung.sch.id/img/logo-custom.png'>
                <h3>Sauzan Database</h3>

                <p class="footer-links">
                    <a href="home.php">Home</a>
                    |
                    <a href="jurusan.php">Jurusan</a>
                    |
                    <a href="pendaftaran.php">Pendaftaran</a>
                    |
                    <a href="pembayaran.php">Pembayaran</a>
                </p>

                <p class="footer-company-name">Copyright©2k22-@zanrizkir7 With &lt;3</p>
            </div>

            <div class="footer-center">
                <div>
                    <i class="fa fa-map-marker"></i>
                    <p><span>Jl. Cibaduyut,
                            Cangkuang Kulon, Kec. Dayeuhkolot</span>
                        Kota Bandung
                        Jawa Barat 40265</p>
                </div>

                <div>
                    <i class="fa fa-phone"></i>
                    <p>+62 877 4653 5778</p>
                </div>
                <div>
                    <i class="fa fa-envelope"></i>
                    <p><a href="https://github.com/zanrizkir/">sauzan0457@gmail</a></p>
                </div>
            </div>
            <div class="footer-right">
                <p class="footer-company-about">
                    <span>About the company</span>
                    Nama : Muhamad Sauzan Rizki Asakir <br>
                    Kelas XI RPL 3 <br>
                    SMK Assalaam Bandung
                </p>
                <div class="footer-icons">
                    <a href="https://www.facebook.com/zand.ri.165/"><i class="fa fa-facebook"></i></a>
                    <a href="https://twitter.com/RizkiAsakir"><i class="fa fa-twitter"></i></a>
                    <a href="https://www.instagram.com/zanrizkir7/"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-youtube"></i></a>
                </div>
            </div>
        </footer>
    



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