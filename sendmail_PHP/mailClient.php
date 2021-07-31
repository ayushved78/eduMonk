<?php
$to_email = "ayush.ved13877@gmail.com";
$subject = "Request for educational service/trial";
$body = "Hi, This is to infrom you that we are interested in your service and are willing to try the free trial period for our organization. Waiting for the reply.";
$headers = "From: ayush.ved78@gmail.com";

if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}