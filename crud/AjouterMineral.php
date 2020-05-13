<?php
require '../identifier.php';
require '../chargeauto.php';
require '../vue/header.php';
?>
<?php
$monLieuRepo = new LieuRepository($db);

$tabloLieu = $monLieuRepo->getListName();
?>

<div class="banner">
	<h1 style="margin-bottom:4vh">Add minerals</h1>
  </div>
  
  <form class="w-75" method="POST" action="ScriptAjoutMineral.php" style="margin:auto;">
		 <div class="form-group">
    <label for="nom">Mineral's Name</label>
    <input type="text" id="nom" name="nom" class="form-control" placeholder="Mineral's name">
  </div>
  <div class="form-group">
    <label for="img">Use of tool</label>
    <input type="text" id="class" name="class" class="form-control" placeholder="Mineral's Class">
  </div>
  <div class="form-group">
  <label for="inputState">Place where the mineral is</label>
      <select id="inputState" class="form-control">

      <?php foreach ($tabloLieu as $Lieu) {
    echo "
        <option>" . $Lieu['nom_lieu'] . "</option>";
      }
        ?>
      </select>
  </div>
  <div style="width:12%; border:1px solid black; margin:auto;">
  <button type="submit" class="btn btn-primary" style="margin:auto;">Add this Mineral</button>
  </div>
  </form>

<!-- <form method=POST action=ScriptAjoutMineral.php>
  <div class="row">
    <div class="col">
      <input type="text" id="name" name="nom" class="form-control" placeholder="Mineral's name">
    </div>
    <div class="col">
      <input type="text" id="class" name="class" class="form-control" placeholder="Mineral's Class">
    </div>
    <div class="col">
      <input type="text" id="lieu" name="lieu" class="form-control" placeholder="Lieu">
    </div>
    <button type="submit" class="btn btn-primary">Add a mineral</button>
  </div>
</form> -->




<?php
require '../vue/footer.php';
?>
