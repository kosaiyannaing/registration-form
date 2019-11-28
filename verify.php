<?php 
include("database/db-connection.php");
echo $email=$_GET['email'];
echo $code =$_GET['code'];
// $sql="update user set verify=1 where email='$email' and verify='$code'";
$sql="update user set verify=1 where email='$email'";
if(mysqli_query($conn,$sql)){
	echo "You have been Verified";
}else{
	echo "Verification error";
}
?>