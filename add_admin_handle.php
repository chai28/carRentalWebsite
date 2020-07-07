<?php
require "connect.php";
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$phone=$_POST["phoneNum"];
$email=$_POST["email"];
$pass=$_POST["psw1"];
$type=1;
$sql = "SELECT * FROM user WHERE Email = :email";
$stmt = $conn->prepare($sql);
$stmt->bindValue(':email', $email);
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);
if ($user) {
  if ($user['Email'] === $email) {
    echo "<script>alert('Account already existed!');window.location='admin_registeruser.php';</script>";
  }
}else{
$sql = "INSERT INTO  user(UserType,FName,LName,Email,Password, ContactNum)
values('$type','$fname','$lname','$email','$pass','$phone')";
$conn->exec($sql);
echo "<script>alert('Add admin successfully!');window.location='admin_registeruser.php';</script>";
}
?>
