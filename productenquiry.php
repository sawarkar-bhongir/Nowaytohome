<?php
$fname = $_POST['name'];
$lname = $_POST['lname'];
$phone = $_POST['phone'];
$applying = $_POST['job'];
$resume = $_POST['resume'];
$city = $_POST['city'];
$state = $_POST['state '];
$zip = $_POST['zip'];

$visitor_email = $_POST['email'];
$address = $_POST['address'];
$subject = $_POST['subject'];
$message = $_POST['message'];



$email_from = 'marcom@axiomenergy.co.in';
$email_subject = 'Product Enquiry Form';



$email_body = "User first name: $fname.\n" .
"User email: $visitor_email .\n" .
    "User phone: $phone.\n" .
    "User subject: $subject.\n" .
    "User message: $message .\n";

$to = 'axiommarcom@gmail.com';
$headers = "From: $email_from \r\n";
$headers = "Reply-to: $visitor_email \r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location:index.html");

?>
