
<nav class="navbar navbar-expand-lg navbar-dark myNav" >
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav welcomeMsg">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="About.php">About Us</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-car" aria-hidden="true"></i> Our Fleet
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="viewcar.php">Standard Cars</a>
          <a class="dropdown-item" href="viewcar.php">Premium Cars</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="viewcar.php">Cars for Special Occasion</a>
        </div>
      </li>
        <?php
        if(  $_SESSION['loggedIn']==true){
          echo '
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-user-circle" aria-hidden="true"></i> Hi  '.$_SESSION['username'].' !
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="profile.php">My Dashboard</a>
                <a class="dropdown-item" href="logout.php" name="logout" method="Post"><i class="fa fa-sign-out" aria-hidden="true"></i>
                Logout</a>
              </div>
            </li>
          ';
        }else{
          echo '
            <li class="nav-item">
              <a class="nav-link" href="" data-toggle="modal" data-target="#LoginModal"><i class="fa fa-user" aria-hidden="true"></i> Sign In   or</a>
            </li>
            <li class="nav-item">
              <a class="nav-link signIn" href="" data-toggle="modal" data-target="#registerModal">Register</a>
            </li>
          ';
        }
        ?>

      </ul>
    </div>
  </div>
</nav>
