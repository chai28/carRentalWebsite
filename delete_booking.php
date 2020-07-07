<?php
session_start();
require "connect.php";
$id=intval($_GET['id']);
$sql = "DELETE FROM booking WHERE BookingID=$id";
$conn->exec($sql);
  echo "<script type='text/javascript'>alert('Booking has been deleted'); window.location='admin_booking.php';</script>";
?>
