<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from = "marinasuban1000@yahoo.com";
$email_subject = "New Form Submission";
$email_body = "You have received a new message from the user $name.\nEmail address: $visitor_email.\nHere is the message: \n $message.";
$to = "marinasuban1000@yahoo.com";
$headers = "From: $email_from \r\n";

mail($to,$email_subject,$email_body,$headers);

print_r($to);
print_r($email_subject);
print_r($email_body);
print_r($headers);


