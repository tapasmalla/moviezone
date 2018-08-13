<?php 
	require_once "../models/project.php";
	
	// print_r($_REQUEST);
	if(empty($_REQUEST['areaid'])){
		echo "Please select Area";
	}
	else if(empty($_REQUEST['theater'])){
		echo "Please Enter Theater Name";
	}
	else{
		$areaid = $_REQUEST['areaid'];
		$theater = $_REQUEST['theater'];

		$result = $obj->select("count(the_name) as cnt","mz_theater","the_name='$theater' and the_areaid='$areaid'");
		// print_r($result);
		
		if($result[0]['cnt'] > 0){
			echo "Theater is already exist";
		}
		else{

			$obj->insert("mz_theater","the_name,the_areaid","'$theater','$areaid'");
			echo "Theater Added";
		}
	}

 ?>