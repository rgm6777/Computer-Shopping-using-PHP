<?php
  require 'header.php';
  if(!($_SESSION['username'] === 'admin')) {
    header("Location: index.php?error=unauthorised");
    exit();
  }
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<main>
  <div class="parts-container">
      <form id="form" class="addform" action="includes/addparts.inc.php" method="POST">
        <div class="partsRadio">
          <h2>Choose a category to add an item to: </h2>
           <input id="1" type="radio" name="parts" class="parts" value="cpu" onclick="showDiv(1)" checked>CPU
           <input id="2" type="radio" name="parts" class="parts" value="motherboard" onclick="showDiv(2)">Motherboard
           <input id="3" type="radio" name="parts" class="parts" value="ram" onclick="showDiv(3)">RAM
           <input id="4" type="radio" name="parts" class="parts" value="graphics" onclick="showDiv(4)">Graphics Cards
           <input id="5" type="radio" name="parts" class="parts" value="accesories" onclick="showDiv(5)">Accesories
           <input id="6" type="radio" name="parts" class="parts" value="monitor" onclick="showDiv(6)">Monitor
           <input id="7" type="radio" name="parts" class="parts" value="storage" onclick="showDiv(7)">Storage
           <input id="8" type="radio" name="parts" class="parts" value="cabinet" onclick="showDiv(8)">Cabinet
           <input id="9" type="radio" name="parts" class="parts" value="smps" onclick="showDiv(9)">Power Supply
        </div>
        <div class="add-parts">
          <input type="number" name="partid" id="partid" placeholder="Part ID">
          <input type="text" name="name" id="name" placeholder="Name">
          <input type="text" name="brand" id="brand" placeholder="Brand">
          <input type="text" name="price" id="price" placeholder="Price">
          <input type="text" name="cores" id="cores" placeholder="Cores">
          <input type="text" name="frequency" id="frequency" placeholder="Frequency">
          <input type="text" name="socket" id="socket" placeholder="Socket">
          <input type="text" name="type" id="type" placeholder="Type">
          <input type="text" name="capacity" id="capacity" placeholder="Capacity">
          <input type="text" name="speed" id="speed" placeholder="Speed">
          <input type="text" name="size" id="size" placeholder="Size">
          <input type="text" name="resolution" id="resolution" placeholder="Resolution">
          <input type="text" name="panel" id="panel" placeholder="Panel">
          <input type="text" name="slots" id="slots" placeholder="Slots">
          <input type="text" name="wattage" id="wattage" placeholder="Wattage">
        </div>
        <button type="submit" class="partSubmit" name="partSubmit">Add</button>
      </form>

  </div>
</main>

<script type="text/javascript">
  window.onload = function() {
    showDiv(1);
  };
  function showDiv(id) {
    if (id == '1') {
      document.getElementById('partid').disabled = false;
      document.getElementById('name').disabled = false;
      document.getElementById('brand').disabled = false;
      document.getElementById('price').disabled = false;
      document.getElementById('cores').disabled = false;
      document.getElementById('frequency').disabled = false;
      document.getElementById('socket').disabled = false;
      document.getElementById('type').disabled = true;
      document.getElementById('capacity').disabled = true;
      document.getElementById('speed').disabled = true;
      document.getElementById('size').disabled = true;
      document.getElementById('resolution').disabled = true;
      document.getElementById('panel').disabled = true;
      document.getElementById('slots').disabled = true;
      document.getElementById('wattage').disabled = true;
    }
    if (id == '2') {
      document.getElementById('partid').disabled = false;
      document.getElementById('name').disabled = false;
      document.getElementById('brand').disabled = false;
      document.getElementById('price').disabled = false;
      document.getElementById('cores').disabled = true;
      document.getElementById('frequency').disabled = true;
      document.getElementById('socket').disabled = false;
      document.getElementById('type').disabled = false;
      document.getElementById('capacity').disabled = true;
      document.getElementById('speed').disabled = true;
      document.getElementById('size').disabled = true;
      document.getElementById('resolution').disabled = true;
      document.getElementById('panel').disabled = true;
      document.getElementById('slots').disabled = true;
      document.getElementById('wattage').disabled = true;
    }
    if (id == '3') {
      document.getElementById('partid').disabled = false;
      document.getElementById('name').disabled = false;
      document.getElementById('brand').disabled = false;
      document.getElementById('price').disabled = false;
      document.getElementById('cores').disabled = true;
      document.getElementById('frequency').disabled = true;
      document.getElementById('socket').disabled = true;
      document.getElementById('type').disabled = false;
      document.getElementById('capacity').disabled = false;
      document.getElementById('speed').disabled = false;
      document.getElementById('size').disabled = true;
      document.getElementById('resolution').disabled = true;
      document.getElementById('panel').disabled = true;
      document.getElementById('slots').disabled = true;
      document.getElementById('wattage').disabled = true;
    }
    if (id == '4') {
      document.getElementById('partid').disabled = false;
      document.getElementById('name').disabled = false;
      document.getElementById('brand').disabled = false;
      document.getElementById('price').disabled = false;
      document.getElementById('cores').disabled = true;
      document.getElementById('frequency').disabled = false;
      document.getElementById('socket').disabled = true;
      document.getElementById('type').disabled = true;
      document.getElementById('capacity').disabled = false;
      document.getElementById('speed').disabled = true;
      document.getElementById('size').disabled = true;
      document.getElementById('resolution').disabled = true;
      document.getElementById('panel').disabled = true;
      document.getElementById('slots').disabled = true;
      document.getElementById('wattage').disabled = true;
    }
    if (id == '5') {
      document.getElementById('partid').disabled = false;
      document.getElementById('name').disabled = false;
      document.getElementById('brand').disabled = false;
      document.getElementById('price').disabled = false;
      document.getElementById('cores').disabled = true;
      document.getElementById('frequency').disabled = true;
      document.getElementById('socket').disabled = true;
      document.getElementById('type').disabled = true;
      document.getElementById('capacity').disabled = true;
      document.getElementById('speed').disabled = true;
      document.getElementById('size').disabled = true;
      document.getElementById('resolution').disabled = true;
      document.getElementById('panel').disabled = true;
      document.getElementById('slots').disabled = true;
      document.getElementById('wattage').disabled = true;
    }
    if (id == '6') {
      document.getElementById('partid').disabled = false;
      document.getElementById('name').disabled = false;
      document.getElementById('brand').disabled = false;
      document.getElementById('price').disabled = false;
      document.getElementById('cores').disabled = true;
      document.getElementById('frequency').disabled = true;
      document.getElementById('socket').disabled = true;
      document.getElementById('type').disabled = true;
      document.getElementById('capacity').disabled = true;
      document.getElementById('speed').disabled = true;
      document.getElementById('size').disabled = false;
      document.getElementById('resolution').disabled = false;
      document.getElementById('panel').disabled = false;
      document.getElementById('slots').disabled = true;
      document.getElementById('wattage').disabled = true;
    }
    if (id == '7') {
      document.getElementById('partid').disabled = false;
      document.getElementById('name').disabled = false;
      document.getElementById('brand').disabled = false;
      document.getElementById('price').disabled = false;
      document.getElementById('cores').disabled = true;
      document.getElementById('frequency').disabled = true;
      document.getElementById('socket').disabled = true;
      document.getElementById('type').disabled = false;
      document.getElementById('capacity').disabled = false;
      document.getElementById('speed').disabled = false;
      document.getElementById('size').disabled = true;
      document.getElementById('resolution').disabled = true;
      document.getElementById('panel').disabled = true;
      document.getElementById('slots').disabled = true;
      document.getElementById('wattage').disabled = true;
    }
    if (id == '8') {
      document.getElementById('partid').disabled = false;
      document.getElementById('name').disabled = false;
      document.getElementById('brand').disabled = false;
      document.getElementById('price').disabled = false;
      document.getElementById('cores').disabled = true;
      document.getElementById('frequency').disabled = true;
      document.getElementById('socket').disabled = true;
      document.getElementById('type').disabled = false;
      document.getElementById('capacity').disabled = true;
      document.getElementById('speed').disabled = true;
      document.getElementById('size').disabled = true;
      document.getElementById('resolution').disabled = true;
      document.getElementById('panel').disabled = true;
      document.getElementById('slots').disabled = false;
      document.getElementById('wattage').disabled = true;
    }
    if (id == '9') {
      document.getElementById('partid').disabled = false;
      document.getElementById('name').disabled = false;
      document.getElementById('brand').disabled = false;
      document.getElementById('price').disabled = false;
      document.getElementById('cores').disabled = true;
      document.getElementById('frequency').disabled = true;
      document.getElementById('socket').disabled = true;
      document.getElementById('type').disabled = true;
      document.getElementById('capacity').disabled = true;
      document.getElementById('speed').disabled = true;
      document.getElementById('size').disabled = true;
      document.getElementById('resolution').disabled = true;
      document.getElementById('panel').disabled = true;
      document.getElementById('slots').disabled = true;
      document.getElementById('wattage').disabled = false;
    }

  }
</script>
