
<?php
session_start();
include 'header.php';
include 'request-details_load.php';
?>
<body>
  <header>
    <div class="container-fluid text-center">
        <?php include 'sidebar.php'; ?>
        <a class="navbar-brand"  href="#"><img src="static/img/logo.png" width="180px" height="150px"></a>
    </div>
  </header>
  <div class="container-fluid" id="main">
    <h2 class="table-header">Details for Booking ID: <?php echo $id; ?></h2>
      <div class="row" style="margin-top:30px;">
        <div class="col-md-6">
          <div class="">
            <img src="<?php echo 'static/img/premium/'.$img; ?>" alt="" height="400px" width="1000px" >
          </div>
        </div>
        <div class="col-md-6 car-detail-req needs-validation">
          <div class="row" >
            <div class="col-md-4">
              <h5><b>Model:</b></h5>
            </div>
            <div class="col-md-8">
              <span><?php echo $modal; ?></span>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <h5><b>brand:</b></h5>
            </div>
            <div class="col-md-8">
              <span><?php echo $brand; ?></span>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4">
              <h5><b>Description:</b></h5>
            </div>
            <div class="col-md-8">
              <p><?php echo $detail; ?></p>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4">
              <h5><b>Start Date & Time:</b></h5>
            </div>
            <div class="col-md-8">
              <span><?php echo $sdate; ?></span>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <h5><b>End Date & Time:</b></h5>
            </div>
            <div class="col-md-8">
              <span><?php echo $edate; ?></span>
            </div>
          </div>
          <button type="button" name="request" class="backBtn" id="request" onclick="backbtn()">Back</button>
        </div>
      </div>
    </div>
    <script src="static/js/date_constraint.js"></script>
    <script type="text/javascript">
      function backbtn(){
        window.location='cust_orderin_progress.php';
      }
    </script>
      <?php include 'footer.php'; ?>
      <?php include 'loginRegModal.php'; ?>
  </body>
</html>
