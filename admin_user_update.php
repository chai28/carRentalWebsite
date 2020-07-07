<?php
require "connect.php";
$id=$_POST['userid'];
$firstname=$_POST['fname'];
$lastname=$_POST['lname'];
$phone=$_POST['phoneNum'];
$emails=$_POST['email'];
$sql = "UPDATE user SET FName='$firstname',LName='$lastname',ContactNum='$phone',Email='$emails' WHERE User_ID='$id'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    echo "<script type='text/javascript'>alert('User Profile Updated successfully!'); window.location='admin_registeruser.php';</script>";
    //header('location:admin_registeruser.php');
?>
