<?php

require "connect.php";
$stmt = "SELECT CarID,CategoryID,CarModal,CarBrand,CarImg FROM car";

echo "<table class='table-format'id='usertable' rules='all'>";
echo "<tr><th>Car ID</th><th>Category ID</th><th>Car modal</th><th>Car brand</th><th>Image</th><th>Action</th></tr>";
$sql = $conn->prepare($stmt, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
$sql->execute();
while ($row = $sql->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
  $id=$row[0];
  $_SESSION['userid_edit']=$id;
    $data = "SELECT CategoryNmae FROM category WHERE CategoryID = $row[1]" ;
    $req = $conn->prepare($data);
    $req->execute();
    $user = $req->fetch(PDO::FETCH_ASSOC);
    $category=$user['CategoryNmae'];
  $categoryid = $row[1];
  $modal=$row[2];
  $brand=$row[3];
  $image=$row[4];
  echo "<tr><td>$id</td><td>$category</td><td>$modal</td><td>$brand</td><td><div class='table-image'>
  <img src='static/img/premium/$image'</div></td><td>
  <a class='actionedt' href='car_edit.php?id=$id'>Edit</a> &nbsp&nbsp
  <a class='actiondlte' href='delete_car.php?id=$id' OnClick=\"return confirm('Are you sure to delete?');\">Delete</a></td></tr>";
}

echo"</table>";
?>
