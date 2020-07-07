<?php
require "connect.php";
$id=intval($_GET['id']);
$sth = $conn->prepare("SELECT BookingDate from booking where BookingID='$id'");
$sth->execute();
$date= $sth->fetchColumn();
$sth = $conn->prepare("SELECT UserID from booking where BookingID='$id'");
$sth->execute();
$userid= $sth->fetchColumn();
$sth = $conn->prepare("SELECT Details from booking where BookingID='$id'");
$sth->execute();
$detail= $sth->fetchColumn();
$sth = $conn->prepare("SELECT CarID from booking where BookingID='$id'");
$sth->execute();
$carid= $sth->fetchColumn();
$sth = $conn->prepare("SELECT End_date from booking where BookingID='$id'");
$sth->execute();
$end= $sth->fetchColumn();
?>