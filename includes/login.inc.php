<?php

if (isset($_POST['login-submit'])) {

  require 'dbhandler.inc.php';

  $username = $_POST['username'];
  $pwd = $_POST['pwd'];

  if (empty($username) || empty($pwd)) {
    header("Location: ../index.php?error=Empty+fields");
    exit();
  }
  else {
    $sql = "SELECT * FROM users WHERE username=?;";
    $pst = mysqli_stmt_init($con);
    if (!mysqli_stmt_prepare($pst,$sql)) {
      header("Location: ../index.php?error=SQL+error");
      exit();
    }
    else {
      mysqli_stmt_bind_param($pst,"s",$username);
      mysqli_stmt_execute($pst);
      $result = mysqli_stmt_get_result($pst);
      if($row = mysqli_fetch_assoc($result)) {
        $pwdCheck = password_verify($pwd,$row['password']);
        if ($pwdCheck == false) {
          header("Location: ../index.php?error=Wrong+password");
          exit();
        }
        else if ($pwdCheck == true) {
          session_start();
          $_SESSION['name'] = $row['name'];
          $_SESSION['username'] = $row['username'];
          $_SESSION['email'] = $row['email'];
          if ($_SESSION['username'] == 'admin') {
            header("Location: ../admin.php");
            exit();
          }
          else {
            header("Location: ../index.php");
            exit();
          }
        }
        else {
          header("Location: ../index.php?error=Wrong+password");
          exit();
        }
      }
      else {
        header("Location: ../signup.php?success=newuser&username=".$_POST['username']);
        exit();
      }

    }
  }


}
else {
  header("Location: ../index.php");
  exit();
}
