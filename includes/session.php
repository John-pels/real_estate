	<?php 
	session_start();
	if (!isset($_SESSION['id'])) {
		echo "<script> alert('Sorry,You have to login first'); 
		window.location='./index.php';
		</script>";
	}
 ?>