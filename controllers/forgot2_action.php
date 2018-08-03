<?php 
	require_once "../models/project.php";
	// pre($_REQUEST);
	if(empty($_REQUEST['u_otp'])|!is_numeric($_REQUEST['u_otp'])){
		echo "invalid OTP";
	}
	else{
		$otp = $_REQUEST['u_otp'];
		$email = $_SESSION['email_for_forgotpass'];
		// echo $email;
		$result = $obj->select(
			"user_otp",
			"mz_users",
			"user_email='$email'"
		);
		// pre($result);
		$uotp = $result[0]['user_otp'];
		// echo $uotp;
		if($uotp != $otp){
			echo "Invalid OTP";
		}
		else{
			echo "ok";
		}
	}
	
 ?>