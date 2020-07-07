 <div class="container-fluid">
    <div id="adduserModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="RegisterModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="modal-title login">Add New User</h2>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="container-fluid">
              <form class="loginFormStyle" action="add_user_handle.php" method="POST">
                <div class="container">
                    <div class="">
                      <label class="loginLabelStyle" for="fname"><b>First Name</b></label>
                      <input type="text" id="txtFName" placeholder="Enter First Name" name="fname">
                      <div class="invalid" id="validationFNameFail"></div>
                    </div>
                    <div class="">
                      <label class="loginLabelStyle" for="lname"><b>Last Name</b></label>
                      <input type="text" id="txtLName" placeholder="Enter Last Name" name="lname">
                      <div class="invalid" id="validationLNameFail"></div>
                    </div>
                    <div class="">
                    <label class="loginLabelStyle" for="phoneNum"><b>Contact Number</b></label>
                      <input type="text" id="numTel" placeholder="Enter Contact Number" name="phoneNum">
                      <div class="invalid" id="validationTelFail"></div>
                    </div>
                    <div class="">
                      <label class="loginLabelStyle" for="email"><b>Email</b></label>
                      <input type="text" id="email" placeholder="Enter Email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                      <div class="invalid" id="validationEmailFail"></div>
                    </div>
                    <div class="">
                      <label class="loginLabelStyle" for="psw"><b>Password</b></label>
                      <input type="password" id="psw1" placeholder="Enter Password" name="psw1" minlength="8">
                      <div class="invalid" id="validationPass1Fail"></div>

                    </div>
                    <div class="">
                      <label class="loginLabelStyle" for="psw"><b>Confirm Password</b></label>
                      <input type="password" id="psw2" placeholder="Enter Password" name="psw2" minlength="8">
                      <div class="invalid" id="validationPass2Fail"></div>
                    </div>
                    <button type="submit" name="adduser" class="register" id="adduser">Add thi user</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- Register form End -->
