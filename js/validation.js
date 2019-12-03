$(document).ready(function(){
$("#login-form").hide();
	$("#register").click(function(){
		$("#u_msg").html("");
		$("#e_msg").html("");
		$("#phone_msg").html("");
		$("#p_msg").html("");
		$("#c_msg").html("");
		$("#ermsg").html("");
		$("#message").html("");
		$("#invalid-message").html("");
		var username = $("#username").val();
		var email	 = $("#email").val();
		var phone	 = $("#phone").val();
		var password = $("#password").val();
		var cpassword= $("#cpassword").val();
		var gender	 = $("#gender").val();
		var err_msg	="";
		var exist=null;
		var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
		
		$.ajax({
					'async': false,
					type:"POST",
					'global': false,
					'dataType': 'html',
					url:"validation.php",
					data:{mail:email},
					success:function(data){
					exist=data;
					}
				});
		if(username==""||email==""||phone==""||password==""||cpassword==""||password!=cpassword||exist!=""||!emailReg.test(email)){
				if(username == ""){
				$("#username").focus();
				$("#u_msg").html("Enter username");
				}else{
					$("#u_msg").html("");
				}
				if(email == ""){
					$("#email").focus();
					$("#e_msg").html("Enter email");
				}else{
					$("#e_msg").html("");
				}
				if(phone == ""){
					$("#phone").focus();
					$("#phone_msg").html("Enter phone");
				}else{
					$("#phone_msg").html("");
				}
				if(password ==""){
					$("#password").focus();
					$("#p_msg").html("Enter password");
				}else{
					$("#p_msg").html("");
				}
				if(cpassword ==""){
					$("#cpassword").focus();
					$("#c_msg").html("Enter Confirm password");
				}else{
					$("#c_msg").html("");
				}
				if(password!=cpassword){
					$("#ermsg").html("password and confirm password should be same");
				}else{
					$("#ermsg").html("");
				}
				if(exist!=""){
					$("#message").html(exist);
				}else{
					$("#message").html("");
				}
				
				if(!emailReg.test(email)){
					$("#invalid-message").html("invalid email");
				}else{
					$("#invalid-message").html("");
				}
			}else{

				$.ajax({
						type:"POST",
						url:"register.php",
						data:{uname:username,mail:email,pho:phone,pwd:password,gd:gender}
					}).done(function(data){
						alert(data);

					});
			}
	});
		/* for login */
	$("#login").click(function(){
		$("#u_msg").html("");
		$("#e_msg").html("");
		$("#phone_msg").html("");
		$("#p_msg").html("");
		$("#c_msg").html("");
		$("#ermsg").html("");
		$("#message").html("");
		$("#invalid-message").html("");
		$("#login-form").show();
		$("#register-form").hide();
		$("#login-page").click(function(){
			var email = $("#login-email").val();
			var password=$("#login-password").val();
			var exist=null;
			var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
			if(email==""||password==""||!emailReg.test(email)){
				if(email == ""){
					$("#login-email").focus();
					$("#le_msg").html("Enter email");
				}else{
					$("#le_msg").html("");
				}
				if(password ==""){
					$("#login-password").focus();
					$("#lp_msg").html("Enter password");
				}else{
					$("#lp_msg").html("");
				}
				if(!emailReg.test(email)){
					$("#invalid-message").html("invalid email");
				}else{
					$("#invalid-message").html("");
				}
			}else{
				$.ajax({
				type:"POST",
				url:"login.php",
				data:{mail:email,pwd:password}
			}).done(function(data){
				alert(data);
			});
			return false;
			}
			
		});
		$("#signup").click(function(){
			$("#u_msg").html("");
			$("#e_msg").html("");
			$("#phone_msg").html("");
			$("#p_msg").html("");
			$("#c_msg").html("");
			$("#ermsg").html("");
			$("#message").html("");
			$("#invalid-message").html("");
			$("#login-form").hide();
			$("#register-form").show();
		});
	});
});