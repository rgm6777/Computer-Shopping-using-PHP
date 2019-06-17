<?php
  require "header.php";
  require 'includes/dbhandler.inc.php';
?>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<main>
  <div class="container">
    <h1 style="color: #000; opacity: 1; margin: 10px auto;">Computer Hardware</h1>
      <form action="includes/parts.inc.php?user=<?php echo $_SESSION['username']; ?>" method="POST">
        <?php
          $sql = "SELECT * FROM product where partid=?";
          $sql1 = "SELECT * FROM cpu ";
          $sql2 = "SELECT * FROM motherboard";
          $sql3 = "SELECT * FROM ram";
          $sql4 = "SELECT * FROM graphics";
          $sql5 = "SELECT * FROM accessories";
          $sql6 = "SELECT * FROM monitor";
          $sql7 = "SELECT * FROM storage";
          $sql8 = "SELECT * FROM cabinet";
          $sql9 = "SELECT * FROM smps";
          echo '<div class="partsRadio">';
          echo '<input type="radio" name="parts" class="parts" onclick="showDiv(\'part1\')" checked>CPU';
          echo '<input type="radio" name="parts" class="parts" onclick="showDiv(\'part2\')">Motherboard';
          echo '<input type="radio" name="parts" class="parts" onclick="showDiv(\'part3\')">RAM';
          echo '<input type="radio" name="parts" class="parts" onclick="showDiv(\'part4\')">Graphics Cards';
          echo '<input type="radio" name="parts" class="parts" onclick="showDiv(\'part5\')">Accesories';
          echo '<input type="radio" name="parts" class="parts" onclick="showDiv(\'part6\')">Monitor';
          echo '<input type="radio" name="parts" class="parts" onclick="showDiv(\'part7\')">Storage';
          echo '<input type="radio" name="parts" class="parts" onclick="showDiv(\'part8\')">Cabinet';
          echo '<input type="radio" name="parts" class="parts" onclick="showDiv(\'part9\')">Power Supply';
          echo '</div>';
          $pst = mysqli_stmt_init($con);
          $pst2 = mysqli_stmt_init($con2);

          if (!mysqli_stmt_prepare($pst,$sql1)) {
            header("Location: ../index.php?error=sqlerror");
            exit();
          }
          else {
            mysqli_stmt_execute($pst);
            $result = mysqli_stmt_get_result($pst);
            if (!mysqli_stmt_prepare($pst2,$sql)) {
              header("Location: ../index.php?error=sqlerror");
              exit();
            }
            else {
              echo '<div id="part1">';
              while($row = mysqli_fetch_assoc($result)) {
                mysqli_stmt_bind_param($pst2,"i",$row['partid']);
                mysqli_stmt_execute($pst2);
                $result2 = mysqli_stmt_get_result($pst2);
                while($row2 = mysqli_fetch_assoc($result2)){
                  echo '<div class="card w3-animate-opacity"><h2>'.$row2['brand'].'</h2><br><p class="title">'.$row2['name'].' '.$row['cores'].' cores '.$row['frequency'].' '.$row['socket'].'</p><button class="price" disabled>&#x20B9;'.$row2['price'].'</button><br><input type="checkbox" name="partid['.$row['partid'].']"></div>';
                }
              }
            }
            echo '</div>';
          }

          if (!mysqli_stmt_prepare($pst,$sql2)) {
            header("Location: ../index.php?error=sqlerror");
            exit();
          }
          else {
            mysqli_stmt_execute($pst);
            $result = mysqli_stmt_get_result($pst);
            if (!mysqli_stmt_prepare($pst2,$sql)) {
              header("Location: ../index.php?error=sqlerror");
              exit();
            }
            else {
              echo '<div id="part2" style="display: none;">';
              while($row = mysqli_fetch_assoc($result)) {
                mysqli_stmt_bind_param($pst2,"i",$row['partid']);
                mysqli_stmt_execute($pst2);
                $result2 = mysqli_stmt_get_result($pst2);
                while($row2 = mysqli_fetch_assoc($result2)){
                  echo '<div class="card w3-animate-opacity"><h2>'.$row2['brand'].'</h2><br><p class="title">'.$row2['name'].' '.$row['socket'].' '.$row['type'].'</p><button class="price" disabled>'.'&#x20B9;'.$row2['price'].'</button><br><input type="checkbox" name="partid['.$row['partid'].']"></div>';
                }
              }
            }
            echo '</div>';
          }


          if (!mysqli_stmt_prepare($pst,$sql3)) {
            header("Location: ../index.php?error=sqlerror");
            exit();
          }
          else {
            mysqli_stmt_execute($pst);
            $result = mysqli_stmt_get_result($pst);
            if (!mysqli_stmt_prepare($pst2,$sql)) {
              header("Location: ../index.php?error=sqlerror");
              exit();
            }
            else {
              echo '<div id="part3" style="display: none;">';
              while($row = mysqli_fetch_assoc($result)) {
                mysqli_stmt_bind_param($pst2,"i",$row['partid']);
                mysqli_stmt_execute($pst2);
                $result2 = mysqli_stmt_get_result($pst2);
                while($row2 = mysqli_fetch_assoc($result2)){
                  echo '<div class="card w3-animate-opacity"><h2>'.$row2['brand'].'</h2><br><p class="title">'.$row2['name'].' '.$row['capacity'].' '.$row['speed'].' '.$row['type'].'</p><button class="price" disabled>&#x20B9;'.$row2['price'].'</button><br><input type="checkbox" name="partid['.$row['partid'].']"></div>';
                }
              }
            }
            echo '</div>';
          }


          if (!mysqli_stmt_prepare($pst,$sql4)) {
            header("Location: ../index.php?error=sqlerror");
            exit();
          }
          else {
            mysqli_stmt_execute($pst);
            $result = mysqli_stmt_get_result($pst);
            if (!mysqli_stmt_prepare($pst2,$sql)) {
              header("Location: ../index.php?error=sqlerror");
              exit();
            }
            else {
              echo '<div id="part4" style="display: none;">';
              while($row = mysqli_fetch_assoc($result)) {
                mysqli_stmt_bind_param($pst2,"i",$row['partid']);
                mysqli_stmt_execute($pst2);
                $result2 = mysqli_stmt_get_result($pst2);
                while($row2 = mysqli_fetch_assoc($result2)){
                  echo '<div class="card w3-animate-opacity"><h2>'.$row2['brand'].'</h2><br><p class="title">'.$row2['name'].' '.$row['frequency'].' '.$row['capacity'].'</p><button class="price" disabled>&#x20B9;'.$row2['price'].'</button><br><input type="checkbox" name="partid['.$row['partid'].']"></div>';
                }
              }
            }
            echo '</div>';
          }


          if (!mysqli_stmt_prepare($pst,$sql5)) {
            header("Location: ../index.php?error=sqlerror");
            exit();
          }
          else {
            mysqli_stmt_execute($pst);
            $result = mysqli_stmt_get_result($pst);
            if (!mysqli_stmt_prepare($pst2,$sql)) {
              header("Location: ../index.php?error=sqlerror");
              exit();
            }
            else {
              echo '<div id="part5" style="display: none;">';
              while($row = mysqli_fetch_assoc($result)) {
                mysqli_stmt_bind_param($pst2,"i",$row['partid']);
                mysqli_stmt_execute($pst2);
                $result2 = mysqli_stmt_get_result($pst2);
                while($row2 = mysqli_fetch_assoc($result2)){
                  echo '<div class="card w3-animate-opacity"><h2>'.$row2['brand'].'</h2><br><p class="title">'.$row2['name'].'</p><button class="price" disabled>&#x20B9;'.$row2['price'].'</button><br><input type="checkbox" name="partid['.$row['partid'].']"></div>';
                }
              }
            }
            echo '</div>';
          }


          if (!mysqli_stmt_prepare($pst,$sql6)) {
            header("Location: ../index.php?error=sqlerror");
            exit();
          }
          else {
            mysqli_stmt_execute($pst);
            $result = mysqli_stmt_get_result($pst);
            if (!mysqli_stmt_prepare($pst2,$sql)) {
              header("Location: ../index.php?error=sqlerror");
              exit();
            }
            else {
              echo '<div id="part6" style="display: none;">';
              while($row = mysqli_fetch_assoc($result)) {
                mysqli_stmt_bind_param($pst2,"i",$row['partid']);
                mysqli_stmt_execute($pst2);
                $result2 = mysqli_stmt_get_result($pst2);
                while($row2 = mysqli_fetch_assoc($result2)){
                  echo '<div class="card w3-animate-opacity"><h2>'.$row2['brand'].'</h2><br><p class="title">'.$row2['name'].' '.$row['size'].' '.$row['resolution'].' '.$row['panel'].' Panel'.'</p><button class="price" disabled>&#x20B9;'.$row2['price'].'</button><br><input type="checkbox" name="partid['.$row['partid'].']"></div>';
                }
              }
            }
            echo '</div>';
          }


          if (!mysqli_stmt_prepare($pst,$sql7)) {
            header("Location: ../index.php?error=sqlerror");
            exit();
          }
          else {
            mysqli_stmt_execute($pst);
            $result = mysqli_stmt_get_result($pst);
            if (!mysqli_stmt_prepare($pst2,$sql)) {
              header("Location: ../index.php?error=sqlerror");
              exit();
            }
            else {
              echo '<div id="part7" style="display: none;">';
              while($row = mysqli_fetch_assoc($result)) {
                mysqli_stmt_bind_param($pst2,"i",$row['partid']);
                mysqli_stmt_execute($pst2);
                $result2 = mysqli_stmt_get_result($pst2);
                while($row2 = mysqli_fetch_assoc($result2)){
                  echo '<div class="card w3-animate-opacity"><h2>'.$row2['brand'].'</h2><br><p class="title">'.$row2['name'].' '.$row['capacity'].' '.$row['speed'].' '.$row['type'].'</p><button class="price" disabled>&#x20B9;'.$row2['price'].'</button><br><input type="checkbox" name="partid['.$row['partid'].']"></div>';
                }
              }
            }
            echo '</div>';
          }


          if (!mysqli_stmt_prepare($pst,$sql8)) {
            header("Location: ../index.php?error=sqlerror");
            exit();
          }
          else {
            mysqli_stmt_execute($pst);
            $result = mysqli_stmt_get_result($pst);
            if (!mysqli_stmt_prepare($pst2,$sql)) {
              header("Location: ../index.php?error=sqlerror");
              exit();
            }
            else {
              echo '<div id="part8" style="display: none;">';
              while($row = mysqli_fetch_assoc($result)) {
                mysqli_stmt_bind_param($pst2,"i",$row['partid']);
                mysqli_stmt_execute($pst2);
                $result2 = mysqli_stmt_get_result($pst2);
                while($row2 = mysqli_fetch_assoc($result2)){
                  echo '<div class="card w3-animate-opacity"><h2>'.$row2['brand'].'</h2><br><p class="title">'.$row2['name'].' '.$row['slots'].' PCI-e Slots  '.$row['type'].'</p><button class="price" disabled>&#x20B9;'.$row2['price'].'</button><br><input type="checkbox" name="partid['.$row['partid'].']"></div>';
                }
              }
            }
            echo '</div>';
          }


          if (!mysqli_stmt_prepare($pst,$sql9)) {
            header("Location: ../index.php?error=sqlerror");
            exit();
          }
          else {
            mysqli_stmt_execute($pst);
            $result = mysqli_stmt_get_result($pst);
            if (!mysqli_stmt_prepare($pst2,$sql)) {
              header("Location: ../index.php?error=sqlerror");
              exit();
            }
            else {
              echo '<div id="part9" style="display: none;">';
              while($row = mysqli_fetch_assoc($result)) {
                mysqli_stmt_bind_param($pst2,"i",$row['partid']);
                mysqli_stmt_execute($pst2);
                $result2 = mysqli_stmt_get_result($pst2);
                while($row2 = mysqli_fetch_assoc($result2)){
                  echo '<div class="card w3-animate-opacity"><h2>'.$row2['brand'].'</h2><br><p class="title">'.$row2['name'].' '.$row['wattage'].'</p><button class="price" disabled>&#x20B9;'.$row2['price'].'</button><br><input type="checkbox" name="partid['.$row['partid'].']"></div>';
                }
              }
            }
            echo '</div>';
          }


        ?>
      <button type="submit" name="parts-submit" class="partsBtn">Add to cart <i class="fas fa-shopping-cart"></i></button>
    </form>
  </div>

</main>
<script>
    function showDiv(id) {
        for(var i=1;i<10;i++) {
            document.getElementById('part'.concat(i)).style.display = 'none';
        }
        document.getElementById(id).style.display = 'block';
    }
</script>
