

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

  <!-- START Profile form -->
  <div id="main">
    <div class="row">
      <h3 class="table-header">My Profile Info:</h3>
      <div class="profileForm">
        <div class="profile-area">
          <?php if($_SESSION['prof_update'] == TRUE) {
            echo "<div class='no-booking-notification'><h5 class='prof-update-msg'>Your profile has been updated <i class='fas fa-check'></i></h5></div>";
            $_SESSION['prof_update'] = false;
          }?>
          <!-- Form -->
          <form class="needs-validation" action="update.php" id="adminprofileForm" novalidate
          onsubmit="return UpdateValidityCheck" method="POST">
            <div class="row">
              <div class="form-group col-md-6">
                <label for="fname">First Name</label>
                <input type="text" class="form-control" id="proftxtFName" name="fname" placeholder="First Name" value="<?php echo $fname; ?>" oninput="admin_change()">
                <div class="invalid" id="validationFNameProfFail"></div>
              </div>
              <div class="form-group col-md-6">
                <label for="lname">Last Name</label>
                <input type="text" class="form-control" id="proftxtLName" name="lname" placeholder="Last Name" value="<?php echo $lname; ?>"  oninput="admin_change()">
                <div class="invalid" id="validationLNameProfFail"></div>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-6">
                <label class="loginLabelStyle" for="email"><b>Email</b></label>
                <input type="text" class="form-control" id="profemail" name="email" placeholder="username@email.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" value="<?php echo $email; ?>"  oninput="admin_change()">
                <div class="invalid" id="validationProfEmailFail"></div>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-4">
                <label for="phoneNum" class="control-label">Contact Number</label>
                <input type="number" class="form-control" id="profphoneNum" name="phoneNum" placeholder="+64 XX XXX XXXX" value="<?php echo $number; ?>" oninput="admin_change()">
                <div class="invalid" id="validationProfTelFail"></div>
              </div>
            </div>
            <div class="row">
              <div class="updateProfile">
                <p>
                  <br>
                  <a class="icon" href="#" data-toggle="modal" data-target="#changepasswordModal" data-dismiss="modal">
                     <i class="fa fa-key icon" aria-hidden="true"> <span  class="textStyle">Change Password?</span></i>
                  </a>&nbsp
                  <button type="submit" name="Update" class="updatebtn" id="update" disabled>Update</button>
                </p>
              </div>
            </div>
          </div>
      </div>
    </div>
    <?php include 'footer.php'; ?>
  </div>

  <!-- <script src="static/js/check_change_passwords.js"></script> -->
  <script src="static/js/check_profile.js"></script>
  <script src="static/js/admin_update.js"></script>

</body>

</html>
