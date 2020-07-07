<?php
session_start();
include 'header.php';
include 'admin_user_load.php';
?>
<body>
  <header>
    <div class="container-fluid text-center">
        <?php include 'sidebar.php'; ?>
        <a class="navbar-brand"  href="#"><img src="static/img/logo.png" width="180px" height="150px"></a>
    </div>
  </header>
  <div class="" id="main">
    <h2 class="table-header">Edit User Information</h2>
   <!-- START Profile form -->
   <div class="profileForm">
      <div class="container-fluid">
        <div class="profile-area">
          <!-- Form -->
          <form class="needs-validation" action="admin_user_update.php" id="userForm" novalidate
          onsubmit="return adminUpdateValidityCheck()" method="POST">
            <div class="row">
            <div class="form-group col-md-2">
                <label for="userid">User ID</label>
                <input type="text" class="form-control" id="txtUserID" name="userid"  value="<?php echo $id; ?>" readonly >
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-6">
                <label for="fname">First Name</label>
                <input type="text" class="form-control" id="AdminUpdtxtFName" name="fname" placeholder="First Name" value="<?php echo $fname; ?>" oninput="admin_change()">
                <div class="invalid" id="validationAdminUpdFNameFail"></div>
              </div>
              <div class="form-group col-md-6">
                <label for="lname">Last Name</label>
                <input type="text" class="form-control" id="AdminUpdtxtLName" name="lname" placeholder="Last Name" value="<?php echo  $lname; ?>"  oninput="admin_change()">
                <div class="invalid" id="validationAdminUpdLNameFail"></div>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-6">
                <label class="loginLabelStyle" for="email"><b>Email</b></label>
                <input type="text" class="form-control" id="AdminUpdemail" name="email" placeholder="username@email.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" value="<?php echo   $email; ?>"  oninput="admin_change()">
                <div class="invalid" id="validationAdminUpdEmailFail"></div>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-4">
                <label for="phoneNum" class="control-label">Contact Number</label>
                <input type="text" class="form-control" id="AdminUpdphoneNum" name="phoneNum" placeholder="+64 XX XXX XXXX" value="<?php echo   $number; ?>" oninput="admin_change()">
                <div class="invalid" id="validationAdminUpdTelFail"></div>
              </div>
            </div>
            <div class="row">
              <button type="submit" name="Update" class="updatebtn" id="admnupdate" disabled>Update</button>
            </div>
          </form>
          </div>
        </div>
      </div>
      <?php include 'footer.php'; ?>
    </div>
    <script src="static/js/admin_update.js"></script>
  </body>
</html>
