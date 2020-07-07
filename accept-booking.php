<?php
session_start();
require "connect.php";
$id=intval($_GET['id']);
$sql = "UPDATE booking SET status = '1' where BookingID=$id";
$conn->exec($sql);
$type=$_SESSION['UserType'];
if($type==1){
    echo "<script type='text/javascript'>alert('Booking accepted'); window.location='admin_booking.php';</script>";
}else{
    echo "<script type='text/javascript'>alert('Booking accepted'); window.location='staff_booking.php';</script>";
}
?>
