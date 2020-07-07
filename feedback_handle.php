<?php
session_start();
require "connect.php";
$userid=$_SESSION['User_ID'];
$details=$_POST['details'];
$sql = "INSERT INTO feedback(UserID,Message)
values('$userid','$details')";
$conn->exec($sql);
echo "<script type='text/javascript'>alert('Thank you for your feedback!'); window.location='index.php';</script>";

//header('location:admin_booking.php');
?>
