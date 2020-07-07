<?php
session_start();
include 'header.php';
?>
<body>
  <header>
    <div class="container-fluid text-center">
        <?php include 'sidebar.php'; ?>
        <a class="navbar-brand"  href="#"><img src="static/img/logo.png" width="180px" height="150px"></a>
    </div>
  </header>
  <section  class="booking-table" id="main">
    <h2 class="table-header">All Bookings</h2>
    <?php
              include "admin_booking_load.php";
    ?>
  </section>
    <?php include 'footer.php'; ?>
    <?php include 'loginRegModal.php'; ?>
  </body>
</html>
