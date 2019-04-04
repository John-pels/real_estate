<?php 
include "includes/config.php";
?>
<?php
session_start();


//For user login

	if (isset($_POST['submit'])){
		$email = $_POST['email'];
		$password = sha1($_POST['password']);

		// Select query code below
		$query = mysqli_query($con, "SELECT * FROM register WHERE email='$email' && password='$password' ");
		$row = mysqli_num_rows($query);
		$fetch = mysqli_fetch_array($query);
		if ($row == 1) {
			$_SESSION['id'] = $fetch['id'];
			echo "<script> alert('Welcome to Pels-Homes Real Estate!'); 
				window.location='./mainpage.php';
			</script>";
			 
		} else{
			echo "<script> alert('Please enter a valid email or password!'); 
				window.location='../index.php';
			</script>";
		}

	}
	?>





