<?php
session_start();
include 'koneksi.php';
if ( !isset($_SESSION["login"]) ){
	header('location: loginakun.php');
  exit;
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
                <li id="judul"> <a class="text-decoration-none" href="landingpage.php">SIP</a></li>
                <li class="menunya inti"> <a class="text-decoration-none" href="umkm.php">UMKM</a></li>
                <li class="menu inti"> <a href="isipendapatan.php">ISI</a></li>
                <li class="menunya inti"> <a class="text-decoration-none" href="cs.php">HUBUNGI KAMI</a></li>
                <li class="menunya dropdown font-weight-bold position-relative" style="right: 45px;"> <a href="#">Menu</a>
                  <ul class="isi-dropdown position-absolute" style="left: -33px;">
                    <li><a href="landingPage.php">BERANDA</a></li>
                    <li><a href="umkm.php">UMKM</a></li>
                    <li><a href="cs.php">HUBUNGI KAMI</a></li>
                    <li><a href="IsiPendapatan.php">DATA PENDAPATAN</a></li>
                  </ul>
                </li>
            </ul>
        </nav>
    </div>


    <!--Header-->
    <div class="divgambar">
        <img id="gambar1" src="jualan.jpg" alt="">
        <p>Isi Data Pendapatan</p>
    </div>

    <!--form-->
    <div class="form-isian">
        <form action="" method="POST">
            <div class="form-row">
              <div class="col-md-6 mb-3">
                <label for="validationDefault01">Nama Usaha</label>
                <input type="text" class="form-control form-control-sm" id="validationDefault01" value="" name="nama" required placeholder="Tulis Nama Usaha...">
              </div>
              <div class="col-md-6 mb-3">
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-6 mb-3">
                <label for="validationDefault03">Isi Pendapatan</label>
                <input type="text" class="form-control form-control-sm" id="validationDefault03" name="pendapatan" required placeholder="Tulis Pendapatan...">
              </div>
              <div class="col-md-6 mb-3">
                <label for="validationDefault04">Bulan</label>
                <input type="date" class="form-control form-control-sm" id="validationDefault04" name="bulan" required>
              </div>
              <div class="col-md-6 mb-3">
                <label for="validationDefault05">Alamat Usaha</label>
                <input type="text" class="form-control form-control-sm" id="validationDefault05" name="alamat" required placeholder="Tulis Alamat Usaha">
              </div>
              <div class="col-md-6 mb-3">
                <label for="validationDefault05">No. Telepon/Whatsapp (Aktif)</label>
                <input type="text" class="form-control form-control-sm" id="validationDefault05" name="notelp" required placeholder="Tulis Link atau Nomor Whatsapp">
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-6 mb-3">
              </div>
              <div class="col-md-6 mb-3">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6 mb-3">
                <label for="exampleFormControlTextarea1">Catatan</label>
                <textarea class="form-control form-control-sm" id="exampleFormControlTextarea1" rows="3" name="catatan" placeholder="Tulis Catatan..."></textarea>
              </div>
              <div class="col-md-6 mb-3">
              </div>
            </div>
            <div class="form-group">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                <label class="form-check-label" for="invalidCheck2">
                  Saya Bersumpah Bahwa Saya Memasukkan Informasi Sesungguhnya
                </label>
              </div>
            </div>
            <button class="btn btn-primary btn-sm" type="submit" name="submit" value="Submit">Kirim</button>
          </form>
    </div>

    <?php
					if (isset($_POST['submit'])){
            $tanggal = date('Y-m-d', strtotime($_POST['bulan']));
            $nama = $_POST['nama'];
            $pendapatan = $_POST['pendapatan'];
						$add = "INSERT INTO tb_umkm 
							(nama, tanggal, pendapatan)
							values
							('$nama', '$tanggal', '$pendapatan')
						";
            $q2 = $koneksi->query($add);
						if ($q2){
              echo "Berhasil menyimpan data. ";
						}else{
							echo "Gagal menyimpan data. ".$koneksi->error;
						}
					}
					?>

    <!--Footer-->
    <div class="footer">
        <footer>
            <p>© SIP Team 2020</p>
        </footer>
    </div>
</body>
</html>