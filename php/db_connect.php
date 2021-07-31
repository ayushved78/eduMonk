<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wt";

$con = new mysqli_connect($servername, $username, $password, $dbname);
if (mysqli_connect_errno()) {
    die("Connection failed: " . $con->connect_error);
}
echo "Connected successfully";
?>
