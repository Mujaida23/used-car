<?php
session_start();
require_once "config.php";
$email = $pwd = ""; 

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $pwd = $_POST['password'];

$sql ="SELECT * FROM cars WHERE Email='$email' and Password='$pwd'";
$res=mysqli_query($conn,$sql);

if(mysqli_num_rows($res)>0){
    $result=mysqli_fetch_array($res);
    $Id=$result['Id'];
    $_SESSION['Id']=$Id;
        header("location:welcome.php");
    }else {
        header("location:login.php");
    }
}
mysqli_close($conn);

?>
