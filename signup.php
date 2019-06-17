<?php
  require "header.php";
  $signuperror = "";
  $signupsuccess = "";
  if(!empty($_GET['username'])){
    $username = $_GET['username'];
  }
  else {
    $username = "";
  }
  if(!empty($_GET['name'])){
    $name = $_GET['name'];
  }
  else {
    $name = "";
  }
  if(!empty($_GET['email'])){
    $email = $_GET['email'];
  }
  else {
    $email = "";
  }

?>
  <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
  <style media="screen">
    .errormessgage {
      color: red;
    }
    .successmessgage {
      color: green;
    }
  </style>
  <main>
    <?php
      if (isset($_GET['error'])) {
        if ($_GET['error'] == "emptyfields") {
          $signuperror = "Fill in all the fields!";
        }
        elseif ($_GET['error'] == "usernameexists") {
          $signuperror = "Username already exists. Login to continue or create a new account with different username!";
        }
        elseif ($_GET['error'] == "invalidemailandusername") {
          $signuperror = "Invalid username and/or emai!l";
        }
        elseif ($_GET['error'] == "invalidemail") {
          $signuperror = "Invaild email!";
        }
        elseif ($_GET['error'] == "invalidusername") {
          $signuperror = "Invaild username!";
        }
        elseif ($_GET['error'] == "passwordnotsame") {
          $signuperror = "Passwords do not match!";
        }
        elseif ($_GET['error'] == "cartnouser") {
          $signuperror = "Signup to add items to cart!";
        }
      }
      elseif (isset($_GET['signup'])) {
        $signupsuccess = "Signed up successfully!<br>Redirecting in 3 seconds...";
        header("refresh: 3; url=index.php?success=true");
      }
    ?>
    <?php
    if(!isset($_SESSION['username'])) {
      echo '
          <div class="signup-modal">
            <p style="color: #f7b801; font-size: 30px; text-align: center;">Signup Form</p><br>
            <form action="includes/signup.inc.php" method="post">
              <input type="text" name="name" placeholder="Name" value="';
              echo $name;
              echo '">
              <input type="text" name="email" placeholder="E-mail" value="';
              echo $email; echo '">
              <input type="text" name="username" placeholder="Username" value="';
              echo $username;
              echo '">
              <input type="password" name="pwd" placeholder="Password">
              <input type="password" name="pwd-repeat" placeholder="Re-enter password">
              <button type="submit" name="signup-submit" class="signupBtn">Signup</button>
            </form>
            <p class="signuperror">';
            echo $signuperror;
            echo '</p>
            <p class="signupsuccess">';
            echo $signupsuccess;
            echo '</p>
          </div>';
    }
    elseif(isset($_SESSION['username'])){
      echo '<p class="signupsuccess" style="text-align: center";>You are already logged in. No need to signup once again! Redirecting in 3 seconds ...</p>';
      header("refresh: 3; url= index.php");
      exit();
    }
?>
  </main>

<?php
  require "footer.php"
?>
