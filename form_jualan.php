<?php
session_start();
include 'koneksi.php';
if (!empty($_SESSION['username'])){
	header('location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jualan</title>
    <link rel="icon" href="img/PUMA.png">
    <link rel="stylesheet" href="form_jualan.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
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
    <div class="navigasi" style="background-color: #232323;">
        <nav>
            <ul class="navbar1">
                <li id="judul"> <a class="text-decoration-none" href="landingPage.php">SIP</a></li>
                <li class="menunya inti"> <a class="text-decoration-none" href="">JUALAN</a></li>
                <li class="menunya inti"> <a class="text-decoration-none" href="cs.php">HUBUNGI KAMI</a></li>
                <li class="menunya dropdown font-weight-bold position-relative" style="right: 45px;"> <a href="#">Menu</a>
                  <ul class="isi-dropdown position-absolute" style="left: -33px;">
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
        <img id="gambar1" src="img/jualan.jpg" alt="">
        <p>Isi Data Jualanmu Dengan Lengkap, Agar Para Pembeli Yakin Dengan Barangmu!</p>
    </div>

    <!--form-->
    <div class="form-isian">
        <form>
            <div class="form-row">
              <div class="col-md-6 mb-3">
                <label for="validationDefault01">Nama Usaha</label>
                <input type="text" class="form-control form-control-sm" id="validationDefault01" value="" required placeholder="Tulis Nama Usaha...">
              </div>
              <div class="col-md-6 mb-3">
                <label for="validationDefault02">Media Sosial</label>
                <input type="text" class="form-control form-control-sm" id="validationDefault02" value="" required placeholder="Tulis Link">
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-6 mb-3">
                <label for="validationDefault03">Nama Pemilik</label>
                <input type="text" class="form-control form-control-sm" id="validationDefault03" required placeholder="Tulis Nama Pemilik...">
              </div>
              <div class="col-md-6 mb-3">
                <label for="validationDefault04">Kategori Usaha</label>
                <select class="custom-select form-control form-control-sm" id="validationDefault04" required>
                  <option selected disabled value="">Pilih...</option>
                  <option>Pakaian</option>
                  <option>Makanan</option>
                  <option>Sembako</option>
                </select>
              </div>
              <div class="col-md-6 mb-3">
                <label for="validationDefault05">Alamat Usaha</label>
                <input type="text" class="form-control form-control-sm" id="validationDefault05" required placeholder="Tulis Alamat Usaha">
              </div>
              <div class="col-md-6 mb-3">
                <label for="validationDefault05">No. Telepon/Whatsapp (Aktif)</label>
                <input type="text" class="form-control form-control-sm" id="validationDefault05" required placeholder="Tulis Link Whatsapp">
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-6 mb-3">
                <label for="validationDefault01">Provinsi</label>
                <input type="text" class="form-control form-control-sm" id="validationDefault01" value="" required placeholder="Tulis Provinsi...">
              </div>
              <div class="col-md-6 mb-3">
                <label for="validationDefault02">Kecamatan</label>
                <input type="text" class="form-control form-control-sm" id="validationDefault02" value="" required placeholder="Tulis Kecamatan...">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6 mb-3">
                <label for="exampleFormControlTextarea1">Deskripsi Usaha</label>
                <textarea class="form-control form-control-sm" id="exampleFormControlTextarea1" rows="3" placeholder="Tulis Deskripsi..."></textarea>
              </div>
              <div class="col-md-6 mb-3">
                <label for="validationDefault01">Kabupaten/Kota</label>
                <input type="text" class="form-control form-control-sm" id="validationDefault01" value="" required placeholder="Tulis Kabupaten/Kota..."> 
              </div>
            </div>
            <div class="form-group">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                <label class="form-check-label" for="invalidCheck2">
                  Saya Bersumpah Bahwa Saya Tidak Melakukan Tindak Kejahatan/Penipuan
                </label>
              </div>
            </div>
            <button class="btn btn-primary btn-sm" type="submit">Daftar</button>
          </form>
    </div>

    <!--Footer-->
    <div class="footer">
        <footer>
            <p>© SIP Team 2021</p>
        </footer>
    </div>
</body>
</html>