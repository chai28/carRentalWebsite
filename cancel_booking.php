<?php
session_start();
require "connect.php";
$id=intval($_GET['id']);
$sql = "UPDATE booking SET status = '2' where BookingID=$id";
$conn->exec($sql);
  echo "<script type='text/javascript'>alert('Booking has been cancelled'); window.location='cust_mybooking.php';</script>";
?>
