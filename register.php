<?php
	include("database/db-connection.php");
	$name		=$_POST['uname'];
	$email		=$_POST['mail'];
	$phone		=$_POST['pho'];
	$password	=$_POST['pwd'];
	$gender		=$_POST['gd'];
	$rand		=rand(1000,9999);
	$from_mail	="saiyannaing259768648@gmail.com";
	$verify		=0;
	$query = "select * from user where email='$email'";
	$result=mysqli_query($conn,$query);
	if(mysqli_num_rows($result) > 0)
	{
		echo "email aready exists";
	}else{
			$sql="INSERT INTO user (name, email, phone, password, gender, rand, verify) VALUES ('$name', '$email', '$phone', '$password', '$gender', '$rand', '$verify')";
		if (mysqli_query($conn, $sql)) {
			$to_email = $email;
			$subject = 'Testing PHP Mail';
			$message = "<h2>Testing</h2>"."<a href='http://localhost/mini_project/registration-form/verify.php?email=$email&code=$rand'>Verify your email</a>";
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			$headers .= 'From:'.$from_mail;
		
			if(mail($to_email,$subject,$message,$headers)){
				echo "Please check your email to verify your emial. Confirmation Link has been sent";
			}else{
				echo "Error";
			}
			
		} else {
		    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

	}
?>