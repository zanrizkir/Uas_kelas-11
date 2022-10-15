<!doctype html>
<html lang="id" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="footer, address, phone, icons" />

    <title>Responsive Footer</title>

    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Home</title>
</head>

<body style="background-color : #34496e;">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light ">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
            aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand sauzan d-block px-2" href="#">
            <p class="font">Sauzan-Kun </p>
        </a>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mt-2 mt-lg-0 mx-auto">
                <li class="nav-item active">
                    <a class="nav-link shadow bg-body" style="background-color : rgb(151, 151, 151);" href="./home.php">Home <span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link daftar " href="./jurusan/index.php">Jurusan <span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link " href="./pendaftaran/index.php">Pendaftaran <span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link " href="./pembayaran/index.php">Pembayaran <span
                            class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- /Navbar  -->

    <br><br><br><br>

    <h1 style="color: blue; transition: .3s; position: absolute; left: 40%;" class="text-center display-6 lgbt"></h1>
    <h1 style="color: white; margin-top: 70px;" class="text-center display-6">WEBSITE PENDAFTARAN SISWA BARU</h1>
    <h1 style="color: white;" class="text-center display-6">SMK ASSALAAM BANDUNG</h1>
    <h2 style="color: white;" class="text-center display-6 ">TAHUN AJARAN 2021-2022</h2>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
        crossorigin="anonymous"></script>
    <script>
        const text = 'Selamat Datang'.split('').map(el => `<span>${el}</span>`).join('');
        document.querySelector('.lgbt').innerHTML = text;
        const spans = document.querySelectorAll('.lgbt span');

        setInterval(() => {
            const collors = ['red', 'yellow',    'lightblue', ];
            for (const span of spans) {
                span.style.color = collors[Math.floor(Math.random() * (collors.length - 0) + 0)];
            }
        }, 300);
        let counter = 1;
        setInterval(() => {
            if ((counter % 2) != 0) {
                document.querySelector('.lgbt').style.transform = 'scale(150%)';
                counter++;
            } else {
                counter++;
                document.querySelector('.lgbt').style.transform = 'scale(50%)';
            }
        }, 500);
    </script>
    <br><br><br><br>

    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">

        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <img src="https://smkassalaambandung.sch.id/img/tsm.png"
                        class="d-block foto rounded padding-left: 100px" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <br>
                        <div class="tsm">
                            <h3>Jurusan</h3>
                            <h2>Teknik Sepeda Motor</h2>
                        </div>
                        <h5 class="tulis">
                            &nbsp;Pilihan tepat untuk mekanik hebat. Pembelajaran praktik yang inovatif,<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;siap melatih siswa agar mampu
                            menerapkan pengetahuan secara logis,kritis,<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dan kreatif. Pemahaman konsep disertai praktik menjadi
                            modal dasar para<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;calon mekanik handal sehingga mampu
                            mengaplikasikan dasar operasional<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; komponen dan unit sistem pada otomotif. Lulusan TSM kami,
                            siap tempur<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ditengah serbuan produksi Sepeda Motor
                            yang kian canggih dan menjamur.
                        </h5>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <img src="https://smkassalaambandung.sch.id/img/rpl.png" class="rounded  float-left" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                    <br>
                    <div class="rpl">
                        <h3>Jurusan</h3>
                        <h2>Rekayasa Perangkat Lunak</h2>
                    </div>
                    <p class="tulis1">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pilihan berkualitas untuk generasi cerdas. Program pembelajaran berbasis <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Teknologi Informasi, siap menjadi bekal keahlian membentuk progammer handal <br> 
                        &nbsp;&nbsp;yang mampu mengembangkan diri sesuai tuntutan kemajuan zaman, <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;menjawab peluang kerja berbasis teknologi komputer di berbagai sektor.
                    </p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <img src="https://smkassalaambandung.sch.id/img/tkr.png" class="rounded float-right" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                    <br>
                    <div class="tsm">
                            <h3>Jurusan</h3>
                            <h2>Teknik Kendaraan Motor</h2>
                        </div>
                        <h5 class="tulis">
                            &nbsp;&nbsp;&nbsp;Pilihan bermutu bagi generasi maju. Sekolah terpilih pelaksana Kurikulum <br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Berbasis Industri yang siap memcetak calon2 mekanik handal dan berkualitas.<br>
                            Siswa yg kompeten dalam keterampilan,pengetahuan, mental, dan sikap<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;Berakhlakul karimah adalah modal utama kami untuk melahirkan
                        Mekanik<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Otomotif dan Service Advancer yang siap terjun dan bersaing dalam<br>
                             menjawab kebutuhan Industri.
                        </h5>
                    <!-- <p class='tulis'>
                         <br> 
                        .Siswa <br>
                        yg kompeten dalam keterampilan,
                        pengetahuan, mental, dan sikap berakhlakul karimah adalah modal utama kami untuk melahirkan
                        Mekanik Otomotif dan Service Advancer yang siap terjun dan bersaing dalam menjawab kebutuhan
                        Industri.
                    </p> -->
                </div>
            </div>
            </div>
        </div>
        <button class="carousel-control-prev border-0" style="background-color : transparent;" type="button"
            data-target="#carouselExampleCaptions" data-slide="prev">
            <span class="carousel-control-prev" aria-hidden="true"></span>
            <span class="sr-only tombol">Previous</span>
        </button>
        <button class="carousel-control-next border-0" style="background-color : transparent;" type="button"
            data-target="#carouselExampleCaptions" data-slide="next">
            <span class="carousel-control-next" style="border: transparent;" aria-hidden="true"></span>
            <span class="sr-only" style="border: transparent;">Next</span>
        </button>
    </div>



    <!--   -->

    <footer class="footer-distributed">

        <div class="footer-left">
            <img src='https://smkassalaambandung.sch.id/img/logo-custom.png'>
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

            <p class="footer-company-name">Copyright©2k22-@zanrizkir7 With &lt;3 </p>
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
                <p><a href="https://github.com/zanrizkir/">sauzan0457@gmail.com</a></p>
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
</body>

</html>