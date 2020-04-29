<?php
require '../identifier.php';
require '../chargeauto.php';
require '../vue/header.php';
?>

<div class="banner">
  <h1 style="margin-bottom:4vh">Add aliens</h1>
</div>

<form method=POST action=ScriptAjoutAlien.php>
  <div class="row">
    <div class="col">
      <input type="text" id="nom" name="nom" class="form-control" placeholder="Alien name">
    </div>
    <div class="col">
      <input type="text" id="race" name="race" class="form-control" placeholder="Race">
    </div>
    <div class="col">
      <input type="text" id="carac" name="carac" class="form-control" placeholder="Caracteristics">
    </div>
    <button type="submit" class="btn btn-primary">Add an alien</button>
  </div>
</form>


<?php
require '../vue/footer.php';
?>
