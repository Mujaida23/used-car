<?php
include "config.php";
session_start(); 
$fileUpload = $Images = $file = $fuel = $color = $regnumber = $insure = $why = "";

if (isset($_POST['check'])) {

    $fileUpload = $_FILES["fileUpload"]["name"];
    $Images = $_FILES["fileUpload"]["tmp_name"];
    $file = "Images/".$fileUpload; 
    move_uploaded_file($_FILES["fileUpload"]["tmp_name"],$file);

    $fuel = $_POST['fuel'];

    $color = $_POST['color'];
        
    $regnumber = $_POST['regnumber'];

    $insure = $_POST['insure'];
    
    $why = $_POST['why'];

    $lastid=$_SESSION['lastid'];
}
    $sql="INSERT INTO selldatatb (Images, Fuel, Colour, Registration, InsureDate, Reason, userId) 
        VALUES ('$fileUpload', '$fuel', '$color', '$regnumber', '$insure', '$why','$lastid')";
        mysqli_query($conn,$sql);
        header('location:welcome.php');
?>