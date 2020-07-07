<?php
require "connect.php";
$id=intval($_GET['id']);
$sth = $conn->prepare("SELECT CategoryID from car where CarID='$id'");
$sth->execute();
$categoryval= $sth->fetchColumn();
if($categoryval == 1){
  $category = 'Standard';
}else if($categoryval == 2){
  $category = 'Premium';
}else{
  $category = 'Special';
}
$sth = $conn->prepare("SELECT CarModal from car where CarID='$id'");
$sth->execute();
$modal= $sth->fetchColumn();
$sth = $conn->prepare("SELECT CarBrand from car where CarID='$id'");
$sth->execute();
$brand= $sth->fetchColumn();
$sth = $conn->prepare("SELECT Detail from car where CarID='$id'");
$sth->execute();
$detail= $sth->fetchColumn();
$sth = $conn->prepare("SELECT CarImg from car where CarID='$id'");
$sth->execute();
$img= $sth->fetchColumn();
?>
