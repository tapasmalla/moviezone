<?php
	require_once "../models/project.php";
	// pre($_REQUEST);
	if(preg_match("/^([a-zA-Z0-9][a-zA-Z0-9\.\_]+[a-zA-Z0-9])@([a-zA-Z0-9][a-zA-Z0-9]+[a-zA-Z0-9]).([a-zA-Z]{2,})(\.[a-zA-Z]{2,})?$/", $_REQUEST['u_email']) == false){
		echo "Invalid Email";
	}
	else{
		$email = $_REQUEST['u_email'];
		$_SESSION['email_for_forgotpass'] = $email;

		$result = $obj->select(
			"user_mobile",
			"mz_users",
			"user_email='$email'"
		);
		// pre($result);
		if(is_array($result)){
			$mob = $result[0]['user_mobile'];
			// echo $mob;
			$otp = rand(100000,999999);
			// echo $otp;
			$obj->update(
				"mz_users",
				"user_otp='$otp'",
				"user_email='$email'"
			);
			echo "ok";
		}
		else{
			echo "Entered email does not exist";
		}
	}
 ?>