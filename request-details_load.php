<?php
require "connect.php";
$id=intval($_GET['id']);
$stmt = "SELECT BookingDate,End_date,CarID,status FROM booking where BookingID='$id'";

$sth = $conn->prepare("SELECT BookingDate from booking where BookingID='$id'");
$sth->execute();
$sdate= $sth->fetchColumn();
$sth = $conn->prepare("SELECT End_date from booking where BookingID='$id'");
$sth->execute();
$edate= $sth->fetchColumn();
$sth = $conn->prepare("SELECT CarID from booking where BookingID='$id'");
$sth->execute();
$carid= $sth->fetchColumn();
$sth = $conn->prepare("SELECT Details from booking where BookingID='$id'");
$sth->execute();
$detail= $sth->fetchColumn();
$sth = $conn->prepare("SELECT status from booking where BookingID='$id'");
$sth->execute();
$statusval= $sth->fetchColumn();
$sth = $conn->prepare("SELECT CarImg from car where CarID='$carid'");
$sth->execute();
$img= $sth->fetchColumn();
$sth = $conn->prepare("SELECT CarModal from car where CarID='$carid'");
$sth->execute();
$modal= $sth->fetchColumn();
$sth = $conn->prepare("SELECT CarBrand from car where CarID='$carid'");
$sth->execute();
$brand= $sth->fetchColumn();

  if($statusval==2){
    $status = 'Cancelled';
  }else if($statusval==1){
    $status = 'Approved';
  }else{
    $status = 'Processing';
  }
?>
