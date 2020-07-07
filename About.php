<?php 
session_start();
include 'header.php'; 
?>
<body>
  <header>
    <div class="container-fluid text-center">
      <a class="navbar-brand" href="#"><img src="static/img/logo.png" width="180px" height="150px"></a>
    </div>
  </header>
  <?php include 'navbar.php';?>

  <div class="page-info">
    <div class="container">
      <h1>About Us</h1>
    </div>
  </div>

  <!-- About section -->
	<section class="content">
		<div class="container">
			<div class="row">
        <div class="about-text">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
			</div></br>
      <div class="row">
        <div class="about-text">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
			</div>
		</div>
	</section>
	<!-- About section end -->

  <?php include 'footer.php'; ?>

</body>
</html>
