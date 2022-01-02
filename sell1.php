<?php
include "config.php";

require_once "config.php";
session_start();
 
$city = $pin = $mfg = $cars = $model = $kms = $owners = $prize = $name = $mob = $email = "";

if (isset($_POST['check'])) {

    $rId=$_SESSION['Id'];

    $city = $_POST['city'];
    
    $pin = $_POST['pin'];

    $mfg = $_POST['mfg'];
        
    $cars = $_POST['cars'];

    $model = $_POST['model'];
    
    $kms = $_POST['kms'];
    
    $owners = $_POST['owners'];
    
    $prize = $_POST['prize'];
    
    $name = $_POST['name'];

    $mob = $_POST['mob'];

    $email = $_POST['email'];
}
    $sql="INSERT INTO selltb (City, Pincode, Manufactured, Cars, Model, KmsDriven, No_ofOwners, Prize, Name, Mobile, EmailID, u_Id) 
        VALUES ('$city', '$pin', '$mfg', '$cars', '$model', '$kms', '$owners', '$prize', '$name', '$mob', '$email', '$rId')";
        mysqli_query($conn,$sql);
        $id=mysqli_insert_id($conn);
        $_SESSION['lastid']=$id;
        header('location:selldata.php');
?>