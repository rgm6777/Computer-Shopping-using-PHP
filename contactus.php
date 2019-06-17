<?php
  require "header.php";
  if(isset($_SESSION['name'])){
    $name = $_SESSION['name'];
  }
  else {
    $name = "";
  }
  if(isset($_SESSION['email'])){
    $email = $_SESSION['email'];
  }
  else {
    $email = "";
  }
?>

<main>
  <div class="signup-modal">
    <h2 style="color: #f2ae02; text-align: center; overflow: hidden;">Feedback/Customer Complaint</h2>
    <form class="" action="includes/responserecorded.inc.php" method="POST">
      <input type="text" name="name" placeholder="Enter name" value="<?php echo $name; ?>">
      <input type="text" name="email" placeholder="Enter email" value="<?php echo $email; ?>">
      <input type="text" name="phone" placeholder="Enter phone number">
      <input type="text" name="response" placeholder="Description">
      <button type="submit" name="response-submit" class="signupBtn">Submit</button>
      <?php
        if (isset($_GET['response'])) {
          $response = $_GET['response'];
          if ($response == 'emptyfields') {
            echo '<p class="responseerror">Enter both name and description field</p>';
          }
          elseif ($response == 'invalidemail') {
            echo '<p class="responseerror">Enter correct email</p>';
          }
          elseif ($response == 'invalidphone') {
            echo '<p class="responseerror">Enter correct phone number</p>';
          }
          else {
            echo '<p class="responsesuccess">Response recorded<br>Redirecting to home page in 3 seconds...</p>';
            header("refresh: 3; url=index.php");
          }
        }

      ?>
    </form>
  </div>
</main>
