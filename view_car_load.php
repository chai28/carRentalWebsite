<?php
require "connect.php";
// $stmt = ("SELECT * from car order by CategoryID");
// $sql = $conn->prepare($stmt, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
// $sql->execute();
// while ($row = $sql->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
//   $id=$row[0];
//   $category=$row[1];
//   $model=$row[2];
//   $brand=$row[3];
//   $detail=$row[4];
//   $image=$row[5];


$sth = $conn->prepare("SELECT CarImg from car where CarID=1");
$sth->execute();
$img1= $sth->fetchColumn();
$sth = $conn->prepare("SELECT CarImg from car where CarID=3");
$sth->execute();
$img3= $sth->fetchColumn();
$sth = $conn->prepare("SELECT CarImg from car where CarID=4");
$sth->execute();
$img4= $sth->fetchColumn();
$sth = $conn->prepare("SELECT CarImg from car where CarID=5");
$sth->execute();
$img5= $sth->fetchColumn();
$sth = $conn->prepare("SELECT CarImg from car where CarID=7");
$sth->execute();
$img7= $sth->fetchColumn();
$sth = $conn->prepare("SELECT CarImg from car where CarID=19");
$sth->execute();
$img19= $sth->fetchColumn();
$sth = $conn->prepare("SELECT CarImg from car where CarID=20");
$sth->execute();
$img20= $sth->fetchColumn();
$sth = $conn->prepare("SELECT CarImg from car where CarID=21");
$sth->execute();
$img21= $sth->fetchColumn();
$sth = $conn->prepare("SELECT CarImg from car where CarID=22");
$sth->execute();
$img22= $sth->fetchColumn();

?>
