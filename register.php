<?php
	include("database/db-connection.php");
	$name		=$_POST['uname'];
	$email		=$_POST['mail'];
	$phone		=$_POST['pho'];
	$password	=$_POST['pwd'];
	$gender		=$_POST['gd'];
	echo $name.$email.$phone.$password.$gender;
	
?>