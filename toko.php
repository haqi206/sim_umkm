<?php
session_start();
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kaos Mantap!</title>
    <link rel="icon" href="img/PUMA.png">
    <link rel="stylesheet" href="toko.css">
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
                <li id="theme"> <a href="landingpage.php">SIP</a></li>
                <li class="menu inti"> <a href="umkm.php">UMKM</a></li>
                <li class="menu inti"> <a href="cs.php">HUBUNGI KAMI</a></li>
                <li class="menunya dropdown"> <a href="#">Menu</a>
                    <ul class="isi-dropdown">
                      <li><a href="landingPage.php">BERANDA</a></li>
                      <li><a href="form_jualan.php">JUALAN</a></li>
                      <li><a href="cs.php">HUBUNGI KAMI</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>

    <!--Header-->
    <div class="divgambar">
        <img id="gambar1" src="img/keagan-henman-xPJYL0l5Ii8-unsplash (1).jpg" alt="">
        <p>Kaos Mantap!</p>
    </div>

    <!--Konten-->
    <div class="identitas-usaha">
        <h3>Pemilik : Angga Fitryadi</h3>
        <h3>Alamat : Jl. Manggis No. 1, Desa Pejeruk, Ampenan, Mataram, NTB</h3>
        <h3>Kategori Usaha : Pakaian</h3>
        <h3>
            Media Sosial : <a href="https://instagram.com/umamilach"><img id="medsos" src="img/instagram.svg" alt=""></a>
        </h3>
        <h3>
            Hubungi : <a href="http://line.me/ti/p/~umamilachyar"><img id="kontak" src="img/LINE_logo.svg" alt=""></a>
        </h3>
        <h3>Deskripsi : Pakaian dengan bahan katun combed 30s
        </h3>
    </div>

    <!--Footer-->
    <div class="footer">
        <footer>
            <p>© SIP Team 2021</p>
        </footer>
    </div>
</body>
</html>