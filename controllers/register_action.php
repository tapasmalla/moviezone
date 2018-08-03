<?php 
	require_once "../models/project.php";
	// Print_r($_REQUEST);
	// $conn = new mysqli("localhost","root","","moviezone");
	if(preg_match("/^[a-zA-Z][a-zA-Z ]+[a-zA-Z]$/", $_REQUEST['u_name']) == false){
		echo "Invalid Name";
	}
	else if(preg_match("/^[1-9][0-9]{9}$/", $_REQUEST['u_mobile']) == false){
		echo "Invalid Mobile No";
	}
	else if(preg_match("/^([a-zA-Z0-9][a-zA-Z0-9\.\_]+[a-zA-Z0-9])@([a-zA-Z0-9][a-zA-Z0-9]+[a-zA-Z0-9]).([a-zA-Z]{2,})(\.[a-zA-Z]{2,})?$/", $_REQUEST['u_email']) == false){
		echo "Invalid Email";
	}
	else if(preg_match("/^[a-zA-Z0-9]{4,12}$/", $_REQUEST['u_pass']) == false){
		echo "Invalid Password";
	}
	else if($_REQUEST['u_pass'] != $_REQUEST['u_cpass']){
		echo "Password Miss Match";
	}
	else if(empty($_REQUEST['u_type'])){
		echo "Please Select User Type";
	}
	else{
		$name = $_REQUEST['u_name'];
		$mobile = $_REQUEST['u_mobile'];
		$email = $_REQUEST['u_email'];
		$password = sha1($_REQUEST['u_pass']);
		$usertype = $_REQUEST['u_type'];

		$result = $obj->select(
					"count(*) as cnt",
					"mz_users",
					"user_email='$email'"
				);
		// print_r($result);
		if($result[0]['cnt'] > 0){
			echo "user exist";
		}
		else{
			$obj->insert(
				"mz_users",
				"user_name,user_mobile,user_email,user_password,user_type",
				"'$name','$mobile','$email','$password','$usertype'"
			);
			echo "ok";
		}
		
	}



 ?>

