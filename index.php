<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="content-center">
		<h1>Registration Form</h1>
			<form action="register.php" method="post">
				<table>
					<tr>
						<td>Name</td>
						<td><input type="text" name="name" required></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><input type="email" name="email" required></td>
					</tr>
					<tr>
						<td>Phone</td>
						<td><input type="tel" name="phone" required></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" name="password" required></td>
					</tr>
					<tr>
						<td>Confirm Password</td>
						<td><input type="password" name="cpassword" required></td>
					</tr>
					<tr>
						<td>Gender</td>
						<td>
							<select name="gender">
								<option value="male">Male</option>
								<option value="female">Female</option>
							</select>
						</td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="" value="Register"></td>
					</tr>
				</table>
			</form>
	</div>
	
<script src="js/script.js"></script>

</body>
</html>


