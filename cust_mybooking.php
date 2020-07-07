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
  <div id="main">
    <section class="booking-table"  id="main">
      <h2 class="table-header">My Booking Transactions</h2>
      <?php
                include "cust_booking_load.php";
      ?>
    </section>


    <?php include 'footer.php'; ?>
  </div>
</body>
</html>
