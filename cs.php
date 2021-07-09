<?php
session_start();
include 'koneksi.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hubungi Kami</title>
    <link rel="icon" href="img/PUMA.png">
    <link rel="stylesheet" href="cs.css">
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
                <li class="menu inti"> <a href="isipendapatan.php">ISI</a></li>
                <li class="menu inti"> <a href="cs.php">HUBUNGI KAMI</a></li>
                <li class="menunya dropdown"> <a href="#">Menu</a>
                    <ul class="isi-dropdown">
                      <li><a href="landingPage.php">BERANDA</a></li>
                      <li><a href="umkm.php">UMKM</a></li>
                      <li><a href="cs.php">HUBUNGI KAMI</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>

    <!--Header-->
    <div class="divgambar">
        <img id="gambar1" src="img/cs2.jpg" alt="">
        <img id="logosvg" src="img/customer-service.svg" alt="">
        <p>A/N Dhonny</p>
        <a href="https://api.whatsapp.com/send?phone=6281917111351"><img id="wa" src="img/whatsapp-icon-seeklogo.com.svg" alt=""></a>
        <a href="http://line.me/ti/p/~umamilachyar"><img id="line" src="img/LINE_logo.svg" alt=""></a>
        <a href="#"><img id="telegram" src="img/Telegram_logo.svg" alt=""></a>
    </div>

    <!--Konten-->
    <div class="perhatian">
        <h2>Catatan Penting</h2>
        <p>
            Kami selaku pengembang berprasangka baik kepada masyarakat agar selalu jujur 
            kepada penjual maupun pembeli. Kami tidak bertanggung jawab jika terjadi tindak kejahatan 
            berupa penipuan dan lain-lain. Kami menghimbau kepada seluruh penjual maupun pembeli agar 
            selalu jujur dan berkomitmen untuk meningkatkan ekonomi masyarakat. Website ini kami kembangkan 
            atas dasar kesadaran kami melihat kondisi para pelaku UMKM yang usahanya perlu disosialisasikan 
            lebih luas agar perputaran ekonomi masyarakat berjalan dengan baik, apalagi ditambah masa-masa 
            pendemi Covid-19 saat ini yang sangat memprihatinkan sehingga banyak pekerja mengalami PHK. 
            Demikian yang dapat kami sampaikan, mohon maaf atas segala kekurangan. <br> <br> Salam, SIP Team 
            PSI. 
        </p>
    </div>

    <!--Footer-->
    <div class="footer">
        <footer>
            <p>© SIP Team 2021</p>
        </footer>
    </div>

</body>
</html>