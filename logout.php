<?php
  session_start();
  session_destroy();

  session_start();
  $_SESSION=array();
  $_SESSION['loggedIn'] = false;
  header('location:index.php');
 ?>
