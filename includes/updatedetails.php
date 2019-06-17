<?php
  session_start();
  require 'dbhandler.inc.php';

  if(isset($_POST['updateDetailsBtn']) == false) {
    header("Location: ../index.php?error=unauthorized");
    exit();
  }
  else {
    if(empty($_POST['name']) && empty($_POST['email'])) {
      header("Location: ../myaccount.php?error=emptyfields");
      exit();
    }
    if(empty($_POST['name'])) {
      $name = $_SESSION['name'];
    }
    else {
      $name = $_POST['name'];
    }
    if(empty($_POST['email'])) {
      $email = $_SESSION['email'];
    }
    else {
      $email = $_POST['email'];
    }
    $sql = "UPDATE users SET name=?,email=? where username=?";
    $pst = mysqli_stmt_init($con);
    if (mysqli_stmt_prepare($pst,$sql) == false) {
      header("Location: ../index.php?error=sqlerror");
      exit();
    }
    mysqli_stmt_bind_param($pst,"sss",$name,$email,$_SESSION['username']);
    if(mysqli_stmt_execute($pst)) {
      header("Location: ../myaccount.php?update=true");
      exit();
    }

  }
