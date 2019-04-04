<?php 
include 'includes/config.php';
?>

<?php

if (isset($_POST['submit'])){
	$name = $_POST['name'];
	$state = $_POST['state'];
	$gender = $_POST['gender'];
	$address = $_POST['address'];
	$email = $_POST['email'];
	$pass = sha1($_POST['password']);
	$cpass = sha1($_POST['cpassword']);
	$phone = $_POST['phone'];
	$description = $_POST['description'];
	
	//  $check = mysqli_query($con, "SELECT * from register WHERE name = '$name' && email = '$email'");
	//  $num = mysqli_num_rows($check);
	//  $fetch = mysqli_fetch_array($check);
	// if ($num > 0) {
	// 	echo '<script>alert("Full-name or Email address already exist!");</script>';	
	// }

 if ($pass != $cpass) {
		echo '<script>alert("Please re-enter valid password!");</script>';	
	}

	else if ((empty($name)) || (empty($pass)) || (empty($cpass)) || (empty($email)) || (empty($description)) ||(empty($phone)) || (empty($address)) || (empty($gender)) ||(empty($state))) {

		echo '<script>alert("All fields are required!");</script>';
		header("location: ../index.php");	
	}

	else {

		$insert = mysqli_query ($con, " INSERT INTO register (fullname,state,gender,address,email,password,c_password,phone,description,date) VALUES ('$name','$state','$gender','$address','$email','$pass','$cpass','$phone','$description',CURRENT_TIMESTAMP)");


			if ($insert) {
			echo '<script>alert("Thank you! \n Registration Successful! \n You may now proceed to Login.");
			window.location="index.php";
			
			</script>';
			
		}
		else {
			echo '<script>alert("Error in Registration!");</script>';
		}


	}

	
	
}



?>
