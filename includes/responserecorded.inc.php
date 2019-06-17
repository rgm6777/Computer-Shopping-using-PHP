<?php

if (isset($_POST['response-submit'])) {
  require 'dbhandler.inc.php';

  $name = "";
  $email = "";
  $phone = "";
  $response = "";

  if (empty($_POST['name']) || empty($_POST['response'])) {
    header("Location: ../contactus.php?response=emptyfields");
    exit();
  }
  else {
    $name = $_POST['name'];
    $response = $_POST['response'];
    if(!empty($_POST['email'])){
      if (!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
        header("Location: ../contactus.php?response=invalidemail");
        exit();
      }
      else {
        $email = $_POST['email'];
        $sql = "INSERT INTO response (name,email,phone,response) VALUES (?,?,?,?)";
        $pst = mysqli_stmt_init($con);
        if(!mysqli_stmt_prepare($pst,$sql)) {
          header("Location: ../error404?response=sqlerror");
          exit();
        }
        else {
          mysqli_stmt_bind_param($pst,"ssss",$name,$email,$phone,$response);
          mysqli_stmt_execute($pst);
          header("Location: ../contactus.php?response=success");
          exit();
        }
      }
    }
  }
  if(!empty($_POST['phone'])){
    if (!preg_match("/^[0-9]*$/",$phone)) {
      header("Location: ../contactus.php?response=invalidphone");
      exit();
    }
    else {
      $phone = $_POST['phone'];
      if(!empty($_POST['email'])){
        if (!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
          header("Location: ../contactus.php?response=invalidemail");
          exit();
        }
        else {
          $email = $_POST['email'];
        }
      }
      else {
        $sql = "INSERT INTO response (name,email,phone,response) VALUES (?,?,?,?)";
        $pst = mysqli_stmt_init($con);
        if(!mysqli_stmt_prepare($pst,$sql)) {
          header("Location: ../error404?response=sqlerror");
          exit();
        }
        else {
          mysqli_stmt_bind_param($pst,"ssss",$name,$email,$phone,$response);
          mysqli_stmt_execute($pst);
          header("Location: ../contactus.php?response=success");
          exit();
        }
      }
    }
  }
  $sql = "INSERT INTO response (name,email,phone,response) VALUES (?,?,?,?)";
  $pst = mysqli_stmt_init($con);
  if(!mysqli_stmt_prepare($pst,$sql)) {
    header("Location: ../error404?response=sqlerror");
    exit();
  }
  else {
    mysqli_stmt_bind_param($pst,"ssss",$name,$email,$phone,$response);
    mysqli_stmt_execute($pst);
    header("Location: ../contactus.php?response=success");
    exit();
  }
}
