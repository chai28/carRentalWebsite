<div class="container-fluid">
    <div id="addcarModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="RegisterModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="modal-title login">New Car</h2>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="container-fluid">
              <form class="loginFormStyle" action="add_car_handle.php" method="POST"
              onsubmit="return regValidityCheck()">
                <div class="container">
                    <div class="">
                      <label class="loginLabelStyle" for="fname"><b>Category</b></label>
                      <input type="text" id="category" placeholder="Enter Category ID" name="category">
                      <div class="invalid" id="validationcategory"></div>
                    </div>
                    <div class="">
                      <label class="loginLabelStyle" for="lname"><b>Model</b></label>
                      <input type="text" id="modal" placeholder="Enter Car Modal" name="modal">
                      <div class="invalid" id="validationmodal"></div>
                    </div>
                    <div class="">
                    <label class="loginLabelStyle" for="phoneNum"><b>Brand</b></label>
                      <input type="text" id="brand" placeholder="Enter Car Brand" name="brand">
                      <div class="invalid" id="validationbrand"></div>
                    </div>
                    <div class="">
                      <label class="loginLabelStyle" for="email"><b>Description</b></label>
                      <input type="text" id="detail" placeholder="Enter Deatils" name="detail">
                      <div class="invalid" id="validationdetail"></div>
                    </div>
                    <div class="">
                      <label class="loginLabelStyle" for="photo"><b>Photo</b></label>
                      <div class="">
                        <input type="file" id="photo" name="photo">
                      </div>
                    </div>
                    <button type="submit" name="register" class="register" id="register">Add Car</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- Register form End -->
