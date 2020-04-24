<?php
require '../vue/header.php';
?>

<div class="banner">
	<h1 style="margin-bottom:4vh">Update Vegetals</h1>
	</div>

<form>
  <div class="row">
    <div class="col">
      <input type="text" id="name" class="form-control" placeholder="Vegetal name">
    </div>
    <div class="col">
      <input type="text" id="alim" class="form-control" placeholder="Classification">
    </div>
    <div class="col">
      <input type="text" id="carac" class="form-control" placeholder="taille">
    </div>
    <button type="submit" class="btn btn-primary">Add a vegetal</button>
  </div>
</form>

<?php
require '../vue/footer.php';
?>
