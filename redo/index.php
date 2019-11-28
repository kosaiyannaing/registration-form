<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="content-center">
		<div id="wrapper">
			<h1>Registration Form</h1>
			<form>
				<table>
					<tr>
						<td>Name</td>
						<td><input type="text" id="username" required></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><input type="email" id="email" required></td>
					</tr>
					<tr>
						<td>Phone</td>
						<td><input type="tel" id="phone" required></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" id="password" required></td>
					</tr>
					<tr>
						<td>Confirm Password</td>
						<td><input type="password" id="cpassword" required></td>
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
						<td><button id="register">Register</button></td>
					</tr>
				</table>
			</form>
		</div>
	</div>
<script src="js/jquery.js"></script>	
<script src="js/script.js"></script>
</body>
</html>