<?php
require '../vue/header.php';
?>


<div class="banner">
	<h1 style="margin-bottom:4vh">Add vegetables</h1>
	</div>

<form method=POST action=scriptvegetal.php>
  <div class="row">
    <div class="col">
      <input type="text" id="name" class="form-control" placeholder="Vegetal name">
    </div>
    <div class="col">
      <input type="text" id="classif" class="form-control" placeholder="Classification">
    </div>
    <div class="col">
      <input type="text" id="taille" class="form-control" placeholder="taille">
    </div>
    <button type="submit" class="btn btn-primary">Add a vegetable</button>
  </div>
</form>


<?php
require '../vue/footer.php';
?>
