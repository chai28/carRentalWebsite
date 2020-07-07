<?php
session_start();
require "connect.php";
$id =$_SESSION['User_ID'];
$userType = $_SESSION['UserType'];
$firstname=$_POST['fname'];
$lastname=$_POST['lname'];
$phone=$_POST['phoneNum'];
$emails=$_POST['email'];
$sql = "UPDATE User SET FName='$firstname',LName='$lastname',ContactNum='$phone',Email='$emails' WHERE User_ID='$id'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $_SESSION['prof_update'] = true;
      header('location:profile.php');



?>
