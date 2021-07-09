<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
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
                      <li><a href="akun.php">AKUN</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
    <br>
    <br>
    <br>
    <!-- Login -->
    <div class="form" style="max-width: 18rem;">
        <div class="register-form">
        <h2>Daftar Diri</h2>
          <form action="" method="POST" class="register-form">

          <?php
				if (isset($_POST['daftar'])){
					$q = $koneksi->query("SELECT * FROM akun where username='".$_POST['username']."' or email='".$_POST['email']."'");
					if ($q->num_rows > 0){
						echo '<script type="text/javascript">';
                        echo ' alert("Username atau email telah digunakan.")';
                        echo '</script>';
					}else{
						if($koneksi->query("INSERT INTO akun (username, email, password) values ('".$_POST['username']."', '".$_POST['email']."', '".$_POST['password']."')")){
							echo '<script type="text/javascript">';
                            echo ' alert("Berhasil Mendaftar")';
                            echo '</script>';
							header('refresh: 2;url=loginakun.php');
						}
					}
				}
			?>

            Username
            <input type="text" placeholder="Username" name="username" required minlength="3">
            Email
            <input type="tex" placeholder="email" name="email" required>
            Password
            <input type="password" placeholder="Password" name="password" required>
            <br>
            <p> Sudah mendaftar? <a href="login.php">Login</a></p>
            <button type="submit" name="daftar">Daftar</button>
        </form>
    </div>
</div>
        </div>
      </div>



    <!-- main -->
    <!--Footer-->
    <div class="footer">
        <footer>
            <p>© SIP Team 2021</p>
        </footer>
    </div>

</body>
</html>