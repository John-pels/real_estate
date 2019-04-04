<?php 
	include "config.php";
 ?>
 <?php 
 	session_start();
 	session_destroy();
 	$_SESSION['id'] = array();
 echo '<script>alert("Thank you! We sincerely appreciate your Patronage. \n\n \t We are looking forward to hosting you here again!");
 	window.location = "../index.php";
 </script>';
  ?>