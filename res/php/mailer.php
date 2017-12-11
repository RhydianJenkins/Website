<?php

echo"<pre>";
var_dump($_POST);

// Sanitize input
//$name = strip_tags(htmlspecialchars($_POST['name']));
//$email_address = strip_tags(htmlspecialchars($_POST['email']));
//$message = strip_tags(htmlspecialchars($_POST['message']));

// Create the email and send the message
$to = 'rhj24@aber.ac.uk'; // Webmaster email
$email_subject = "New Website Membership Request Form";
$email_body = "You have received a new membership request from the website";
$headers = "From: noreply@yourdomain.com\n"; // Email address the generated message will be from.
$headers .= "Reply-To: rhydz@msn.com";

// Send mail
if (mail($to, $email_subject, $email_body, $headers)) {
    echo 'Mail sent.';
} else {
    echo 'Mail not sent.';
}