<?php

if(isset($_POST['customerid']) && isset($_POST['model']) && isset($_POST['purchasedate']) && isset($_POST['warrentyperiod']) && isset($_POST['serialnumber']) && isset($_POST['productline']) && isset($_POST['deviceimage']) && isset($_POST['invoiceimage']))
{
    

$cid = $_POST['customerid'];
$md =  $_POST['model'];
$pd = $_POST['purchasedate'];
$wp =  $_POST['warrentyperiod'];
$sn = $_POST['serialnumber'];
$pl =  $_POST['productline'];
$di = $_POST['deviceimage'];
$ii =  $_POST['invoiceimage'];


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

  $sql = "INSERT INTO `customer` (`Customerid`, `Model`, `Purchasedate`, `Warrentyperiod`, `Serialnumber`, `Productline`, `Deviceimage`, `Invoiceimage`)
         VALUES ('".$cid."', '".$md."', '".$pd."', '".$wp."', '".$sn."', '".$pl."', '".$di."'), '".$ii."');";

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