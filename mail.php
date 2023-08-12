<?php
//get data from form  

$frist_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email= $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$to = "freelancerroqibul@gmail.com";

$subject = "$subject";
$txt ="Frist Name = ". $frist_name . "\r\n  Last Name = " . $last_name . "\r\n Email =" . $email . "\r\n Subject =" . $subject . "\r\n Message =" . $message;

$headers = "From: noreply@roqibul.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>