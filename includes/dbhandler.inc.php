<?php
$con = mysqli_connect("localhost","root","","rakshith");
$con2 = mysqli_connect("localhost","root","","rakshith");
if (!$con) {
  die("Connectio failed: ".mysqli_connect_error());
}
if (!$con2) {
  die("Connectio failed: ".mysqli_connect_error());
}
