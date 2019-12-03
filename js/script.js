$(document).ready(function(){
	$("#login-form").hide();
	$("cc#register").click(function(){
		var username = $("#username").val();
		var email	 = $("#email").val();
		var phone	 = $("#phone").val();
		var password = $("#password").val();
		var cpassword= $("#cpassword").val();
		var gender	 = $("#gender").val();
		$.ajax({
			type:"POST",
			url:"register.php",
			data:{uname:username,mail:email,pho:phone,pwd:password,gd:gender}
		}).done(function(data){
			$("#wrapper").html(data);
		});
		return false;
	});

	/* for login */
	$("#login").click(function(){
		$("#login-form").show();
		$("#register-form").hide();
		$("#login-page").click(function(){
			var email = $("#login-email").val();
			var password=$("#login-password").val();
			$.ajax({
				type:"POST",
				url:"login.php",
				data:{mail:email,pwd:password}
			}).done(function(data){
				alert(data);
				$("#wrapper").html(data);
			});
			return false;
		});
		$("#signup").click(function(){
			$("#login-form").hide();
			$("#register-form").show();
		});
	});
});