<?php
// Check for empty fields
if(empty($_POST['name']) || empty($_POST['message']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    echo 'Failure in sending mail. Not enough information provided.';
    var_dump($_POST);
    return false;
}

// Sanitize input
$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$message = strip_tags(htmlspecialchars($_POST['message']));

// Create the email and send the message
$to = 'rhydz@msn.com'; // Webmaster email
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nMessage:\n$message";
$headers = "From: noreply@yourdomain.com\n"; // Email address the generated message will be from.
$headers .= "Reply-To: $email_address";

// Send mail
mail($to, $email_subject, $email_body, $headers);

// Response
echo 'Mail sent.';
return true;