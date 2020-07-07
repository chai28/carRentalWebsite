<?php
session_start();
require "connect.php";
$id=intval($_GET['id']);
$sql = "DELETE FROM booking where UserID=$id";
$conn->exec($sql);
$sql = "DELETE FROM user where User_ID=$id";
$conn->exec($sql);
echo "<script type='text/javascript'>alert('Delete successfully!'); window.location='admin_registeruser.php';</script>";
//header('location:admin_registeruser.php');
?>