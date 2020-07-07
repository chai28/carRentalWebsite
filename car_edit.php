<?php
session_start();
include 'header.php';
include 'admin_car_load.php';
?>
<body>
  <header>
    <div class="container-fluid text-center">
        <?php include 'sidebar.php'; ?>
        <a class="navbar-brand"  href="#"><img src="static/img/logo.png" width="180px" height="150px"></a>
    </div>
  </header>
  <div id="main">
    <h2 class="table-header">Edit Car Details</h2>
   <!-- START Profile form -->
    <div class="profileForm">
      <div class="container-fluid">
        <div class="profile-area">
          <div class="row" style="margin-top:80px;">
            <div class="col-md-6">
              <div class="">
                <img src="<?php echo 'static/img/premium/'.$img; ?>" alt="" height="400px" width="500px" >
              </div>
            </div>
            <!-- Form -->
            <form class="col-md-6 needs-validation" action="car_update.php" id="carForm" novalidate method="POST">
              <div class="row">
                <div class="form-group">
                  <label for="category">Category:</label>
                  <?php
                    $selected_a = ($categoryid == 1) ? 'selected' : '' ;
                    $selected_b = ($categoryid == 2) ? 'selected' : '' ;
                    $selected_c = ($categoryid == 3) ? 'selected' : '' ;
                  ?>
                  <select name=category id="category">
                  <option <?php echo $selected_a; ?> value=1>Standard</option>
                  <option <?php echo $selected_b; ?> value=2>Premium</option>
                  <option <?php echo $selected_c; ?> value=3>Special</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-6 col-style">
                  <label for="modal">Car Model</label>
                  <input type="text" class="form-control" id="modal" name="modal" value="<?php echo  $modal; ?>"  oninput="admin_change()">
                  <div class='invalid' id='validationFNameFail'></div>
                </div>
                <div class="form-group col-md-6 col-style">
                  <label class="loginLabelStyle" for="brand"><b>Car Brand</b></label>
                  <input type="text" class="form-control" id="brand" name="brand" value="<?php echo   $brand; ?>"  oninput="admin_change()">
                  <div class='invalid' id='validationFNameFail'></div>
                </div>
              </div>
              <div class="row" >
                <label for="detail" class="control-label">Details</label>
                <input type="textarea" class="form-control" id="detail" name="detail" placeholder="Detail" value="<?php echo   $detail; ?>" oninput="admin_change()">
                <div class="invalid" id="validationTelFail"></div>
              </div>
              <div class="row">
                <div class="form-group" >
                </br>
                  <label class="loginLabelStyle" for="photo"><b>Photo</b></label>
                  <div class="">
                    <input type="file" id="photo" name="photo">
                  </div>
                </div>
              </div>
            </br></br>
              <div class="row">
                <button type="submit" name="Update" class="updatecarbtn" id="update">Update Car Details</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
      <?php include 'footer.php'; ?>
  </div>
    <script src="static/js/check_edit_cars.js"></script>
  </body>
</html>
