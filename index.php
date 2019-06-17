<?php
  require 'header.php';
?>
<main>
  <div class="container">
    <h1 style="text-align: center; margin: 20px; color: #f2ae02;">COMPUTER PARTS MANAGEMENT SYSTEM</h1>
    <div class="slideshow-container">
       <div class="mySlides fade">
         <img src="img/ss1.jpg" style="width: 100%; height: 100%;">
         <div class="text">Intel Processors</div>
       </div>

       <div class="mySlides fade">
         <img src="img/ss2.png" style="width:100%; height: 100%;">
         <div class="text">AMD Ryzen Processor</div>
       </div>

       <div class="mySlides fade">
         <img src="img/ss3.jpg" style="width:100%; height: 100%;">
         <div class="text">ASUS ROG Maximus Motherboard</div>
       </div>

       <div class="mySlides fade">
         <img src="img/ss4.jpg" style="width:100%; height: 100%;">
         <div class="text">G.Skill Trident Z RGB</div>
       </div>

       <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
       <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>
    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
      <span class="dot" onclick="currentSlide(4)"></span>
    </div>
  </div>
  <div class="container" style="width: 60%; font-size: 18px">
    <h1 >Welcome to Part Picker</h1>
    <p>Part Picker website has been the leading online shopping centre for computer pheripherals.</p>
    <p>We have a large collection of computer parts such as processor, motherboard, graphics cards, monitors, accessories, and many more!</p>
    <p>To view the collection, click on the Computer Hardware tab in the header.</p>
    <p>To start your own build, <a href="selectparts.php" style="text-decoration: none; color: #f2ae02;">click here</a></p>
  </div>
  <?php
    if(!empty($_GET['error'])) {
      echo '<script language="javascript">';
      echo 'alert("'.$_GET['error'].'")';
      echo '</script>';
    }
  ?>
</main>

<script type="text/javascript">
  var slideIndex = 1;
  showSlides(slideIndex);
  function plusSlides(n) {
  showSlides(slideIndex += n);
  }
  function currentSlide(n) {
  showSlides(slideIndex = n);
  }

  function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  }
</script>

<?php
  require "footer.php"
?>
