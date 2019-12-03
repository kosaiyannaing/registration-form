<?php
include("database/db-connection.php");
$email=$_POST['mail'];
$password=$_POST['pwd'];
$sql = "select * from user where email='$email' and password='$password'";
$rows=mysqli_query($conn,$sql);
$count=mysqli_num_rows($rows);
if($count){
	foreach ($rows as $row) {
		$verify=$row['verify'];
	}
	if($verify==1){
		echo "Successfully Login";
	}else{
		echo "Verify your email First to login";
	}
}else{
	echo "email and password are invilid";
}

?>