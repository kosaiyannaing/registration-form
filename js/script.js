$(document).ready(function(){
	$("#register").click(function(){
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
			$("#wrapper").empty();
			alert(data);
		})
	});
});