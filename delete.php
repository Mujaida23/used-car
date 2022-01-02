<?php
session_start();
$deleteId=$_GET['Id'];
$_SESSION['d_Id']=$deleteId;
include "config.php";

$sql = "DELETE s1 FROM selltb AS s1 INNER JOIN selldatatb AS s2 ON s1.Id=s2.userId WHERE s1.Id='$deleteId'";
$res = mysqli_query($conn, $sql);
header('location:usedList.php');
?>