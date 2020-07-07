<?php

require "connect.php";
$stmt = "SELECT BookingID,BookingDate,End_date,UserID,Details,CarID,status FROM booking" ;

echo "<table class='table-format'id='usertable' rules='all'>";
echo "<tr><th>Booking ID</th><th>Start Date</th><th>End Date</th><th>Email</th><th>Message</th><th>Car Type</th><th>Status</th><th>Action</th></tr>";

$sql = $conn->prepare($stmt, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
$sql->execute();
while ($row = $sql->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
  $id=$row[0];
  $date=$row[1];
  $end=$row[2];
    $data = "SELECT Email FROM user WHERE User_ID = $row[3]" ;
    $req = $conn->prepare($data);
    $req->execute();
    $user = $req->fetch(PDO::FETCH_ASSOC);
  $email = $user['Email'];
  $detail=$row[4];
    $data = "SELECT CarImg FROM car WHERE CarID = $row[5]" ;
    $req = $conn->prepare($data);
    $req->execute();
    $user = $req->fetch(PDO::FETCH_ASSOC);
  $carimg = $user['CarImg'];
  if($row[6] == 0){
    $status= 'Pending';
  }else if($row[6] == 1){
    $status= 'Approved';
  }else{
    $status= 'Rejected';
  }

  echo "
   <tr class='body-style'><td>$id</td><td>$date</td><td>$end</td><td>$email</td><td style='color:green;'>$detail</td><td>
   <div class='table-image'><img src='static/img/premium/$carimg'</div></td><th>$status</th>";

  if($row[6] == 0){//pending -> display accept/reject/delete
    echo "
    <td style='padding:0px;'><a class='actionedt' href='accept-booking.php?id=$id'>Accept</a>
     <a class='actiondlte' href='reject_booking.php?id=$id' OnClick=\"return confirm('Are you sure you want to reject this booking?');\">Reject</a>
     <a class='actiondlte' href='delete_booking.php?id=$id'
     OnClick=\"return confirm('Are you sure you want to delete this booking?');\">Delete</a></td></tr>";
  }else{//approved or rejected -> display delete only
    echo "
      <td style='padding:0px;'> <a class='actiondlte' href='delete_booking.php?id=$id'
      OnClick=\"return confirm('Are you sure you want to delete this booking?');\">Delete</a></td></tr>";
  }

}

echo"</table>";
?>
