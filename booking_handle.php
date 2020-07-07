<?php
require "connect.php";
session_start();
$carid=intval($_GET['carid']);
$userid=$_SESSION['User_ID'];
$sdate=$_POST["sdate"];
$stime=$_POST["stime"];
$edate=$_POST["edate"];
$etime=$_POST["etime"];
$detail=$_POST["details"];
$start=$sdate." ".$stime.":00";
$end=$edate." ".$etime.":00";
$sql = "INSERT INTO booking(BookingDate,End_date,UserID,Details,CarID,status)
values('$start','$end','$userid','$detail','$carid', '0')";
$conn->exec($sql);
echo "<script>alert('Request successfully! you will receive email once your request is approved.');window.location='cust_orderin_progress.php';</script>";
?>
