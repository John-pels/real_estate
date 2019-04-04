<?php
include 'includes/login.php';
 ?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="stylesheet" type="text/css" href="css/sweetalert2.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon"  href="img/logo_graphic_250h.png">

	<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">
	<title>Pels-Home Login Page</title>
</head>
<body id="login_container">
	<div class="container" id="login_container">
		<div class="row">
				<div class="col-lg-4 offset-lg-4 ">
					<div class="header">
					<center><img src="img/transparent_logo.png" class="img-responsive"></center>
					</div>
				</div>
			</div>
								<div class="row">
			<div class="col-lg-4 offset-lg-4 col-md-7 offset-md-2 col-sm-7 offset-sm-2 col-xs-12">
							<div class="tab">
					<center>		
				<a href="registration.php"><button class="btn btn-warning" id="register"  style="border: 2px #fff solid;">Register  <i class="fa fa-pencil"></i> </button></a>
				<a href="index.php"><button class="btn btn-success" id="login" style="border: 2px #fff solid;">Login <i class="fa fa-arrow-right"></i> </button></a>
				<a href="admin_login.php"><button class="btn btn-primary" id="home" style="border: 2px #fff solid;">Admin <i class="fa fa-home"></i></button> </a>
				</div>
						
						</div>
						</div>
					
					
								<div class="row">
			<div class="col-lg-4 offset-lg-4 col-md-7 offset-md-2 col-sm-7 offset-sm-2 col-xs-12">
									<div class="content_wrap">
					<form method="post" action="" enctype="multipart/form-data" class="form-input" id="form-login">
						<span id="form-title"><center><i>Login to your account</i></center></span>
											<br>
											<br>
									<center>		
								<div class="form-input">
									<input type="email" name="email" placeholder="Enter your email address" required="" class="form-control" style="width: 200px; margin-bottom: 10px;  padding-left: 30px; margin-right: 50px;" >
								</div>


								<div class="form-input2">
									<input type="password" name="password" placeholder="Enter your Password" required="" class="form-control" style="width: 200px; padding-left: 30px; margin-bottom: 10px;margin-right: 50px;" >
								</div>

								<div class="btn-login">
								<button id="submit" class="btn btn-primary"  type="submit" style="margin-left: 100px;" name="submit">Login <i class="fa fa-arrow-right"></i></button>
								</div>
								<br>
								<br>
								<div id="create_account">Don't have an account yet? <br> click Register button</div> 

								


					</form>
				</div>


							<div class="row">
								
								<div class="col-lg-6 offset-lg-3 col-md-6 offset-md-3 col-sm-7 offset-sm-2 col-xs-8">
									<center>
							<span style="color: #fff;"><center>2018 © Pels-Homes</center>  </span>
							</center> 
								</div>

							</div>

			</div>
			

<script type="text/javascript" src="js/sweetalert2.all.js"></script>
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>
