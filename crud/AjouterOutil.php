<?php
require '../identifier.php';
require '../chargeauto.php';
require '../vue/header.php';
?>


<div class="banner">
	<h1 style="margin-bottom:4vh">Add tools</h1>
	</div>

<form method=POST action=ScripAjoutOutil.php>
  <div class="row">
    <div class="col">
      <input type="text" id="name" class="form-control" placeholder="Tool name">
    </div>
    <div class="col">
      <input type="text" id="role" class="form-control" placeholder="Role">
    </div>
   <button type="submit" class="btn btn-primary">Add an animal</button>
  </div>
</form>


<?php
require '../vue/footer.php';
?>
