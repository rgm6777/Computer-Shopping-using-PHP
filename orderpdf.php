<?php
  session_start();
  require 'includes/dbhandler.inc.php';
  require 'fpdf/fpdf.php';

  $pdf = new FPDF();
  $pdf->AddPage();

  $pdf->output();

  //
  $user = $_SESSION['username'];
  $pst = mysqli_stmt_init($con);
  $sqli = "SELECT * from orders where username = ?";
  if(!mysqli_stmt_prepare($pst,$sqli)) {
    header("Location: ../signup.php?error=sqlerror2");
    exit();
  }
  mysqli_stmt_bind_param($pst,"s",$user);
  mysqli_stmt_execute($pst);
  $result = mysqli_stmt_get_result($pst);
  while ($row = mysqli_fetch_assoc($result)) {
    $orderid = $row['id'];
  }

  $sqlj = "SELECT orders from orders where id=?";
  if(!mysqli_stmt_prepare($pst,$sqlj)){
      header("Location: ../signup.php?error=sqlerror");
      exit();
  }
  mysqli_stmt_bind_param($pst,"i",$orderid);
  mysqli_stmt_execute($pst);
  $result = mysqli_stmt_get_result($pst);
  $res=array();
  while ($row = mysqli_fetch_assoc($result)) {
    $res = $row['orders'];
  }

  $sql = "SELECT * FROM sample WHERE partid=?";
  $orders = explode('+',(string)$res);
  $total=0;
  $i=1;
  echo '<div class="order-list">';
  foreach ($orders as $key => $value) {
    if(!mysqli_stmt_prepare($pst,$sql)) {
      header("Location: ../signup.php?error=sqlerror2");
      exit();
    }
    mysqli_stmt_bind_param($pst,"s",$value);
    mysqli_stmt_execute($pst);
    $result1 = mysqli_stmt_get_result($pst);
    while ($row1 = mysqli_fetch_assoc($result1)) {
      echo '<div class="order-name">';
      print_r($i++);
      echo ". ";
      print_r($row1['brand']);
      echo " ";
      print_r($row1['name']);
      echo " ";
      print_r($row1['cores']);
      if (!empty($row1['cores'])) {
        echo " cores ";
      }
      print_r($row1['frequency']);
      echo " ";
      print_r($row1['socket']);
      echo " ";
      print_r($row1['type']);
      echo " ";
      print_r($row1['capacity']);
      echo " ";
      print_r($row1['speed']);
      echo '<div class="order-price">&#8377;';
      print_r($row1['price']);
      echo '</div></div>';
      $total += (int)$row1['price'];
    }
  }
  echo '</div>';
  echo '<div class="order-total">Total: &#8377;';
  print_r($total);
  echo '<br>CGST & SGST @ 12%';
  echo '<br><br>Proceed to pay: &#8377;'.($total = $total + $total*0.24);
  echo '</div>';
  ?>
