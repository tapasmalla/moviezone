<?php 
	session_start();
	session_regenerate_id(true);

	unset($_SESSION['us_id']);
	unset($_SESSION['us_name']);
	unset($_SESSION['us_mobile']);
	unset($_SESSION['us_email']);
	unset($_SESSION['us_type']);

	session_destroy();
	header("location:index.php");
 ?>