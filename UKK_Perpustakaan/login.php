<?php
    include "koneksi.php";
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Login 10</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style_log.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(assets/img/book.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Login Perpustakaan</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
					<?php
                        if(isset($_POST['login'])){
                        	$username = $_POST['username'];
                        	$password = md5($_POST['password']);

                        	$data = mysqli_query($koneksi, "SELECT*FROM user WHERE username = '$username' AND password = '$password'");
                    		$cek = mysqli_num_rows($data);
                        	if($cek > 0){
                        		$_SESSION['user'] = mysqli_fetch_array($data);

                             	echo '<script>alert("Selamat Datang, Anda Berhasil Login"); location.href="index.php";</script>';
                        	}else{

                             	echo '<script>alert("Maaf, Username/Password Yang Anda Masukkan Salah")</script>';
                           	}
                        }
                    ?>
		      	<form method="post" class="signin-form">
		      		<div class="form-group">
		      			<input type="text" class="form-control" name="username" placeholder="Username" required>
		      		</div>
	            <div class="form-group">
	              <input  type="password" class="form-control" name="password" placeholder="Password" required>
	            </div>
	            <div class="form-group">
	            	<button type="submit" name="login" class="form-control btn btn-primary submit px-3">Login</button>
	            </div>
				<div class="form-group ">
					<a class="form-control btn btn-primary " href="register.php">Register</a>
	            </div>
	          </form>
		      </div>
			  	<div class="card-footer text-center py-3">
                    <div class="small">
                         &copy; 2024 Aplikasi Perpustakaan Digital.
                    </div>
                    </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

