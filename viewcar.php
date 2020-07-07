
<?php 
session_start();
include 'view_car_load.php'; 
?>
<?php include 'header.php'; ?>
<body>
  <header>
    <div class="container-fluid text-center">
      <a class="navbar-brand" href="#"><img src="static/img/logo.png" width="180px" height="150px"></a>
    </div>
  </header>
  <?php include 'navbar.php';?>

  <div class="container">
      <div class="div" id="images" style="margin-top:80px;">
          <div id="section1" class="row">
            <div class="col-md-4"><?php echo "<a href='bookingpage.php?carid=1'>";?><img
            src="<?php echo 'static/img/premium/'.$img1; ?>"
                    alt="" ></a> </div>
            <div class="col-md-4"><?php echo "<a href='bookingpage.php?carid=3'>";?><img
            src="<?php echo 'static/img/premium/'.$img3; ?>"
                    alt=""></a></div>
            <div class="col-md-4"><?php echo "<a href='bookingpage.php?carid=4'>";?><img
            src="<?php echo 'static/img/premium/'.$img4; ?>"
                    alt=""></a></div>
          </div>

          <div id="section2" class="row"  style="display:none;">
              <div class="col-md-4"><?php echo "<a href='bookingpage.php?carid=5'>";?><img
              src="<?php echo 'static/img/premium/'.$img5; ?>"
                      ></a></div>
              <div class="col-md-4"><?php echo "<a href='bookingpage.php?carid=7'>";?><img
              src="<?php echo 'static/img/premium/'.$img7; ?>"
                      alt=""></a></div>
              <div class="col-md-4"><?php echo "<a href='bookingpage.php?carid=19'>";?><img
              src="<?php echo 'static/img/premium/'.$img19; ?>"
                      alt=""></a></div>
          </div>

          <div id="section3" class="row" style="display:none;">
              <div class="col-md-4"><?php echo "<a href='bookingpage.php?carid=20'>";?><img
              src="<?php echo 'static/img/premium/'.$img20; ?>"
                      alt=""></a> </div>
              <div class="col-md-4"><?php echo "<a href='bookingpage.php?carid=21'>";?><img
              src="<?php echo 'static/img/premium/'.$img21; ?>"
                      alt=""></a></div>
              <div class="col-md-4"  ><?php echo "<a href='bookingpage.php?carid=22'>";?><img
              src="<?php echo 'static/img/premium/'.$img22; ?>"
                      alt=""></a></div>
          </div>

      </div>
  </div>
  <div class="row" style="margin-top: 40px; margin-left:730px;">
      <nav aria-label="Page navigation example">
          <ul class="pagination">
              <li class="page-item text-center">
              </li>
              <li id="page1" class="page-item"><a class="page-link" href="#section1">1</a></li>
              <li id="page2" class="page-item"><a class="page-link" href="#section2">2</a></li>
              <li id="page3" class="page-item"><a class="page-link" href="#section3">3</a></li>
              <li class="page-item">
              </li>
          </ul>
      </nav>
  </div>

  <div >
      <button class="viewBtn" id="view">View more</button>
      <button class="viewBtn" id="hide" style="display:none;">Hide</button>
  </div>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>
  <script>
      $("#page1").on("click", function () {
      $("#section2").hide();
      $("#section3").hide();
      $("#section1").show();
      $("#view").show();
      $("#hide").hide();
      })

  $("#page2").on("click", function () {

  $("#section1").hide();
  $("#section3").hide();
  $("#section2").show();
  $("#view").show();
  $("#hide").hide();

  })

  $("#page3").on("click", function () {

  $("#section1").hide();
  $("#section2").hide();
  $("#section3").show();
  $("#view").show();
  $("#hide").hide();
  })

  $("#view").on("click", function () {

  $("#section2").show();
  $("#section3").show();
  $("#section1").show();
  $("#view").hide();
  $("#hide").show();
  })
  $("#hide").on("click", function () {

  $("#section2").hide();
  $("#section3").hide();
  $("#section1").show();
  $("#view").show();
  $("#hide").hide();
  })

  $("#Premium").on("click", function () {

  $("#section2").hide();
  $("#section3").hide();
  $("#section1").show();
  $("#view").show();
  $("#hide").hide();
  })
  </script>
  <?php include 'footer.php'; ?>
  </body>
  </html>
