<?php
    try {
        $con = new PDO("mysql:host=localhost;dbname=wt;","root","");
    } catch (PDOExcetion $e) {
        echo $e->getMessage();
    }
?>