<?php
// require '../identifier.php';
// require '../chargeauto.php';
require '../vue/header.php';
?>

<div class="banner">
	<h1 style="margin-bottom:4vh">Add vegetables</h1>
	</div>

<form method=POST action=ScriptAjoutVegetal.php>
  <div class="row">
    <div class="col">
      <input type="text" id="name" name="nom" class="form-control" placeholder="Vegetal name">
    </div>
    <div class="col">
      <input type="text" id="classif" name="classif" class="form-control" placeholder="Classification">
    </div>
    <div class="col">
      <input type="text" id="taille" name="taille" class="form-control" placeholder="Taille">
    </div>
    <div class="col">
      <input type="text" id="lieu" name="lieu" class="form-control" placeholder="Lieu">
    </div>
    <button type="submit" class="btn btn-primary">Add a vegetable</button>
  </div>
</form>


<?php
require '../vue/footer.php';
?>
