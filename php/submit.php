<?php 
    sleep(3);
    include('data.php');
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];
    $body=$_POST['body'];
    
    $sql = "insert into feedback (name,email,message,body) values ('$name','$email','$message','$body')";
    $smt = $con->prepare($sql);
    $smt->execute();
?>