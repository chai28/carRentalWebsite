<?php

  session_start();
  require "connect.php";
  if(  $_SESSION['loggedIn'] !=true){
    $_SESSION['loggedIn'] = false;
  }
  $log=$nameErr=$passErr="";
  $user="";

  if(isset($_POST['login'])){
    //Retrieve the field values from our login form.
    $email = !empty($_POST['email']) ? trim($_POST['email']) : null;
    $passwordAttempt = !empty($_POST['psw']) ? trim($_POST['psw']) : null;
    //Retrieve the user account information for the given username.
    $sql = "SELECT User_ID, UserType, FName, Email, Password FROM User WHERE Email = :email";
    $stmt = $conn->prepare($sql);

    //Bind value.
    $stmt->bindValue(':email', $email);

    //Execute.
    $stmt->execute();

    //Fetch row.
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    //If $row is FALSE.
    if(!$user){
        //Could not find a user with that email!
        echo "<script>alert('Account does not exist! Create an account maybe?'); window.location='index.php'</script>";
    } else{
        //Compare passwords
        if($passwordAttempt == $user['Password']){
            //Provide the user with a login session.
            $_SESSION['User_ID'] = $user['User_ID'];
            $_SESSION['logged_time'] = time();
            $_SESSION['loggedIn'] = true;
            $_SESSION['username'] = $user['FName'];
            $_SESSION['lname'] = $user['LName'];
            $_SESSION['email'] = $user['Email'];
            $_SESSION['UserType'] = $user['UserType'];
            $_SESSION['contact'] = $user['ContactNum'];
            $_SESSION['userid_edit']="";
            $_SESSION['prof_update']=false;

              header('Location: index.php');

            exit;

        } else{
          echo "<script>alert('Incorrect email / password combination!'); window.location='index.php'</script>";
        }
      }
    }




 ?>
