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

<form class="w-75" method="POST" action="ScriptAjoutOutil.php" style="margin-left:auto; margin-right:auto; display: flex; flex-direction: column;">
		 <div class="form-group" style='width: 20vw; margin-left:auto; margin-right:auto;'>
    <label for="nom" style='color:white;font-weight: bold;'>Tool Name</label>
    <input type="text" id="nom" name="nom" class="form-control" placeholder="Tool name">
  </div>
  <div class="form-group" style='width: 20vw;margin-left:auto; margin-right:auto;'>
    <label for="img" style='color:white;font-weight: bold;'>Use of role</label>
    <input type="text" id="role" name="role" class="form-control" placeholder="Usage">
  </div>
  <div class="form-group" style='width: 20vw;margin-left:auto; margin-right:auto; '>
  <label for="inputState" style='color:white;font-weight: bold;'>Looks for this mineral</label>
      <select id="inputState" class="form-control">

      <?php foreach ($tabloMineral as $Mineral) {
    echo "
        <option>" . $Mineral['nom_min'] . "</option>";
      }
        ?>
      </select>
  </div>
  <div style="width:12%;  margin:auto; margin-top: 5vw;">
  <button type="submit" class="btn btn-primary" style="margin:auto;">Add this tool</button>
  </div>
</form>


<?php
require '../vue/footer.php';
?>
