<?php
require "connect.php";
session_start();
$id=$_POST['carid'];
$category=$_POST['category'];
$modal=$_POST['modal'];
$brand=$_POST['brand'];
$detail=$_POST['detail'];
$img=$_POST['image'];

$sql = "UPDATE car SET CarID='$id',CategoryID='$category',CarModal='$modal',CarBrand='$brand',Detail='$detail',CarImg='$img' WHERE CarID='$id'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    echo "<script type='text/javascript'>alert('Update successfully!'); window.location='staff_registercar.php';</script>";
    //header('location:admin_registercar.php');

?>
