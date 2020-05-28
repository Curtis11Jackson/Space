<?php
require '../identifier.php';
require '../chargeauto.php';
require '../vue/header.php';
?>

<div class="banner">
  <h1 style="margin-bottom:4vh">Add aliens</h1>
</div>

<article style="width:25%; height:20vh; margin:auto; border:2px white solid; text-align:center; background-image:url('../images/vemon.gif'); background-position:cover;">
  <!-- <video src="videos/Launch.mp4" style="width:540px; height:360px; margin-bottom: 10px;  " controls autoplay> -->
</article>

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


