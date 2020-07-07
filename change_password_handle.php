<?php
session_start();
require "connect.php";
$type= $_SESSION['UserType'];
$id=$_SESSION['User_ID'];
$pre=$_POST['previouspsw'];
$new=$_POST['newpsw1'];
$retype=$_POST['newpsw2'];
$sth = $conn->prepare("SELECT Password from user where User_ID='$id'");
$sth->execute();
$old = $sth->fetchColumn();
if($pre == ""){
  echo "<script type='text/javascript'>alert('You need to input previous password!'); window.location='profile.php';</script>";
}
if($new == ""){
  echo "<script type='text/javascript'>alert('You need to input new password!'); window.location='profile.php';</script>";
}else if($retype == ""){
  echo "<script type='text/javascript'>alert('You need to retype new password!'); window.location='profile.php';</script>";
}else if($new != $retype){
  echo "<script type='text/javascript'>alert('New password does not match!'); window.location='profile.php';</script>";
}else{
  if($old==$pre){
      if($new == $retype){
        $sql = "UPDATE user SET Password='$new' WHERE User_ID='$id'";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        echo "<script type='text/javascript'>alert('Password has been changed successfully!'); window.location='profile.php';</script>";
      }else{
        echo "<script type='text/javascript'>alert('new password does not match!'); window.location='profile.php';</script>";
      }
  }else{
      echo "<script type='text/javascript'>alert('Previous password is wrong!'); window.location='profile.php';</script>";
  }
}

?>
