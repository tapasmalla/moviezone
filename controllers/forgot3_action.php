<?php 
	require_once "../models/project.php";
	// pre($_REQUEST);
	
	if(preg_match("/^[a-zA-Z0-9]{4,12}$/", $_REQUEST['u_pass']) == false){
		echo "Invalid Password";
	}
	else if($_REQUEST['u_pass'] != $_REQUEST['u_cpass']){
		echo "Password Miss Match";
	}
	else{

		$password =  sha1($_REQUEST['u_pass']);
		$email = $_SESSION['email_for_forgotpass'];

		$obj->update(
			"mz_users",
			"user_password='$password'",
			"user_email='$email'"
		);
		echo "ok";
	}
 ?>