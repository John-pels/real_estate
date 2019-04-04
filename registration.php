<?php
include 'includes/config.php';
include 'includes/register.php';

?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/register.css">
	<link rel="stylesheet" type="text/css" href="css/sweetalert2.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon"  href="img/logo_graphic_250h.png">

	<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">
	<title>Pels-Home Registration Page</title>
</head>
<body>
	<div class="container" id="register_container">
		<div class="row">
				<div class="col-lg-4 offset-lg-4 ">
					<div class="header">
					<center><img src="img/transparent_logo.png" class="img-responsive" ></center>
					</div>
				</div>
			</div>
								<div class="row">
			<div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-8 offset-sm-2 col-xs-12">
							<div class="tab">
					<center>		
				<a href="registration.php"><button class="btn btn-warning" id="register"  style="border: 2px #fff solid;">Register  <i class="fa fa-pencil"></i> </button></a>
				<a href="index.php"><button class="btn btn-success" id="login" style="border: 2px #fff solid;">Login <i class="fa fa-arrow-right"></i> </button></a>
				<a href="admin_login.php"><button class="btn btn-primary" id="home" style="border: 2px #fff solid;">Admin <i class="fa fa-home"></i></button> </a>
				</div>
						
						</div>
						</div>
					
					
								<div class="row">
			<div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-8 offset-sm-2 col-xs-12">
									<div class="content_wrap">
					<form method="POST" action="" enctype="multipart/form-data" class="form-input">
						<span id="form-title"><i>Creat an account with us today and let's help you survey.</i> </span>
											<br>
											<br>
									<center>	
								<div class="form-name">
									<input type="text" name="name" id="name" placeholder="Enter your Full-name" required="" class="form-control" style="margin-bottom: 10px; padding-left: 30px;">
								</div>

								<div class="form-country">
									
									<select class="form-control" name="state" id="state" style="margin-bottom: 10px;">
										<option>Select..</option>
										<?php 
										$query = mysqli_query($con, "SELECT * FROM state");
										$row = mysqli_num_rows($query);
										while ($fetch = mysqli_fetch_array($query)) {
											?>

													<option value="<?php echo $fetch['state'] ?>"><?php echo $fetch['state'] ?></option>

											<?php
										}
										 ?>
										
									</select>
								</div>
								<div class="form-gender">
									<select class="form-control" name="gender" id="gender" style="margin-bottom: 10px;">
										<option>Gender..</option>
										<?php 
										$query = mysqli_query($con, "SELECT * FROM gender");
										$row = mysqli_num_rows($query);
										while ($fetch = mysqli_fetch_array($query)) {
											?>

													<option value="<?php echo $fetch['gender'] ?>"><?php echo $fetch['gender'] ?></option>

											<?php
										}
										 ?>
										
									</select>
								</div>
								<div class="form-address">
									<textarea class="form-control" name="address" id="address" style="margin-bottom: 10px;" placeholder="Your Residential address"></textarea> 
								</div>
								<div class="form-email">
									<input type="email" name="email" id="email" placeholder="Enter your Email Address" required="" class="form-control" style="margin-bottom: 10px; padding-left: 30px;" >
								</div>
								<div class="form-pass">
									<input type="password" name="password" id="password" placeholder="Enter your Password" required="" class="form-control" style="margin-bottom: 10px; padding-left: 30px;" >
								</div>
								<div class="form-cpass">
									<input type="password" name="cpassword" id="cpassword" placeholder="Confirm your Password" required="" class="form-control" style="margin-bottom: 10px;padding-left: 30px;" >
								</div>
								<div class="form-phone">
									<input type="text" name="phone" id="phone" placeholder="Enter your Phone number" required="" class="form-control" style="margin-bottom: 10px;padding-left: 30px;"" >
								</div>
								<div class="form-description">
									<textarea class="form-control" name="description" id="description" style="margin-bottom: 10px;" placeholder="Description and location of preferred Land or house"></textarea> 
								</div>
								

								<div class="btn-login">
									<center>
								<button id="submit" type="submit" class="btn btn-primary" name="submit" id="submit">Submit <i class="fa fa-arrow-right"></i></button>
								</center>
							
								

											</div>
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