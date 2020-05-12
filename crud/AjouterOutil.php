<?php
require '../identifier.php';
require '../chargeauto.php';
require '../vue/header.php';
?>

<?php
$monMineralRepo = new MineralRepository($db);

$tabloMineral = $monMineralRepo->getListName();
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
  <label for="inputState">Looks for this mineral</label>
      <select id="inputState" class="form-control">

      <?php foreach ($tabloMineral as $Mineral) {
    echo "
        <option>" . $Mineral['nom_min'] . "</option>";
      }
        ?>
      </select>
  </div>
</form>


<?php
require '../vue/footer.php';
?>