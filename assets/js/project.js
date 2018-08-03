$(document).ready(function(){
	$(".btn_register").click(function(){
		// alert(1);
		res = $("#register_form").serialize();
		console.log(res);

		$.ajax({
			type:'post',
			data:res,
			url:'../controllers/register_action.php',
			success:function(result){
				console.log(result);
				$(".errdiv").html(result);
			},
			error:function(err){

			}
		})
	});

	$(".btn_login").click(function(response){
		// alert(1)
		res = $("#login_form").serialize();
		// console.log(res);
		$.ajax({
			type:'post',
			data:res,
			url:'../controllers/login_action.php',
			success:function(result){
				console.log(result);
				if(result == "ok"){
					window.location.href="index.php";
				}
				else{
				$(".errdiv").html(result);
				}
			},
			error:function(err){

			}
		})
	})

	$("#forgot2_form,#forgot3_form").hide();

	$(".btn_forgot1").click(function(response){
		// alert(1)
		res = $("#forgot1_form").serialize();
		// console.log(res);
		$.ajax({
			type:'post',
			data:res,
			url:'../controllers/forgot1_action.php',
			success:function(result){
				console.log(result);
				if(result == "ok"){
					$("#forgot1_form").slideUp();
					$("#forgot2_form").fadeIn(2000);
				}
				else{
				$(".errdiv").html(result);
				}
			},
			error:function(err){

			}
		})
	});

	$(".btn_forgot2").click(function(response){
		// alert(1)
		res = $("#forgot2_form").serialize();
		// console.log(res);
		$.ajax({
			type:'post',
			data:res,
			url:'../controllers/forgot2_action.php',
			success:function(result){
				console.log(result);
				if(result == "ok"){
					$("#forgot2_form").slideUp();
					$("#forgot3_form").fadeIn(2000);
				}
				else{
				$(".errdiv").html(result);
				}
			},
			error:function(err){

			}
		})
	});

	$(".btn_forgot3").click(function(response){
		// alert(1)
		res = $("#forgot3_form").serialize();
		// console.log(res);
		$.ajax({
			type:'post',
			data:res,
			url:'../controllers/forgot3_action.php',
			success:function(result){
				console.log(result);
				if(result == "ok"){
					$("#forgot3_form").val("");
				$(".errdiv").html("Successfully your password set ");

				}
				else{
				$(".errdiv").html(result);
				}
			},
			error:function(err){

			}
		})
	});

	$(".btn_changepass").click(function(response){
		// alert(1)
		res = $("#changepass_form").serialize();
		// console.log(res);
		$.ajax({
			type:'post',
			data:res,
			url:'../controllers/changepassword_action.php',
			success:function(result){
				console.log(result);
				if(result == "ok"){
					$("#forgot3_form").val("");
				$(".errdiv").html("Your parssword successfully changed");

				}
				else{
				$(".errdiv").html(result);
				}
			},
			error:function(err){

			}
		})
	});
});