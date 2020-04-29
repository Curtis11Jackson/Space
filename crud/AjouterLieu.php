<?php
require '../identifier.php';
require '../chargeauto.php';
require '../vue/header.php';
?>


<div class="banner">
	<h1 style="margin-bottom:4vh">Add places</h1>
	</div>

<form method=POST action=ScriptAjoutLieu.php>
  <div class="row">
    <div class="col">
      <input type="text" id="name" class="form-control" placeholder="Place name">
    </div>
    <div class="col">
      <input type="text" id="topo" class="form-control" placeholder="Topography">
    </div>
    <div class="col">
      <input type="text" id="GPS" class="form-control" placeholder="GPS">
    </div>
    <button type="submit" class="btn btn-primary">Add a place</button>
  </div>
</form>


<?php
require '../vue/footer.php';
?>
