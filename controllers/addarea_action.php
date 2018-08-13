<?php 
	
	require_once "../models/project.php";
	// print_r($_REQUEST);

	if(empty($_REQUEST['area'])){
		echo "Please Enter Area Name";
	}
	else{
		$area = $_REQUEST['area'];
		$usertype = $_SESSION['us_type'];
		// echo $usertype;
		$result = $obj->select("count(*) as cnt","mz_area","area_name='$area'");
		// print_r($result);
		if($result[0]['cnt'] > 0){
			echo "Area Exist";
		}
		else{
		$result = $obj->insert("mz_area","area_name,area_ustype","'$area','$usertype'");
		echo "Area Added";
		}
	}
 ?>