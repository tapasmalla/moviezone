<?php 	
	require_once "../models/project.php";
	// print_r($_REQUEST);
	if(preg_match("/^([a-zA-Z0-9][a-zA-Z0-9\.\_]+[a-zA-Z0-9])@([a-zA-Z0-9][a-zA-Z0-9]+[a-zA-Z0-9]).([a-zA-Z]{2,})(\.[a-zA-Z]{2,})?$/", $_REQUEST['u_email']) == false){
		echo "Invalid Email";
	}
	else if(preg_match("/^[a-zA-Z0-9]{4,12}$/", $_REQUEST['u_pass']) == false){
		echo "Invalid Password";
	}
	else{
		$email = $_REQUEST['u_email'];
		$password = sha1($_REQUEST['u_pass']);
		// echo $password;
		$result = $obj->select(
					"user_password",
					"mz_users",
					"user_email='$email'"
				);
		// print_r($result);
		if($result[0]['user_password'] == $password){
					
			$user_details = $obj->get_user_details($email);
			// pre($user_details);
			// echo session_id();

			$_SESSION['us_id'] = $user_details[0]['user_id'];
			$_SESSION['us_name'] = $user_details[0]['user_name'];
			$_SESSION['us_mobile'] = $user_details[0]['user_mobile'];
			$_SESSION['us_email'] = $user_details[0]['user_email'];
			$_SESSION['us_type'] = $user_details[0]['user_type'];

			echo "ok";
		}
		else{
			echo "Entered Password is Wrong";
		}
	}
 ?>