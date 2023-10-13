<?php
$name = $_POST['name'];

$visitor_email = $_POST['email'];

$subject = $_POST['subject'];

$message = $_POST['message'];

$email_from = 'gjinajbedri@gmail.com';

$email_subject = 'New Form Submission';

$email_body = "User Name' $name.\n".
              "User Email' $visitor_email.\n".
              "User Subject' $subject.\n".
              "User Message' $meassage.\n";

$to = "eniskelmendi@gmail.com";

$headers = "From: $email_form \r\n";

$headers .= "Reply-To:$visitor_email \r\n"


mail($to,$email_subject,$email_body,$headers)
header("Locaction: contact.html")


?>