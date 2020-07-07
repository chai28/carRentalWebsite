<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <?php
      $title;
      $path = $_SERVER['PHP_SELF'];
      $page = basename($path);

      switch("$page"){
        case 'login.php':
          $title = 'Login';
          break;
        case 'register.php':
          $title = 'Register';
          break;
        case 'premium.php':
          $title = 'Premium Cars';
          break;
        case 'standard.php':
          $title = 'Standard Cars';
          break;
        case 'special.php':
          $title = 'Special Cars';
          break;
        default:
          $title = 'Rent a Car';
          break;
      }

        echo '<title>' .$title. '</title>';
     ?>

     <!-- Styles CSS -->
     <link rel="stylesheet" href="static/css/bootstrap.min.css" />
     <link rel="stylesheet" href="static/css/myStyle.css" />

     <!-- Fonts -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora|Open+Sans|PT+Sans&display=swap" />

     <!-- Script -->
     <script src="static/js/jquery-3.4.1.min.js"></script>
     <script src="static/js/bootstrap.min.js"></script>
     <script src="static/js/script.js"></script>
     <script src="static/js/date_constraint.js"></script>
     <script src="static/js/check_booking.js"></script>

  </head>
