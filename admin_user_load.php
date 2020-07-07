<?php
require "connect.php";
$id=intval($_GET['id']);
$_SESSION['userid_edit']=$id;
$sth = $conn->prepare("SELECT FName from user where User_id='$id'");
$sth->execute();
$fname= $sth->fetchColumn();
$sth = $conn->prepare("SELECT LName from user where User_id='$id'");
$sth->execute();
$lname= $sth->fetchColumn();
$sth = $conn->prepare("SELECT Email from user where User_id='$id'");
$sth->execute();
$email= $sth->fetchColumn();
$sth = $conn->prepare("SELECT ContactNum from user where User_id='$id'");
$sth->execute();
$number = $sth->fetchColumn();
?>