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
    <h2 class="table-header">All Registered Cars</h2>
    <button class='addcarbtn' href='#' data-toggle='modal' data-target='#addcarModal'>Add new car</button>
    <?php
              include "staff_registercar_load.php";
    ?>
  </section>
  <section>
  <?php include 'footer.php'; ?>
  </section>


<?php include 'loginRegModalmodal.php'; ?>
<?php include 'add_car.php'; ?>
<script src="static/js/check_add_cars.js"></script>
  </body>
</html>
