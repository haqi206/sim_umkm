<?php
session_start();
include 'koneksi.php';
if ( isset($_SESSION["login"]) ){
	header('location: landingpage.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" href="img/PUMA.png">
    <link rel="stylesheet" href="register.css">
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
    
    <!-- Login -->
    <br><br><br>
    <div class="form" style="max-width: 18rem;">
        <div class="register-form">
        <h2>Login</h2>
        <br>
          <form action="" method="POST" class="login-form">

          <?php
			if (isset($_POST['login'])){
				$q = $koneksi->query("SELECT * FROM akun where username='".strtolower($_POST['username'])."'");
					if ($q->num_rows > 0){
						if($q->fetch_assoc()['password'] == $_POST['password']){
							$_SESSION["login"] = true;
							header('location: landingpage.php');
					}else{
						echo '<script type="text/javascript">';
                        echo ' alert("Username atau password salah.")';
                        echo '</script>';
					}
				}else{
					echo '<script type="text/javascript">';
                    echo ' alert("Username atau password salah.")';
                    echo '</script>';;
				}
			}
			?>

            Username
            <input type="text" placeholder="Username" name="username" required minlength="3">
            Password
            <input type="password" placeholder="Password" name="password" required>
            <br>
            <p> Belum mendaftar? <a href="register.php">Daftar</a></p>
            <br>
            <button type="submit" name="login">Login</button>
        </form>
    </div>
</div>
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