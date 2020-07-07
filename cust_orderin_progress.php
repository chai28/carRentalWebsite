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
    <h2 class="table-header">My in Progress Orders</h2>
    <?php
              include "cust_orderin_progressload.php";
    ?>
  </section>

  <?php include 'footer.php'; ?>
  </body>
</html>
