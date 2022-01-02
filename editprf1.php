<?php
session_start();
require_once "config.php";
 
$name = $mobile = $phone = $state = $city = $address = $pin = $pwd = $email = "";

if (isset($_POST['submit'])) {

    $Id=$_SESSION['Id'];

    $name = $_POST['name'];
    
    $mobile = $_POST['mobile'];
    
    $phone = $_POST['phone'];
    
    $state = $_POST['state'];

    $city = $_POST['city'];
    
    $address = $_POST['address'];

    $pin = $_POST['pin'];

    $pwd = $_POST['pass'];
    
    $email = $_POST['mail'];

    $sql="UPDATE cars SET Name='$name', MobileNumber='$mobile', PhoneNumber='$phone', State='$state', City='$city', StreetAddress='$address', PostalCode='$pin', Password='$pwd', Email='$email' WHERE Id='$Id'";
    mysqli_query($conn,$sql);
    header('location:login.php');
    
}    
?>

