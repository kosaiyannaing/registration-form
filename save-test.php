<?php   
$syn=  'saiyannaing259768648@gmail.com';
$to_email = 'kosaiyannaing7493@gmail.com';
$subject = 'Testing PHP Mail';
$message = 'This mail is sent using the PHP mail function';
$headers = 'From:'.$syn;
mail($to_email,$subject,$message,$headers);
?>