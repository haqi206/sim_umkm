<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="icon" href="img/PUMA.png">
    <link rel="stylesheet" href="landingPage.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script> 
        $(document).ready(function(){
          $(".dropdown").click(function(){
            $(".isi-dropdown").slideToggle("slow");
          });
        });
    </script>
</head>
<body>
    
    <!--Navigasi-->
    <div class="nav" style="background-color: #232323;">
        <nav>
            <ul class="navbar1">
                <li id="theme"> <a href="index.php">SIP</a></li>
                <li class="menu inti"> <a href="loginakun.php">LOGIN</a></li>
                <li class="menu inti"> <a href="umkm.php">UMKM</a></li>
                <li class="menu inti"> <a href="isipendapatan.php">ISI</a></li>
                <li class="menu inti"> <a href="cs.php">HUBUNGI KAMI</a></li>
                <li class="menunya dropdown"> <a href="#">Menu</a>
                    <ul class="isi-dropdown">
                      <li><a href="index.php">BERANDA</a></li>
                      <li><a href="cs.php">HUBUNGI KAMI</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
    
    <!--Header-->
    <div class="divgambar">
        <img class="gambar1" src="img/turkish.jpg" alt="">
        <p>Temukan <br> Kebutuhanmu di UMKM yang Tersedia!</p>
    </div>
    
    <!--Card/Konten-->
    <div class="container-1">
        <div class="card">
            <a href="toko.php">
            <div class="header">
                <img src="img/keagan-henman-xPJYL0l5Ii8-unsplash.jpg" alt="">
            </div>
            <div class="konten">
                <h1>Kaos Mantap!</h1>
                <p>Angga Fitryadi</p>
                <p>Jl, Manggis No. 1, Ampenan, Mataram, NTB</p>
            </div>
            </a>   
        </div>
        <div class="card">
            <a href="#">
            <div class="header">
                <img src="img/kerajinan-tanah-liat-berupa-cangkir-dan-piring-pada-meja-warna-biru.jpg" alt="">
            </div>
            <div class="konten">
                <h1>Kerajinan Gerabah</h1>
                <p>Vita Yuli</p>
                <p>Jl, Kemayung No. 9, Dasan Sari, Udayana, Mataram, NTB</p>
            </div>
            </a>   
        </div>
        <div class="card">
            <a href="#">
            <div class="header">
                <img src="img/markus-spiske-N_GimJWv3WM-unsplash.jpg" alt="">
            </div>
            <div class="konten">
                <h1>Snack Kacang Nostalgia</h1>
                <p>Sutoyo Agus</p>
                <p>Jl, Mangga No. 11, Desa Kaliadem, Mataram, NTB</p>
            </div>
            </a>   
        </div>
        <div class="card">
            <a href="#">
            <div class="header">
                <img src="img/cara-membuat-bika-ambon-khas-medan-lembut-di-mulut-HWbOWCuHyP.jpg" alt="">
            </div>
            <div class="konten">
                <h1>Bika Ambon Asli!</h1>
                <p>Susi Sulistyani</p>
                <p>Jl. Kaliurang Km. 14, Sardonoharjo, Sleman, Yogyakarta</p>               
            </div>
            </a>   
        </div>
        <div class="card">
            <a href="#">
            <div class="header">
                <img src="img/lidye-1Shk_PkNkNw-unsplash.jpg" alt="">
            </div>
            <div class="konten">
                <h1>Burger Dahysat!</h1>
                <p>Rita Soemarni</p>
                <p>Jl, Delima No. 20 Desa limo, Kota Medan</p>
            </div>
            </a>
        </div>
        <div class="card">
            <a href="#">
            <div class="header">
                <img src="img/akharis-ahmad-JZ2QYos2YIg-unsplash.jpg" alt="">
            </div>
            <div class="konten">
                <h1>Sate Madura</h1>
                <p>Mang Asep</p>
                <p>Jl, Delima No. 20 Desa jeruk, Kabupaten Klaten</p>
            </div>
            </a>
        </div>
    </div>
    
    <!--Footer-->
    <div class="footer">
        <footer>
            <p>© SIP Team 2021</p>
        </footer>
    </div>

</body>
</html>