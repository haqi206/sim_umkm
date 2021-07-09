<?php
include 'koneksi.php';
session_start();
if ( !isset($_SESSION["login"]) ){
	header('location: loginakun.php');
}

$label = ["Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"];

for($bulan = 1;$bulan < 13;$bulan++)
{
	$query = mysqli_query($koneksi,"select sum(pendapatan) as jumlah from tb_umkm where MONTH(tanggal)='$bulan'");
	$row = $query->fetch_array();
	$jumlah_produk[] = $row['jumlah'];
}
?>


<!DOCTYPE html>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akun</title>
    <link rel="icon" href="img/PUMA.png">
    <link rel="stylesheet" href="akun.css">
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
                      <li><a href="landingPage.php">BERANDA</a></li>
                      <li><a href="umkm.php">UMKM</a></li>
                      <li><a href="cs.php">HUBUNGI KAMI</a></li>
                      <li><a href="akun.php">AKUN</a></li>
                    </ul>
                </li>
            </ul>
        </nav> 
  
        <div class="box">
              <h2 class="umkm">Kaos Mantap</h2>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit 
                esse cillum dolore eu fugiat nulla pariatur. 
              </p>
              <h2 class="grafik">Grafik</h2>
                      
                <div style="width: 600px;height: 600px" class="chart">
                  <canvas id="myChart"></canvas>
                </div>


	<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: <?php echo json_encode($label); ?>,
				datasets: [{
					label: 'Grafik Penjualan',
					data: <?php echo json_encode($jumlah_produk); ?>,
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