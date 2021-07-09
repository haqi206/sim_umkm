<!DOCTYPE html>
<html>
<head>
	<title>MEMBUAT GRAFIK DARI DATABASE MYSQL DENGAN PHP DAN CHART.JS - www.malasngoding.com</title>
	<script type="text/javascript" src="Chart.js"></script>
</head>
<body>
	<style type="text/css">
	body{
		font-family: roboto;
	}

	table{
		margin: 0px auto;
	}
	</style>


	<center>
		<h2>PENDAPATAN BULANAN <br/>- Kaos Mantap -</h2>
	</center>


	<?php 
	include 'koneksi.php';
	?>

	<div style="width: 800px;margin: 0px auto;">
		<canvas id="myChart"></canvas>
	</div>

	<br/>
	<br/>


	<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["januari", "februari", "maret", "april"],
				datasets: [{
					label: '',
					data: [
					<?php 
					$jumlah_jan = mysqli_query($koneksi,"select sum(pendapatan) AS sold from umkmtable where bulan LIKE'januari'");
					while($row = mysqli_fetch_array($jumlah_jan)) {echo '"'.$row['sold'].'",';} ;
					?>, 
					<?php 
					$jumlah_feb = mysqli_query($koneksi,"select sum(pendapatan) AS sold from umkmtable where bulan LIKE 'februari'");
					while($row = mysqli_fetch_array($jumlah_feb)) {echo '"'.$row['sold'].'",';} ;
					?>, 
					<?php 
					$jumlah_mar = mysqli_query($koneksi,"select sum(pendapatan) AS sold from umkmtable where bulan LIKE 'maret'");
					while($row = mysqli_fetch_array($jumlah_mar)) {echo '"'.$row['sold'].'",';} ;
					?>, 
					<?php 
					$jumlah_apr = mysqli_query($koneksi,"select sum(pendapatan) AS sold from umkmtable where bulan LIKE 'april'");
					while($row = mysqli_fetch_array($jumlah_apr)) {echo '"'.$row['sold'].'",';} ;
					?>
					],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)'
					],
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