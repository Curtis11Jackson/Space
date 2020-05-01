<?php
require '../identifier.php';
require '../chargeauto.php';
require '../vue/header.php';
?>


<div class="banner">
	<h1 style="margin-bottom:4vh">Add minerals</h1>
	</div>

<form method=POST action=ScriptAjoutMineral.php>
  <div class="row">
    <div class="col">
      <input type="text" id="name" class="form-control" placeholder="Tool's name">
    </div>
    <div class="col">
      <input type="text" id="classif" class="form-control" placeholder="Classification">
    </div>
    <button type="submit" class="btn btn-primary">Add a mineral</button>
  </div>
</form>


<?php
require '../vue/footer.php';
?>
