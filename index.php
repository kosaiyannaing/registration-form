<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="content-center">
		<div id="wrapper">
		<span id="message" class="err-smg"></span>
		<span id="invalid-message" class="err-smg"></span>
			<div id="register-form">
			<h1>Registration Form</h1>
			<form action="#">
				<p id="p"></p>
				<table>
					<tr>
						<td>Name</td>
						<td><input type="text" id="username" required><span id="u_msg" class="err-smg"></span></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><input type="text" id="email" required><span id="e_msg" class="err-smg"></span><span id="e_t_msg" class="err-smg"></span></td>
					</tr>
					<tr>
						<td>Phone</td>
						<td><input type="tel" id="phone" required><span id="phone_msg" class="err-smg"></span></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" id="password" required><span id="p_msg" class="err-smg"></span></td>
					</tr>
					<tr>
						<td>Confirm Password</td>
						<td><input type="password" id="cpassword" required><span id="c_msg" class="err-smg"></span></td>
					</tr>
					<tr>
						<td>Gender</td>
						<td>
							<select id="gender">
								<option value="male">Male</option>
								<option value="female">Female</option>
							</select>
						</td>
					</tr>
					<tr>
						<td></td>
						<td><button id="register">Register</button>Already have account?<a href="#" id="login">login</a></td>
					</tr>
				</table>
			</form>
		</div>
		<div id="login-form">
			<h1>User Login Form</h1>
			<form>
				<table>
					<tr>
						<td>Email</td>
						<td><input type="email" id="login-email"><span id="le_msg" class="err-smg"></span><span id="le_t_msg" class="err-smg"></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" id="login-password"><span id="lp_msg" class="err-smg"></span></td>
					</tr>
					<tr>
						<td></td>
						<td><button id="login-page">Login</button> No have account?<a href="#" id="signup">Sign Up</a></td>
					</tr>
				</table>
			</form>
		</div>
		<span id="ermsg" class="err-smg"></span>
		</div>
	</div>
<script src="js/jquery.js"></script>
<script src="js/validation.js"></script>
</body>
</html>