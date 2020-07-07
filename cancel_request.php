<?php
session_start();
require "connect.php";
$requestid=intval($_GET['requestid']);
$sql = "UPDATE booking SET status = '3' where BookingID=$requestid";
$conn->exec($sql);
echo "<script type='text/javascript'>alert('Your booking request has been cancelled successfully!'); window.location='cust_orderin_progress.php';</script>";
//header('location:admin_registercar.php');
?>
