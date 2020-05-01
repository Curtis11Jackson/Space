<?php

require '../vue/header.php';
?>


<div class="banner">
	<h1 style="margin-bottom:4vh">Add animals</h1>
	</div>

<form method=POST action=ScriptAjoutAnimal.php>
  <div class="row">
    <div class="col">
      <input type="text" id="name" name="name" class="form-control" placeholder="Animal name">
    </div>
    <div class="col">
      <input type="text" id="alim" name="alim" class="form-control" placeholder="Alimentation">
    </div>
    <div class="col">
      <input type="text" id="carac" name="carac" class="form-control" placeholder="Caracteristics">
    </div>
    <div class="col">
      <input type="text" id="race" name="race" class="form-control" placeholder="Race">
    </div>
    <div class="col">
      <input type="text" id="force" name="force" class="form-control" placeholder="Force">
    </div>
    <div class="col">
      <input type="text" id="lieu" name="lieu" class="form-control" placeholder="Lieu">
    </div>
    <button type="submit" class="btn btn-primary">Add an animal</button>
  </div>
</form>


<?php
require '../vue/footer.php';
?>
