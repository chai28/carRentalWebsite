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
  <section class="booking-table" id="main">
    <h2 class="table-header">All Registered Cars</h2>
    <span class='adduser' style='color:cadetblue;text-decoration:underline;'>
      <i class="fa fa-user-plus" aria-hidden="true"></i>Add new
      <a href="#" data-toggle='modal' data-target='#adduserModal' style='color:cadetblue;'>user/</a>
      <a href="#" data-toggle='modal' data-target='#addadminModal' style='color:cadetblue;'>admin</a>
    </span>
    <?php
              include "admin_registeruser_load.php";
    ?>
  </section>
  <section>
    <?php include 'footer.php'; ?>
  </section>

<?php include 'add_user.php'; ?>
<?php include 'add_admin.php'; ?>
<script src="static/js/check_add_user.js"></script>
<script src="static/js/check_add_admin.js"></script>
  </body>
</html>
