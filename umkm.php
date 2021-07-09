<?php
include 'koneksi.php';
$produk = mysqli_query($koneksi,"select * from tb_daftarumkm");
while($row = mysqli_fetch_array($produk)){
	$nama_produk[] = $row['nama'];
	
	$query = mysqli_query($koneksi,"select sum(pendapatan) as pendapatan from tb_pendapatan where id_toko='".$row['id_toko']."'");
	$row = $query->fetch_array();
	$jumlah_produk[] = $row['pendapatan'];

  $label = ["Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"];

  for($bulan = 1;$bulan < 13;$bulan++)
  {
    $query = mysqli_query($koneksi,"select sum(pendapatan) as jumlah_pendapatan from tb_pendapatan where MONTH(tanggal)='$bulan'");
    $row = $query->fetch_array();
    $jumlah_produk2[] = $row['jumlah_pendapatan'];
  }
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>UMKM Sleman</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UMKM</title>
    <link rel="icon" href="img/PUMA.png">
    <link rel="stylesheet" href="umkm.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script> 
        $(document).ready(function(){
          $(".dropdown").click(function(){
            $(".isi-dropdown").slideToggle("slow");
          });
        });
    </script>
	<script type="text/javascript" src="Chart.js"></script>
</head>
<body>
<div class="body">
  <!--Navigasi-->
  <div class="nav" style="background-color: #232323;">
      <nav>
          <ul class="navbar1">
              <li id="theme"> <a href="landingpage.php">SIP</a></li>
              <li class="menu inti"> <a href="umkm.php">UMKM</a></li>
			  <li class="menu inti"> <a href="isipendapatan.php">ISI</a></li>
              <li class="menu inti"> <a href="cs.php">HUBUNGI KAMI</a></li>
              <li class="menu inti"> <a href="akun.php">AKUN</a></li> 
              <li class="menunya dropdown"> <a href="#">Menu</a>
                  <ul class="isi-dropdown">
                    <li><a href="umkm.php">UMKM</a></li>
                    <li><a href="cs.php">HUBUNGI KAMI</a></li>
                    <li><a href="akun.php">AKUN</a></li>
                  </ul>
              </li>
          </ul>
      </nav> 
  </div>
  
  <div class="box">
    <h2> GRAFIK UMKM SLEMAN </h2>

	<!-- ini grafik pertama -->
      <div style="width: 400px;height: 400px; left:60px">
        <canvas id="myChart" class="umkm"></canvas>
      </div>


	<!-- ini grafik kedua -->	
      <div style="width: 600px;height: 600px">
          <canvas id="myChart2"></canvas>
      </div>
  </div>

 
 
	<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: <?php echo json_encode($nama_produk); ?>,
				datasets: [{
					label: 'Grafik Pendapatan',
					data: <?php echo json_encode($jumlah_produk); ?>,
					backgroundColor: 'rgba(255, 99, 132, 0.2)',
					borderColor: 'rgba(255,99,132,1)',
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>

<script>
		var ctx = document.getElementById("myChart2").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: <?php echo json_encode($label); ?>,
				datasets: [{
					label: 'Grafik Pendapatan',
					data: <?php echo json_encode($jumlah_produk2); ?>,
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>


</body>
</html>