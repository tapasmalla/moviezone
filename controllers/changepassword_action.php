<?php 
	require_once "../models/project.php";
	// pre($_REQUEST);
	

	if(preg_match("/^[a-zA-Z0-9]{4,12}$/", $_REQUEST['cpass']) == false){
		echo "Enter Your Current Password";
	}
	else if(preg_match("/^[a-zA-Z0-9]{4,12}$/", $_REQUEST['npass']) == false){
		echo "Enter Your New Password";
	}
	else if($_REQUEST['npass'] != $_REQUEST['cnpass']){
		echo "Password Miss Match";
	}
	else if($_REQUEST['cpass'] == $_REQUEST['npass']){
		echo "Current Password & New password should be differ";
	}

	else{
		$curpass = sha1($_REQUEST['cpass']);
		$newpass = sha1($_REQUEST['npass']);

		$email = $_SESSION['us_email'];
		// echo $email;

		$result = $obj->select("user_password","mz_users","user_email='$email'");
		// pre($result);
		$dbpasss = $result[0]['user_password'];
		// echo $dbpasss;
		if($dbpasss == $curpass){
			$obj->update("mz_users","user_password='$newpass'","user_email='$email'");
			echo "ok";
		}
		else{
			echo "Current password is invalid";
		}
	}
 ?>