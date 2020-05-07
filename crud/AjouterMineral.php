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
      <input type="text" id="name" name="nom" class="form-control" placeholder="Mineral's name">
    </div>
    <div class="col">
      <input type="text" id="class" name="class" class="form-control" placeholder="Mineral's Class">
    </div>
    <button type="submit" class="btn btn-primary">Add a mineral</button>
  </div>
</form>


<?php
require '../vue/footer.php';
?>
