<?php
require "connect.php";
$stmt = "SELECT User_ID,UserType,FName,LName,Email,ContactNum FROM user order by UserType";

echo "<table class='table-format'id='usertable' rules='all'>";
echo "<tr><th>User id</th><th>User type</th><th>First name</th><th>Last name</th><th>Email</th><th>Contact number</th><th>Actions</th></tr>";

$sql = $conn->prepare($stmt, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
$sql->execute();
while ($row = $sql->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
  $id=$row[0];
  if($row[1] == 0){
    $user_type = 'Customer';
  }else if($row[1] == 1){
    $user_type = 'Admin';
  }else{
    $user_type = 'Staff';
  }
  $user_type_val=$row[1];
  $FName=$row[2];
  $LName=$row[3];
  $Email=$row[4];
  $ContactNum=$row[5];
  echo "<tr><td>$id</td><td>$user_type</td><td>$FName</td><td>$LName</td><td>$Email</td><td>$ContactNum</td><td>
  <a class='actionedt' href='admin_user_edit.php?id=$id'>Edit</a> &nbsp&nbsp
   <a class='actiondlte' href='delete_user.php?id=$id' OnClick=\"return confirm('Are you sure to delete?');\">
   <i class='fa fa-user-times' aria-hidden='true'></i>Delete</a></td></tr>";
}

echo"</table>";
?>
