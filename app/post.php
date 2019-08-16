<?php

$un = $_POST['username'];
$pw =  $_POST['password'];


$servername = "localhost";
$username = "shaya";
$password = "12345678";
$dbname = "ionic_mybarcodeapp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

  $sql = "INSERT INTO `master_user` (`Username`, `Password`) VALUES ('".$un."r', '".$pw."');";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>