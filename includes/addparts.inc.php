<?php
  require 'dbhandler.inc.php';
  if (!isset($_POST['partSubmit'])) {
    header("Location: ../index.php?error=unauthorised");
    exit();
  }
  else {
    if(empty($_POST['partid']) || empty($_POST['name']) || empty($_POST['brand']) || empty($_POST['price'])) {
      header("Location: ../admin.php?error=emptyfields");
      exit();
    }
    elseif($_POST['parts'] === 'cpu'){
      $sql1 = "INSERT into cpu values(?,?,?,?)";
      $sql2 = "INSERT INTO product VALUES(?,?,?,?)";
      $pst1 = mysqli_stmt_init($con);
      $pst2 = mysqli_stmt_init($con);
      if (!mysqli_stmt_prepare($pst1,$sql1)) {
        header("Location: ../index.php?error=SQL+error1");
        exit();
      }
      if (!mysqli_stmt_prepare($pst2,$sql2)) {
        header("Location: ../index.php?error=SQL+error2");
        exit();
      }
      else {
        if(empty($_POST['cores']) || empty($_POST['frequency']) || empty($_POST['socket'])) {
          header("Location: ../admin.php?error=emptyfields");
          exit();
        }
        $id++;
        mysqli_stmt_bind_param($pst2,"isss",$_POST['partid'],$_POST['name'],$_POST['brand'],$_POST['price']);
        mysqli_stmt_bind_param($pst1,"iiss",$_POST['partid'],$_POST['cores'],$_POST['frequency'],$_POST['socket']);
        if(mysqli_stmt_execute($pst2) == true && mysqli_stmt_execute($pst1) == true) {
          header("Location: ../admin.php?error=added");
          exit();
        }
      }
    }

    elseif($_POST['parts'] === 'ram'){
      $sql1 = "INSERT into ram values(?,?,?,?)";
      $sql2 = "INSERT INTO product VALUES(?,?,?,?)";
      $pst1 = mysqli_stmt_init($con);
      $pst2 = mysqli_stmt_init($con);
      if (!mysqli_stmt_prepare($pst1,$sql1)) {
        header("Location: ../index.php?error=SQL+error");
        exit();
      }
      if (!mysqli_stmt_prepare($pst2,$sql2)) {
        header("Location: ../index.php?error=SQL+error");
        exit();
      }
      else {
        if(empty($_POST['type']) || empty($_POST['speed']) || empty($_POST['capacity'])) {
          header("Location: ../admin.php?error=emptyfields");
          exit();
        }
        mysqli_stmt_bind_param($pst1,"isss",$_POST['partid'],$_POST['capacity'],$_POST['speed'],$_POST['type']);
        mysqli_stmt_bind_param($pst2,"isss",$_POST['partid'],$_POST['name'],$_POST['brand'],$_POST['price']);
        if(mysqli_stmt_execute($pst2) == true && mysqli_stmt_execute($pst1) == true) {
          header("Location: ../admin.php?error=added");
          exit();
        }
      }
    }
    elseif($_POST['parts'] === 'motherboard'){
      $sql1 = "INSERT into motherboard values(?,?,?)";
      $sql2 = "INSERT INTO product VALUES(?,?,?,?)";
      $pst1 = mysqli_stmt_init($con);
      $pst2 = mysqli_stmt_init($con);
      if (!mysqli_stmt_prepare($pst1,$sql1)) {
        header("Location: ../index.php?error=SQL+error");
        exit();
      }
      if (!mysqli_stmt_prepare($pst2,$sql2)) {
        header("Location: ../index.php?error=SQL+error");
        exit();
      }
      else {
        if(empty($_POST['socket']) || empty($_POST['type'])) {
          header("Location: ../admin.php?error=emptyfields");
          exit();
        }
        mysqli_stmt_bind_param($pst1,"iss",$_POST['partid'],$_POST['socket'],$_POST['type']);
        mysqli_stmt_bind_param($pst2,"isss",$_POST['partid'],$_POST['name'],$_POST['brand'],$_POST['price']);
        if(mysqli_stmt_execute($pst2) == true && mysqli_stmt_execute($pst1) == true) {
          header("Location: ../admin.php?error=added");
          exit();
        }
      }
    }
    elseif($_POST['parts'] === 'graphics'){
      $sql1 = "INSERT into graphics values(?,?,?)";
      $sql2 = "INSERT INTO product VALUES(?,?,?,?)";
      $pst1 = mysqli_stmt_init($con);
      $pst2 = mysqli_stmt_init($con);
      if (!mysqli_stmt_prepare($pst1,$sql1)) {
        header("Location: ../index.php?error=SQL+error");
        exit();
      }
      if (!mysqli_stmt_prepare($pst2,$sql2)) {
        header("Location: ../index.php?error=SQL+error");
        exit();
      }
      else {
        if(empty($_POST['capacity']) || empty($_POST['frequency'])) {
          header("Location: ../admin.php?error=emptyfields");
          exit();
        }
        mysqli_stmt_bind_param($pst1,"iss",$_POST['partid'],$_POST['frequency'],$_POST['capacity']);
        mysqli_stmt_bind_param($pst2,"isss",$_POST['partid'],$_POST['name'],$_POST['brand'],$_POST['price']);
        if(mysqli_stmt_execute($pst2) == true && mysqli_stmt_execute($pst1) == true) {
          header("Location: ../admin.php?error=added");
          exit();
        }
      }
    }
    elseif($_POST['parts'] === 'accesories'){
      $sql1 = "INSERT into accessories values(?)";
      $sql2 = "INSERT INTO product VALUES(?,?,?,?)";
      $pst1 = mysqli_stmt_init($con);
      $pst2 = mysqli_stmt_init($con);
      if (!mysqli_stmt_prepare($pst1,$sql1)) {
        header("Location: ../index.php?error=SQL+error");
        exit();
      }
      if (!mysqli_stmt_prepare($pst2,$sql2)) {
        header("Location: ../index.php?error=SQL+error");
        exit();
      }
      else {
        mysqli_stmt_bind_param($pst1,"i",$_POST['partid']);
        mysqli_stmt_bind_param($pst2,"isss",$_POST['partid'],$_POST['name'],$_POST['brand'],$_POST['price']);
        if(mysqli_stmt_execute($pst2) == true && mysqli_stmt_execute($pst1) == true) {
          header("Location: ../admin.php?error=added");
          exit();
        }
      }
    }
    elseif($_POST['parts'] === 'monitor'){
      $sql1 = "INSERT into monitor values(?,?,?,?)";
      $sql2 = "INSERT INTO product VALUES(?,?,?,?)";
      $pst1 = mysqli_stmt_init($con);
      $pst2 = mysqli_stmt_init($con);
      if (!mysqli_stmt_prepare($pst1,$sql1)) {
        header("Location: ../index.php?error=SQL+error");
        exit();
      }
      if (!mysqli_stmt_prepare($pst2,$sql2)) {
        header("Location: ../index.php?error=SQL+error");
        exit();
      }
      else {
        if(empty($_POST['size']) || empty($_POST['resolution']) || empty($_POST['panel'])) {
          header("Location: ../admin.php?error=emptyfields");
          exit();
        }
        mysqli_stmt_bind_param($pst1,"isss",$_POST['partid'],$_POST['size'],$_POST['resolution'],$_POST['panel']);
        mysqli_stmt_bind_param($pst2,"isss",$_POST['partid'],$_POST['name'],$_POST['brand'],$_POST['price']);
        if(mysqli_stmt_execute($pst2) == true && mysqli_stmt_execute($pst1) == true) {
          header("Location: ../admin.php?error=added");
          exit();
        }
      }
    }
    elseif($_POST['parts'] === 'storage'){
      $sql1 = "INSERT into storage values(?,?,?,?)";
      $sql2 = "INSERT INTO product VALUES(?,?,?,?)";
      $pst1 = mysqli_stmt_init($con);
      $pst2 = mysqli_stmt_init($con);
      if (!mysqli_stmt_prepare($pst1,$sql1)) {
        header("Location: ../index.php?error=SQL+error");
        exit();
      }
      if (!mysqli_stmt_prepare($pst2,$sql2)) {
        header("Location: ../index.php?error=SQL+error");
        exit();
      }
      else {
        if(empty($_POST['capacity']) || empty($_POST['speed']) || empty($_POST['type'])) {
          header("Location: ../admin.php?error=emptyfields");
          exit();
        }
        mysqli_stmt_bind_param($pst1,"isss",$_POST['partid'],$_POST['capacity'],$_POST['speed'],$_POST['type']);
        mysqli_stmt_bind_param($pst2,"isss",$_POST['partid'],$_POST['name'],$_POST['brand'],$_POST['price']);
        if(mysqli_stmt_execute($pst2) == true && mysqli_stmt_execute($pst1) == true) {
          header("Location: ../admin.php?error=added");
          exit();
        }
      }
    }
    elseif($_POST['parts'] === 'cabinet'){
      $sql1 = "INSERT into cabinet values(?,?,?)";
      $sql2 = "INSERT INTO product VALUES(?,?,?,?)";
      $pst1 = mysqli_stmt_init($con);
      $pst2 = mysqli_stmt_init($con);
      if (!mysqli_stmt_prepare($pst1,$sql1)) {
        header("Location: ../index.php?error=SQL+error");
        exit();
      }
      if (!mysqli_stmt_prepare($pst2,$sql2)) {
        header("Location: ../index.php?error=SQL+error");
        exit();
      }
      else {
        if(empty($_POST['slots']) || empty($_POST['type'])) {
          header("Location: ../admin.php?error=emptyfields");
          exit();
        }
        mysqli_stmt_bind_param($pst1,"iss",$_POST['partid'],$_POST['slots'],$_POST['type']);
        mysqli_stmt_bind_param($pst2,"isss",$_POST['partid'],$_POST['name'],$_POST['brand'],$_POST['price']);
        if(mysqli_stmt_execute($pst2) == true && mysqli_stmt_execute($pst1) == true) {
          header("Location: ../admin.php?error=added");
          exit();
        }
      }
    }
    elseif($_POST['parts'] === 'smps'){
      $sql1 = "INSERT into smps values(?,?)";
      $sql2 = "INSERT INTO product VALUES(?,?,?,?)";
      $pst1 = mysqli_stmt_init($con);
      $pst2 = mysqli_stmt_init($con);
      if (!mysqli_stmt_prepare($pst1,$sql1)) {
        header("Location: ../index.php?error=SQL+error");
        exit();
      }
      if (!mysqli_stmt_prepare($pst2,$sql2)) {
        header("Location: ../index.php?error=SQL+error");
        exit();
      }
      else {
        if(empty($_POST['wattage'])) {
          header("Location: ../admin.php?error=emptyfields");
          exit();
        }
        mysqli_stmt_bind_param($pst1,"is",$_POST['partid'],$_POST['wattage']);
        mysqli_stmt_bind_param($pst2,"isss",$_POST['partid'],$_POST['name'],$_POST['brand'],$_POST['price']);
        if(mysqli_stmt_execute($pst2) == true && mysqli_stmt_execute($pst1) == true) {
          header("Location: ../admin.php?error=added");
          exit();
        }
      }
    }
    else {
      header("Location: ../admin.php?error=unknownerror");
      exit();
    }
  }
