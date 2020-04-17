<?php
require 'vue/header.php';
?>

<div class="banner">
	<h1 style="margin-bottom:4vh">Animals</h1>
	</div>

<form method=POST action=ajouteranimal.php>
  <div class="row">
    <div class="col">
      <input type="text" id="name" class="form-control" placeholder="Animal name">
    </div>
    <div class="col">
      <input type="text" id="alim" class="form-control" placeholder="Alimentation">
    </div>
    <div class="col">
      <input type="text" id="carac" class="form-control" placeholder="Caracteristics">
    </div>
    <div class="col">
      <input type="text" id="race" class="form-control" placeholder="Race">
    </div>
    <div class="col">
      <input type="text" id="force" class="form-control" placeholder="Force">
    </div>
    <button type="submit" class="btn btn-primary">Add an animal</button>
  </div>
</form>

<?php
require 'vue/footer.php';
?>
