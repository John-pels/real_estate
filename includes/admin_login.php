	<?php 
include "includes/config.php";

	 ?>

	<?php 
//For Administrator Login
session_start();

if (isset($_POST['admin_login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];

		// Select query code below
		$query = mysqli_query($con, "SELECT * FROM admin WHERE username='$username' && password='$password' ");
		$row = mysqli_num_rows($query);
		$fetch = mysqli_fetch_array($query);
		if ($row == 1) {
			$_SESSION['id'] = $fetch['id'];
			echo "<script> alert('Welcome to Pels-Homes Admin Panel!'); 
				window.location='./admin_dashboard.php';
			</script>";
			 
		} else{
			echo "<script> alert('Please enter a valid Username or password!'); 
				window.location='./admin_login.php';
			</script>";
		}

	}

	 ?>

		