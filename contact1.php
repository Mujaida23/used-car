<?php
require_once "config.php";

$msg = $name = $number = $car = ""; 

if (isset($_POST['send'])) {
    $name = $_POST['name'];

    $number = $_POST['number'];
    
    $msg =  $_POST['msg'];

    $car =  $_POST['cars'];
}
    
$sql = "INSERT INTO enquiretb (Name, Number, Message, Car) VALUES ('$name', '$number','$msg', '$car')";
mysqli_query($conn, $sql);
header("location:welcome.php");

?>