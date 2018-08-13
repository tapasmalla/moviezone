<?php 
	require_once "../models/project.php";

	// print_r($_REQUEST);
	if(empty($_REQUEST['movie_type'])){
		echo "Please Enter Movie Type";
	}
	else{

		$movie_type = $_REQUEST['movie_type'];
		
		$result = $obj->select("count(*) as cnt","mz_motype","mo_type='$movie_type'");
		// pre($result);
		if($result[0]['cnt'] > 0){
			echo "Language Already Added";
		}
		else{

			$obj->insert("mz_motype","mo_type","'$movie_type'");
			echo "okay";
		}
	}
	
 ?>