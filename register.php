<?php

  session_start();
  require "connect.php";

  // initializing variables
  $fName = "";
  $lName = "";
  $contNum = "";
  $email    = "";

  if(isset($_POST['register'])){
    // receive all input values from the form
    $fName = !empty($_POST['fname']) ? trim($_POST['fname']) : null;
    $lName = !empty($_POST['lname']) ? trim($_POST['lname']) : null;
    $contNum = !empty($_POST['phoneNum']) ? trim($_POST['phoneNum']) : null;
    $email = !empty($_POST['email']) ? trim($_POST['email']) : null;
    $passwordSet1 = !empty($_POST['psw1']) ? trim($_POST['psw1']) : null;
    $passwordSet2 = !empty($_POST['psw2']) ? trim($_POST['psw2']) : null;

    // first check the database to make sure
    // a user does not already exist with the same username and/or email
    $sql = "SELECT * FROM User WHERE Email = :email";
    $stmt = $conn->prepare($sql);

    //Bind value.
    $stmt->bindValue(':email', $email);

    //Execute.
    $stmt->execute();

    //Fetch row.
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) { // if user exists
      if ($user['Email'] === $email) {
        echo "<script>alert('Account already existed! Login instead'); window.location='index.php'</script>";
      }
    }

    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
    	$password = md5($passwordSet1);//encrypt the password before saving in the database

    	$query = "INSERT INTO User (UserType, FName, LName, Email, Password, ContactNum)
    			  VALUES('0','$fName', '$lName', '$email', '$password', '$contNum')";
      $stmt = $conn->prepare($sql);
      $stmt->execute();

      //Provide the user with a login session.
      $_SESSION['User_ID'] = $user['User_ID'];
      $_SESSION['logged_time'] = time();
      $_SESSION['loggedIn'] = true;
      $_SESSION['username'] = $user['FName'];

      echo "<script>alert('Account successfully created!'); window.location='index.php'</script>";
      exit;
    }
}

?>
