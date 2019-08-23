<?php

if(isset($_POST['username']) && isset($_POST['password']))
{
    $un = $_POST['username'];
    $pw =  $_POST['password'];

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

  $sql = "INSERT INTO `user_login` (`Username`, `Password`) VALUES ('".$un."r', '".$pw."');";

if ($conn->query($sql) === TRUE) {
    echo "success";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

}
else {
    echo "invalid parameters";
}

?>