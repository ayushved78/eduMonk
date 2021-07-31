<?php
use PHPMailer\PHPMailer;
if(isset($_POST['name']) && isset($_POST['email'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $body = $_POST['body'];

    require_once "PHPMailer/src/PHPMailer.php";
    require_once "PHPMailer/src/SMTP.php";
    require_once "PHPMailer/src/Exception.php";

    $mail = new PHPMailer();

    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "ayush.ved78@gmail.com";
    $mail->Password = 'veruaman@123';
    $mail->Port = 465;
    $mail->SMTPSecure = "ssl";

    $mail->isHTML(true);
    $mail->setFrom($email,$name);
    $mail->addAddress("ayush.ved78@gmail.com");
    $mail->Subject = ("$email ($subject)");
    $mail->Body = $body;
    if($mail->send()){
        $status = "success";
        $response = "Email is sent";

    }
    else{
        $status = "failed";
        $response = "something is wrong: <br>". $email->ErrorInfo;
    }
    exit(json_encode(array("status" => $status, "response" => $response)));
}
?>