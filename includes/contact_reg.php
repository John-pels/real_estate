<?php 
include "config.php";
 ?>

 <?php 
if (isset($_POST['c_submit'])) {

$name = $_POST['c_name'];
$email = $_POST['c_email'];
$message = $_POST['c_message'];



$insert = mysqli_query($con, "INSERT INTO contact_us (name,email,message,date) VALUES ('$name','$email','$message',CURRENT_TIMESTAMP)");


if ($insert) {
		echo '<script> alert( "Message sent! \n Thank you, We will get back to you.");</script>';
}

	}
  ?>