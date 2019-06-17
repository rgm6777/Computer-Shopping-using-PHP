<?php
  require 'dbhandler.inc.php';

  if (isset($_POST['parts-submit'])) {
    $user = $_GET['user'];
    $strParts = "";
    if(!empty($_POST['partid'])) {
      $partid = $_POST['partid'];
      foreach ($partid as $key => $value) {
        $strParts = $strParts.$key.'+';
      }
      if($user == 'guest') {
        header("Location: ../signup.php?error=cartnouser");
        exit();
      }
      else {
        $sql = "INSERT INTO orders (orders,username) VALUES (?,?)";
        $pst = mysqli_stmt_init($con);
        if(!mysqli_stmt_prepare($pst,$sql)) {
          header("Location: ../signup.php?error=sqlerror1");
          exit();
        }
        else {
          mysqli_stmt_bind_param($pst,"ss",$strParts,$user);
          mysqli_stmt_execute($pst);
        }
        mysqli_stmt_close($pst);
        mysqli_close($con);
        header('Location: ../orders.php');
        exit();
      }
    }
    else {
      header("Location: ../parts.php?error=noitems");
      exit();
    }
  }

  else {
    header("Location: ../index.php?error=unauthorised");
    exit();
  }
