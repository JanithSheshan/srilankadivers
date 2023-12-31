<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$subject= $_POST['subject'];
$message= $_POST['message'];
$to = "jasheshan011@gmail.com";
$subject = "Mail From website :".$subject;
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@srilankadivers.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:../index.html#contact");
?>