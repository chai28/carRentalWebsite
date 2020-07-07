<?php
require "connect.php";
$carid=intval($_GET['carid']);
$sth = $conn->prepare("SELECT CarModal from car where CarID='$carid'");
$sth->execute();
$modal= $sth->fetchColumn();
$sth = $conn->prepare("SELECT CarBrand from car where CarID='$carid'");
$sth->execute();
$brand= $sth->fetchColumn();
$sth = $conn->prepare("SELECT CarImg from car where CarID='$carid'");
$sth->execute();
$img= $sth->fetchColumn();
$sth = $conn->prepare("SELECT Detail from car where CarID='$carid'");
$sth->execute();
$detail=$sth->fetchColumn();
?>