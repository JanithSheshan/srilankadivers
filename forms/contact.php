<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$subjectnew= $_POST['subjectnew'];
$message= $_POST['message'];
$to = "info@srilankadivers.com";
$subject = "Mail From website :";
$txt ="Name : ". $name . "\n\n  Email : " . $email . "\n\n Subject : " . $subjectnew . "\n\n Message : \n" . $message;
$headers = "From: noreply srilankadivers.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:../index.html#contact");
?>