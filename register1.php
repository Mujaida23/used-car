<?php
require_once "config.php";
 
$name = $email = $cemail = $pwd = $cpwd = $mobile = $phone = $state = $city = $address = $pin = "";

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    
    $email = $_POST['email'];

    $cemail = $_POST['cemail'];
        if($email != $cemail){
            $cemail = "Email did not match.";
        }
  
    $pwd = $_POST['pwd'];

    $cpwd = $_POST['cpwd'];
        if($pwd != $cpwd){
            $cpwd = "Password did not match.";
        }
    $mobile = $_POST['mobile'];
    
    $phone = $_POST['phone'];
    
    $state = $_POST['state'];
    
    $city = $_POST['city'];

    $address = $_POST['address'];

    $pin = $_POST['pin'];
}
    $sql="INSERT INTO cars (Name, Email, ConfirmEmail, Password, ConfirmPassword, MobileNumber, PhoneNumber, State, City, StreetAddress, PostalCode) 
        VALUES ('$name', '$email', '$cemail', '$pwd', '$cpwd', '$mobile', '$phone', '$state', '$city', '$address', '$pin')";
        mysqli_query($conn,$sql);
        header('location:login.php');
?>

