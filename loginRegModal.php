<!-- Login form -->
<div class="container-fluid">
  <div id="LoginModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="LoginModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title login" id="LoginModal">Login</h2>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <form class="loginFormStyle" action="login.php" method="POST"
            onsubmit="return loginValidityCheck()">
              <div class="container">
                  <label class="loginLabelStyle" for="email"><b>Email</b></label>
                  <input type="text" id="loginEmail" placeholder="Enter Email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                  <div class="invalid" id="validationLoginEmailFail"></div>

                  <label class="loginLabelStyle" for="psw"><b>Password</b></label>
                  <input type="password" id="psw" placeholder="Enter Password" name="psw" minlength="8">
                  <div class="invalid" id="validationPassFail"></div>
                  <p>
                    </br>
                     <a href="#" data-toggle="modal" data-target="#forgetPassword" data-dismiss="modal">Forget Password?</a>
                     <button type="submit" name="login" class="signInbtn">Sign in</button>
                  </p>

                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><!-- Login form End -->

  <!-- Register form -->
  <div class="container-fluid">
    <div id="registerModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="RegisterModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="modal-title login">Register</h2>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="container-fluid">
              <form class="loginFormStyle" action="register.php" method="POST"
              onsubmit="return regValidityCheck()">
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
                      <input type="text" id="regEmail" placeholder="Enter Email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                      <div class="invalid" id="validationRegEmailFail"></div>
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

                    <button type="submit" name="register" class="register">Register</button>

                    <p>
                      <br>
                  		Already a member? <a href="#" data-toggle="modal" data-target="#LoginModal" data-dismiss="modal">Sign in</a>
                  	</p>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- Register form End -->
    <!-- Forget Password -->
    <div class="container-fluid">
      <div id="forgetPassword" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="LoginModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h2 class="modal-title login" id="LoginModal">Reset Password</h2>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="container-fluid">
                <form class="loginFormStyle" action="forgot_psw.php" method="POST">
                  <div class="container">
                      <label class="loginLabelStyle" for="email"><b>Please enter your email and we will send your temporary password</b></label>
                      <input type="text" id="femail" placeholder="Enter Email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
                      <div class="invalid" id="validationfemailFail"></div>

                      <button type="submit" name="reset" class="resetbtn">Reset</button>

                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!-- forget password form End -->
      <!-- change Password profile-->
      <div class="container-fluid">
          <div id="changepasswordModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="RegisterModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h2 class="modal-title login">Change password</h2>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="container-fluid">
                    <form class="loginFormStyle" action="change_password_handle.php" method="POST"
                    onsubmit="return changePasswordValidityCheck()">
                      <div class="container">
                          <div class="">
                            <label class="loginLabelStyle" for="previouspsw"><b>Type previous password</b></label>
                            <input type="password" id="previouspsw" placeholder="Enter Previous Password" name="previouspsw" >
                            <div class="invalid" id="validationNewPassFail"></div>
                          </div>
                          <div class="">
                            <label class="loginLabelStyle" for="newpsw1"><b>Type new password</b></label>
                            <input type="password" id="newpsw1" placeholder="Enter New Password" name="newpsw1" minlength="8">
                            <div class="invalid" id="validationNewPass1Fail"></div>
                          </div>
                          <div class="">
                            <label class="loginLabelStyle" for="newpsw2"><b>Re-type password</b></label>
                            <input type="password" id="newpsw2" placeholder="Confirm Password" name="newpsw2" minlength="8">
                            <div class="invalid" id="validationNewPass2Fail"></div>
                          </div>
                          <button type="submit" name="change" class="changepswbtn" id="change">Change Password</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- change password form End -->
