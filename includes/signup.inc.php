<?php

if (isset($_POST['signup-submit'])) {

  require 'dbhandler.inc.php';

  $name = $_POST['name'];
  $email = $_POST['email'];
  $username = $_POST['username'];
  $pwd = $_POST['pwd'];
  $pwdRepeat = $_POST['pwd-repeat'];

  if (empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat)) {
    header("Location: ../signup.php?error=emptyfields&name=".$name."&email=".$email."&username=".$username);
    exit();
  }

  elseif (!filter_var($email,FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-z0-9]*$/",$username)) {
    header("Location: ../signup.php?error=invalidemailandusername&name=".$name);
    exit();
  }

  elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
    header("Location: ../signup.php?error=invalidemail&name=".$name."&username=".$username);
    exit();
  }

  elseif (!preg_match("/^[a-zA-z0-9]*$/",$username)) {
    header("Location: ../signup.php?error=invalidusername&name=".$name."&email=".$email);
    exit();
  }

  elseif ($pwd !== $pwdRepeat) {
    header("Location: ../signup.php?error=passwordnotsame&name=".$name."&email=".$email."&username=".$username);
    exit();
  }
  else {

    $sql = "SELECT username FROM users WHERE username=?";
    $pst = mysqli_stmt_init($con);
    if (!mysqli_stmt_prepare($pst,$sql)) {
      header("Location: ../signup.php?error=sqlerror");
      exit();
    }
    else {
      mysqli_stmt_bind_param($pst,"s",$username);
      mysqli_stmt_execute($pst);
      mysqli_stmt_store_result($pst);
      $resultCheck = mysqli_stmt_num_rows($pst);
      if ($resultCheck> 0) {
        header("Location: ../signup.php?error=usernameexists&email=".$email."&name=".$name);
        exit();
      }
      else {
        $sql = "INSERT INTO users (name,email,username,password) VALUES (?,?,?,?)";
        $pst = mysqli_stmt_init($con);
        if (!mysqli_stmt_prepare($pst,$sql)) {
          header("Location: ../signup.php?error=sqlerror");
          exit();
        }
        else {
          $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
          mysqli_stmt_bind_param($pst,"ssss",$name,$email,$username,$hashedPwd);
          if(mysqli_stmt_execute($pst) == true)
            header("Location: ../signup.php?signup=success");
            exit();
          }
        }

      }
      mysqli_stmt_close($pst);
      mysqli_close($con);
    }
}
else {
  header("Location: ../signup.php");
  exit();
}
