<?php

require "connect.php";
$userid=$_SESSION['User_ID'];
$stmt = "SELECT BookingID,BookingDate,End_date,Details,CarID FROM booking where UserID='$userid'" ;
$count = 0;

echo "<table class='table-format'id='bookingtable' rules='all'>";
echo "<tr><th>Booking ID</th><th>Start Date</th><th>End date</th><th>Detail</th><th>Car Photo</th><th>Action</th></tr>";

$sql = $conn->prepare($stmt, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
$sql->execute();
while ($row = $sql->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
  $id=$row[0];
  $date=$row[1];
  $end=$row[2];
  $detail=$row[3];
    $data = "SELECT CarImg FROM car WHERE CarID = $row[4]" ;
    $req = $conn->prepare($data);
    $req->execute();
    $user = $req->fetch(PDO::FETCH_ASSOC);
  $carimg = $user['CarImg'];
  $carid=$row[4];
  $count++;

  echo "<tr><td>$id</td><td>$date</td><td>$end</td><td>$detail</td><td>
  <div class='table-image'><img src='static/img/premium/$carimg'</div></td><td>
  <a class='actiondlte' href='cancel_booking.php?id=$id' OnClick=\"return confirm('Are you sure to cancel?');\">Cancel</a></td></tr>";
}
if($count == 0){
  echo "<div class='no-booking-notification'><h5 class='no-booking-msg'>You have no booking record!</h5></div>";
}

echo"</table>";
?>
