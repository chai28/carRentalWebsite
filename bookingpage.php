
<?php
session_start();
include 'header.php';
include 'bookingpage_load.php';
?>
<body>
  <header>
    <div class="container-fluid text-center">
      <a class="navbar-brand" href="#"><img src="static/img/logo.png" width="180px" height="150px"></a>
    </div>
  </header>
  <?php include 'navbar.php';?>
  <div class="container-fluid">

      <div class="row" style="margin-top:80px;">
        <div class="col-md-6">
          <div class="">
            <img src="<?php echo 'static/img/premium/'.$img; ?>" alt="" height="400px" width="1000px" >
          </div>
        </div>
        <form class="col-md-6 car-detail needs-validation" <?php $carid=intval($_GET['carid']); echo"action='booking_handle.php?carid=$carid'";?> method="POST" >
          <div class="row" >
            <div class="col-md-4">
              <h5><b>Model:</b></h5>
            </div>
            <div class="col-md-8">
              <input type="text" class="form-control" id="modal" name="modal"  value="<?php echo $modal; ?>" disabled>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4">
              <h5><b>brand:</b></h5>
            </div>
            <div class="col-md-8">
            <input type="text" class="form-control" id="brand" name="brand" placeholder="brand" value="<?php echo  $brand; ?>" disabled>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4">
              <h5><b>Description:</b></h5>
            </div>
            <div class="col-md-8">
              <input type="textarea" class="form-control" id="detail" name="detail"  value="<?php echo $detail; ?>" disabled>
            </div>
          </div>

          <div class="row" Style="margin-top:20px;">
            <div class="col-md-2">
              <h6 style="font-size:13px;"><b>Start Date:</b></h6>
            </div>
            <div class="col-md-4">
              <input type="date" class="form-control" style="font-size:13px;" id="sdate" name="sdate">
            </div>
            <div class="col-md-3">
              <h6 style="font-size:13px;"><b>Start Time:</b></h6>
            </div>
            <div class="col-md-3">
              <input type="time" class="form-control" style="font-size:13px;" id="stime" name="stime" step="1800">
            </div>
          </div>

          <div class="row" Style="margin-top:20px;">
            <div class="col-md-2">
              <h6 style="font-size:13px;"><b>End Date:</b></h6>
            </div>
            <div class="col-md-4">
              <input type="date" class="form-control" style="font-size:13px;" id="edate" name="edate">
            </div>
            <div class="col-md-3">
              <h6 style="font-size:13px;"><b>End Time:</b></h6>
            </div>
            <div class="col-md-3">
              <input type="time" class="form-control" style="font-size:13px;" id="etime" name="etime" step="1800">
            </div>
          </div>

          <div class="row" Style="margin-top:20px;">
            <div class="col-md-4">
              <h6 style="font-size:13px;"><b>Message:</b></h6>
            </div>
            <div class="col-md-8">
            <input type="textarea" class="form-control" style="font-size:13px;" id="details" name="details"  placeholder="Input what else you want us to offer">
            </div>
          </div>

          <button type="submit" name="request" class="bookBtn" id="request" >Send booking request</button>
        </form>
      </div>
    </div>
    <script src="static/js/date_constraint.js"></script>
      <?php include 'footer.php'; ?>
      <?php include 'loginRegModal.php'; ?>
  </body>
</html>
