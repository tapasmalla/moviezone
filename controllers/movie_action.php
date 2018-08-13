<?php 
	require_once "../models/project.php";
	pre($_REQUEST);
	print_r($_FILES);
	// exit;
	if(empty($_REQUEST['mo_name'])){
		echo "Please Enter Movie Name";
	}
	else if(empty($_REQUEST['movie_id'])){
		echo "Please Select Movie Type";
	}
	else if(empty($_REQUEST['lang_id'])){
		echo "Please Select Movie Language";
	}
 ?>