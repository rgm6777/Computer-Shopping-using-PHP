<?php
  require 'header.php';
  if(!isset($_SESSION['username'])) {
    header("Location: index.php?error=unauthorized");
    exit();
  }
  $error = "";
  $update = "";
  if(isset($_GET['error']) == "emptyfields") {
    $error = "Fill in atleast one field to update!";
  }
  if(isset($_GET['update']) == "true") {
    $update = "Successfully updated!";
  }

  ?>

  <main>
    <div class="container">
        <?php echo '<p style="font-size: 30px;">Welcome, '.$_SESSION['name'].'</p>';
        echo '<div class="signup-modal" style="float: left;"><p>Update your details</p>
        <form action="includes/updatedetails.php" method="POST">
        <input type="text" name="name" placeholder="Name">
        <input type="text" name="email" placeholder="E-mail">
        <button type="submit" class="signupBtn" name="updateDetailsBtn">Update</button></form>
        <p class="updateerror">';
        echo $error;
        echo '</p><p class="updatesuccess">'.$update.'</p></div>';
        ?>
    </div>
  </main>
