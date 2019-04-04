<?php 
include "config.php";
$id = $_GET['id'];
	$query = mysqli_query($con,"DELETE FROM register WHERE id = '$id'");

	if ($query) {
			echo "<script> alert('Record deleted successfully'); 
		window.location = '../admin_dashboard.php';
		</script>";
		
	}

 ?>