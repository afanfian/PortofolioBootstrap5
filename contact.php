<?php
$name = $_POST['name'];
$email= $_POST['email'];
$subject= $_POST['subject'];
$message= $_POST['message'];
$to = "afanfian14@mail.com";
$subject = "Mail From Fian";
$txt ="Name = ". $name . "\r\nEmail = " . $email . "\r\nSubject =" . $subject . "\r\nMessage =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>