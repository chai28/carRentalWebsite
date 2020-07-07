

  <div id="mySidebar" class="sidebar">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <a href="index.php">Home</a>
    <a href="About.php">About</a>
    <a href="profile.php">My Profile</a>
    <?php
    if( $_SESSION['UserType']== 0){//user
      echo '
        <a href="viewcar.php">Car booking</a>
        <a href="cust_orderin_progress.php">My booking</a>
        <a href="feedback.php">Leave a Feedback</a>
      ';
    }else if( $_SESSION['UserType'] == 1){//admin
      echo '
        <a href="admin_registeruser.php">Registered Users</a>
        <a href="admin_registercar.php">Registered Cars</a>
        <a href="admin_booking.php">Booking Request</a>
        <a href="report.php">Report</a>
      ';
    }else{//staff
      echo '
        <a href="staff_registercar.php">Registered Cars</a>
        <a href="staff_booking.php">Booking Requests</a>
        <a href="report.php">Report</a>
      ';
    }
    ?>
    <a href="logout.php">Log out</a>

  </div>

  <button class="openbtn" onclick="openNav()">☰</button>
