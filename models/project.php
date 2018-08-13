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

		function get_data($usertype){
			return Helpers::select("area_id,area_name","mz_area","$usertype");
		}

		function get_theater_areawise($id){
			return Helpers::select("the_id,the_name","mz_theater","the_areaid='$id'");
		}

		function get_movie_type(){
			return Helpers::select("*","mz_motype","1");
		}

		function get_movie_lang(){
			return Helpers::select("*","mz_lang","1");
		}
	}

	$obj = new Project();
 ?>