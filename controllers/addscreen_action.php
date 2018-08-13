<?php 
	require_once "../models/project.php";
	// pre($_REQUEST);

	if(empty($_REQUEST['areaid'])){
		echo "Please Seelct Area";
	}
	else if(empty($_REQUEST['theaterid'])){
		echo "Please Seelct Theater";
	}
	else if(empty($_REQUEST['screen'])){
		echo "Please Enter Screen";
	}
	else if(empty($_REQUEST['seat'])){
		echo "Please Enter Seat No";
	}
	else{
		$areaid = $_REQUEST['areaid'];
		$theaterid = $_REQUEST['theaterid'];
		$screen = $_REQUEST['screen'];
		$seat = $_REQUEST['seat'];

		$result = $obj->select("count(*) as cnt","mz_screen","screen_name='$screen'");
		// pre($result);
		if($result[0]['cnt'] > 0){
			echo "Screen Exit";
		}
		else{
			$obj->insert("mz_screen","screen_name,seat_no,theater_id","'$screen','$seat','$theaterid'");

			echo "screen added";
		}
		
	}

	
	
 ?>