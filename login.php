<?php
include("database/db-connection.php");
$email=$_POST['email'];
$password=$_POST['password'];

$sql = "select * from user where email='$email'and password='$password'";

if($rows=mysqli_query($conn,$sql)){
	foreach ($rows as $row) {
		$verify=$row['verify'];
	}
	if($verify==1){
		echo "Successfully Login";
	}else{
		echo "Verify your email First to login";
	}
}

?>