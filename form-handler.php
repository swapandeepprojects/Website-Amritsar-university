<?php
$name = $_POST['name'];
$visitor_email=$_POST['email'];
$subject =$_POST['subject'];
$message=$_POST['message'];
$email_from='jnd'

$email_subject='new form submission';
$email_body = "user name:$name.\n";
$email_body= "user email:$visitor_email.\n";
$email_body= "user subject:$subject.\n";
$email_body= "user message:$message.\n";

$to = '<swaoaoa@ajaj.com>';
$headers = "From: $email_from\r\n";
$headers.= "Reply-To: $email_from\r\n";
mail($to,$email_subject,$email_body,$headers);
header("location: contact.html");            

?>

