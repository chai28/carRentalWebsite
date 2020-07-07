<?php
session_start();
include 'header.php';
include 'admin_load.php';
include 'loginRegModal.php';
?>

<body>
  <header>
    <div class="container-fluid text-center">
        <?php include 'sidebar.php'; ?>
        <a class="navbar-brand" href="#"><img src="static/img/logo.png" width="180px" height="150px"></a>
        <?php
        if(  $_SESSION['loggedIn']==true){
          echo '
              <a href="#" Style="float:right; margin-right:40px; margin-top: 80px; color:cadetblue; font-size:22px;">
                <i class="fa fa-user-circle" aria-hidden="true"></i>
                Hi  '.$_SESSION['username'].' !
              </a>
          ';
        }
        ?>
    </div>
  </header>
  <div id="main">
    <div class="row">
      <h3 class="table-header">Feeadback form:</h3>
      <form class="col-md-6 car-detail needs-validation" action="feedback_handle.php?carid=$id" method="POST" >
        <div class="feed-back-form">
          <div class="row" >
            <div class="col-md-4">
              <h5><b>Email:</b></h5>
            </div>
            <div class="col-md-8">
              <input type="text" class="form-control" id="email" name="modal"  value="<?php echo $email; ?>" disabled>
            </div>
          </div>
          <div class="row" >
            <div class="col-md-4">
              <h5><b>Message:</b></h5>
            </div>
            <div class="col-md-8">
              <input type="textarea"  height="180px" class="form-control" style="font-size:13px;" id="feedbackmessage" name="details"  placeholder="Your feeback Message">
              <div class="invalid" id="validationfeedbackmsgFail"></div>
            </div>
          </div>
          <div class="send-feedback">
            <button type="submit" name="Update" class="feedbackbtn" id="feedback">Send Feedback</button>
          </div>
        </div>
      </form>
      <section>
        <p class="message-style">Your feedback is utmost important to us. Please know that we check it carefully as a reference for the growth of our business.
        You may expect us to keep in touch at anytime. Thank you!
        </br>
        </br>
        </br>
        -RentACar team</p>
      </section>
    </div>
    <?php include 'footer.php'; ?>
  </div>
</body>
</html>
