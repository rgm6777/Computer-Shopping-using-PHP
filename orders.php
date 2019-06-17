<?php
  require "header.php";
  require 'includes/dbhandler.inc.php';

  if(!isset($_SESSION['username'])){
    header("Location: index.php?error=unauthorized");
    exit();
  }
?>

<main>
  <div class="container">
    <h2 style="color: #000;">Your cart, <?php echo $_SESSION['name'];?></h2>
      <?php
        $user = $_SESSION['username'];
        $pst = mysqli_stmt_init($con);
        $sql1 = "SELECT * from orders where username = ?";
        if(!mysqli_stmt_prepare($pst,$sql1)) {
          header("Location: ../signup.php?error=sqlerror21");
          exit();
        }
        mysqli_stmt_bind_param($pst,"s",$user);
        mysqli_stmt_execute($pst);
        $result = mysqli_stmt_get_result($pst);
        while ($row = mysqli_fetch_assoc($result)) {
          $orderid = $row['id'];
        }
        echo '<p>Order ID: '.$orderid.'</p>';
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

        $sql = "SELECT * FROM product WHERE partid=?";
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
            echo '<div class="order-price">&#8377;';
            print_r($row1['price']);
            echo '</div></div><br>';
            $total += (int)$row1['price'];
          }
        }
        echo '</div>';
        echo '<div class="order-total">Total: &#8377;';
        print_r($total);
        echo '<br>CGST & SGST @ 12%';
        echo '<br>Proceed to pay: &#8377;'.($total = $total + $total*0.24);
        echo '<br><input type="button" class="printBtn" value="Print this page" onClick="window.print(\'container\')"></div>';
      ?>
  </div>
</main>
<script type="text/javascript">

function printDiv(divName) {

 var printContents = document.getElementById(divName);
 w=window.open();
 w.document.write(printContents);
 w.print();
 w.close();
}
</script>
