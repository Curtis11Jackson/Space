<?php
require '../identifier.php';
require '../chargeauto.php';
require '../vue/header.php';
?>

<?php
$monOutRepo = new OutilRepository($db);

$tableauOutil = $monOutRepo->getListName();
?>

<div class="banner">
	<h1 style="margin-bottom:4vh">Add tools</h1>
	</div>

<form class="w-75" method="POST" action="ScriptAjoutOutil.php" style="margin:auto;">
		 <div class="form-group">
    <label for="nom">Tool Name</label>
    <input type="text" id="nom" name="nom" class="form-control" placeholder="Tool name">
  </div>
  <div class="form-group">
    <label for="img">Use of tool</label>
    <input type="text" id="role" name="role" class="form-control" placeholder="Usage">
  </div>
  <div class="form-group">
  <label for="inputState">State</label>
      <select id="inputState" class="form-control">

      <?php foreach ($tableauOutil as $Outil) {
    echo "
        <option selected>" . $Outil['nom_outil'] . "</option>
      </select>
  </div>
</form>


<?php
require '../vue/footer.php';
?>
