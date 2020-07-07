<?php
session_start();
require "connect.php";
$type=$_SESSION['UserType'];
$id=$_POST['bookingid'];
$date=$_POST['date'];
$userid=$_POST['userid'];
$carid=$_POST['carid'];
$detail=$_POST['detail'];
$end=$_POST['end'];
$sql = "UPDATE booking SET BookingID='$id',BookingDate='$date',End_date='$end',UserID='$userid',Details='$detail' WHERE  BookingID='$id'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
     if($type==1){
    //header('location:AdminHome.php');
    echo "<script type='text/javascript'>alert('Update successfully!'); window.location='admin_booking.php';</script>";
    }else if($type==2){
        //header('location:StaffHome.php');
        echo "<script type='text/javascript'>alert('Update successfully!'); window.location='staff_booking.php';</script>";
    }
   
?>