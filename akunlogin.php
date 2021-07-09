<?php
session_start();
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akun</title>
    <link rel="icon" href="img/PUMA.png">
    <link rel="stylesheet" href="landingPage.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
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
        
    <!-- main -->
    <div class="box">
      <h1>Nama_Akun</h1>
      
      <head>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
          google.charts.load('current', {'packages':['corechart']});
          google.charts.setOnLoadCallback(drawChart);
    
          function drawChart() {
            var data = google.visualization.arrayToDataTable([
              ['Bulan', 'Penghasilan', 'Expenses'],
              ['Jan',  1900,      400],
              ['Feb',  1170,      460],
              ['Mar',  660,       1120],
              ['Apr',  1030,      540],
              ['Mei',  1900,      400],
              ['Jun',  1170,      460],
              ['Jul',  660,       1120],
              ['Agu',  1030,      540],
              ['Sep',  1900,      400],
              ['Okt',  1170,      460],
              ['Nov',  660,       1120],
              ['Des',  1030,      540]
            ]);
    
            var options = {
              title: 'Company Performance',
              hAxis: {title: 'Year',  titleTextStyle: {color: '#333'}},
              vAxis: {minValue: 0}
            };
    
            var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
            chart.draw(data, options);
          }
        </script>
      </head>
      <body>
        <div id="chart_div" style="width: 100%; height: 500px;"></div>
      </body>
        <body>
          <div id="curve_chart" style="width: 900px; height: 500px"></div>
        </body>
      
    </div>
    <!--Footer-->
    <div class="footer">
        <footer>
            <p>© SIP Team 2021</p>
        </footer>
    </div>

</body>
</html>