<?php
session_start();
require "connect.php";
$category=$_POST["category"];
$brand=$_POST["brand"];
$modal=$_POST["modal"];
$detail=$_POST["detail"];
$photo = $_FILES['photo']['name'];
$sql = "INSERT INTO  car(CategoryID,CarModal,CarBrand,Detail,CarImg)
values('$category','$modal','$brand','$detail', '$photo')";
$conn->exec($sql);
if($_SESSION['UserType'] == 1){
echo "<script type='text/javascript'>alert('Car Added successfully!'); window.location='admin_registercar.php';</script>";
//header('location:admin_registercar.php');
}else {
    echo "<script type='text/javascript'>alert('Car Added successfully!'); window.location='staff_registercar.php';</script>";
}
?>
