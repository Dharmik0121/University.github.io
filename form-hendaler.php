<?php
$name = $_post['name'];
$visitor_email = $_post['email'];
$subject = $_post['subject'];
$message = $_post['message'];

$email_form = 'dharmik0121@gmail.com';

$email_subject = 'New Form Submission';

$email_body = "User Name : $name.\n".
                "User Email :$visitor_email.\n".
                "Subject : $subject.\n".
                "User Message :$message.\n ";

$to = 'meghanidharmik15.15@gmail.com';

$headers = "Form : $email_form \r\n"

$headers .="Reply-to:$visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);
header("Location:Contact.html");

?>