<?php
session_start();
include 'header.php';
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
        <link href="https://fonts.googleapis.com/css?family=Dosis&display=swap" rel="stylesheet">
        <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
        <script  src="https://cdnjs.cloudflare.com/ajax/libs/numeric/1.2.6/numeric.min.js"></script>
  </header>

  <div style="margin-top:5px;">
   <div style="margin-top:50px;">
    <h3>Car</h3>
   </div> 
   <div id="carnumber"></div><p>(Click to view details)</p>
   <div style="margin-top:50px;">
    <h3>User</h3>
   </div> 
   <div id="usernumber"></div>
</div>

<div id="carpart" style="display:none;"> <!--car-->
   <h3 style="margin-left:300px;">Car category</h3>
  <div style="margin-left:50px;" id="Carcategory"></div>
  <h3 style="margin-left:300px;">Rented car</h3>
  <div style="margin-left:120px;" id="carbar"></div>
</div>
  
<div id="userpart" style="display:none;" > <!--user-->
   <h3 style="margin-left:300px;">User distribution</h3>
  <div style="margin-left:50px;" id="userbar"></div>
  <h3 style="margin-left:300px;">User distribution</h3>
  <div style="margin-left:50px;" id="userpie"></div>
</div>  
<?php include 'report_load.php' ?>
  <?php include 'footer.php'; ?>
  </body>
</html>