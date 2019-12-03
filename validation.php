<?php
include("database/db-connection.php");
	
	$email		=$_POST['mail'];
	$query = "select * from user where email='$email'";
	$result=mysqli_query($conn,$query);
	if(mysqli_num_rows($result) > 0)
	{
		echo "email aready exists";
	}else{
		echo "";
	}
?>