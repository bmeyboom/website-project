<?php

$name = $_POST['name']; // name corresponds to 'name' in the html file input 
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@yourwebsite.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "Subject: $subject.\n".
              "User Message: $message.\n";
$to = 'beekaboom7@gmail.com'; // enter personal id 

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to, $email_subject, $email_body, $headers); // sends all of this to email id

header("Location: contact.html") // where you want to direct the user after submitting the form
// using without php server just directs user to this file 
?>