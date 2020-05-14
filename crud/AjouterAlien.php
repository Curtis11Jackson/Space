<?php
require '../identifier.php';
require '../chargeauto.php';
require '../vue/header.php';
?>

<div class="banner">
  <h1 style="margin-bottom:4vh">Add aliens</h1>
</div>

<form class="w-75" method="POST" action="ScriptAjoutAlien.php" style="margin:auto;">
		 <div class="form-group">
    <label for="nom" style="color:white; background-color:black;">Alien's Name</label>
    <input type="text" id="nom" name="nom" class="form-control" placeholder="Give a name to your alien">
  </div>
  <div class="form-group">
    <label for="race" style="color:white; background-color:black;">Alien's Species</label>
    <input type="text" id="class" name="race" class="form-control" placeholder="What species is this Alien ?">
  </div>
  <div class="form-group">
    <label for="race" style="color:white; background-color:black;">Alien's Caracteristics</label>
    <input type="text" id="class" name="carac" class="form-control" placeholder="What are the Alien's caracteristics ?">
  </div>

  <div style="width:12%;margin:auto;">
  <button type="submit" class="btn btn-primary" style="margin:auto;">Add this Alien</button>
  </div>
  </form>


<?php
require '../vue/footer.php';
?>


