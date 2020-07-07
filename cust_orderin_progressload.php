<?php
require "connect.php";
$userid=$_SESSION['User_ID'];
$stmt = "SELECT BookingID,BookingDate,End_date,CarID,status FROM booking where UserID='$userid' order by BookingID";
$count=0;
echo "<table class='table-format'id='usertable' rules='all'>";
echo "<tr><th>Request id</th><th>Start date</th><th>End date</th><th>Car Image</th><th>Status</th><th>Action</th></tr>";

$sql = $conn->prepare($stmt, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
$sql->execute();
while ($row = $sql->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
  $requestid=$row[0];
  $sdate=$row[1];
  $edate=$row[2];
    $data = "SELECT CarImg FROM car WHERE CarID = $row[3]" ;
    $req = $conn->prepare($data);
    $req->execute();
    $user = $req->fetch(PDO::FETCH_ASSOC);
  $carimg = $user['CarImg'];
  $carid=$row[3];
  $status=$row[4];
  $count++;
  echo "<tr><td>$requestid</td><td>$sdate</td><td>$edate</td><td>
  <div class='table-image'><img src='static/img/premium/$carimg'</div></td>";
  if($status==2){
    echo "<td style='color:red !important;'>Cancelled</td>";
  }else if($status==1){
    echo "<td style='color:cadetblue !important;'>Approved</td>";
  }else if($status==3){
    echo "<td style='color:red !important;'>Cancelled</td>";
  }else{
    echo "<td style='color:cadetblue !important;'>Processing...</td>";
  }
  echo"<td>
  <a class='actionedt' href='request-details.php?id=$requestid'>Details</a> &nbsp&nbsp";
  if($status != 3){
    echo"<a class='actiondlte' href='cancel_request.php?requestid=$requestid' OnClick=\"return confirm('Are you sure you want to cancel?');\">Cancel</a></td></tr>";
  }
}
if($count == 0){
  echo "<div class='no-booking-notification'><h5 class='no-booking-msg'>You have no in-progress record!</h5></div>";
}

echo"</table>";
