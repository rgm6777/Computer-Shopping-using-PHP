<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <script src="main.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
</head>
<body>
    <div class="topNav">
        <div class="topNavLeft">
            <img src="img/logo.png" alt="Logo" class="topNavImg">
            <a href="index.php">Home</a>
            <a href="parts.php">Computer Hardware</a>
            <a href="about.php">About</a>
            <a href="contactus.php">Contact Us</a>
        </div>
        <div class="topNavRight">
          <?php
          if (isset($_SESSION['username'])) {
            echo '<form action="includes/logout.inc.php" method="post" style="position: relative; left: 200px;">
              <a href="myaccount.php"><button type="button" name="myacc-submit" class="loginBtn">My Account <i class="fas fa-user-alt"></i></button></a>
              <button type="submit" name="logout-submit" class="loginBtn">Logout <i class="fas fa-sign-in-alt"></i></button>
            </form>';
          }
          else {
            echo '
            <form action="includes/login.inc.php" method="post">
              <input type="text" name="username" placeholder="Username">
              <input type="password" name="pwd" placeholder="Password">
              <button type="submit" name="login-submit" class="loginBtn">Login <i class="fas fa-sign-in-alt"></i> / Register <i class="fas fa-pen"></i></button>
            </form>';
          }
          ?>
        </div>
    </div>
    <div class="container">
    </div>
</body>
</html>
