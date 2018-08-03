<?php 
	require_once "helpers.php";
	final class Project extends Helpers{
		function get_user_details($email){
			return Helpers::select(
				"user_id,user_name,user_mobile,user_email,user_type",
				"mz_users",
				"user_email='$email'"
			);
		}
	}

	$obj = new Project();
 ?>