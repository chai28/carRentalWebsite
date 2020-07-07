<?php
session_start();
require "connect.php";
$id=intval($_GET['id']);
$sql = "DELETE FROM booking where CarID=$id";
$conn->exec($sql);
$sql = "DELETE FROM car where CarID=$id";
$conn->exec($sql);
if($_SESSION['UserType'] == 1){
echo "<script type='text/javascript'>alert('Car deleted successfully!'); window.location='admin_registercar.php';</script>";
}else if($_SESSION['UserType'] == 2){
    echo "<script type='text/javascript'>alert('Car deleted successfully!'); window.location='staff_registercar.php';</script>";
}
//header('location:admin_registercar.php');
?>
