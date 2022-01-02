<?php
session_start();
include "config.php";
require_once "config.php";
 
$Id = $city = $pin = $mfg = $cars = $model = $kms = $owners = $prize = $fileUpload = $name = $mob = $email = "";

if (isset($_POST['check'])) {

    $Id=$_SESSION['eId'];

    $city = $_POST['city'];
    
    $pin = $_POST['pincode'];

    $mfg = $_POST['mfg'];
        
    $cars = $_POST['cars'];

    $model = $_POST['model'];
    
    $kms = $_POST['kms'];
    
    $owners = $_POST['owners'];
    
    $prize = $_POST['prize'];

    $fileUpload = $_FILES["fileUpload"]["name"];
    $Images = $_FILES["fileUpload"]["tmp_name"];
    $file = "Images/".$fileUpload; 
    move_uploaded_file($_FILES["fileUpload"]["tmp_name"],$file);
    
    $name = $_POST['name'];

    $mob = $_POST['mob'];

    $email = $_POST['email'];

    $sql="UPDATE selltb s1 INNER JOIN selldatatb s2 ON s1.Id=s2.userId SET s1.City='$city', s1.Pincode='$pin', s1.Manufactured='$mfg', s1.Cars='$cars', 
    s1.Model='$model', s1.KmsDriven='$kms', s1.No_ofOwners='$owners', s1.Prize='$prize', s2.Images='$fileUpload', s1.Name='$name', s1.Mobile='$mob', s1.EmailID='$email' 
    WHERE s1.Id='$Id' ";
    
    mysqli_query($conn,$sql);
    header('location:welcome.php');
      
}

?>