<?php

if(isset($_POST['name']) && isset($_POST['email'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $body = $_POST['body'];

    $to       = 'recipient@yahoo.com';
    $subject  = 'Testing sendmail.exe';
    $message  = 'Hi, you just received an email using sendmail!';
    $headers  = 'From: [your_gmail_account_username]@gmail.com' . "\r\n" .
                'MIME-Version: 1.0' . "\r\n" .
                'Content-type: text/html; charset=utf-8';
    if(mail($to, $subject, $message, $headers))
        echo "Email sent";
    else
        echo "Email sending failed";
?>