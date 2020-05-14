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
    <label for="nom" style="color:white; background-color:black;">Mineral's Name</label>
    <input type="text" id="nom" name="nom" class="form-control" placeholder="Mineral's name">
  </div>
  <div class="form-group">
    <label for="class" style="color:white; background-color:black;">Mineral's Class</label>
    <input type="text" id="class" name="class" class="form-control" placeholder="Mineral's Class">
  </div>
  <div class="form-group">
  <label for="inputState" style="color:white; background-color:black;">Place where the mineral is</label>
          <select id="inputState" class="form-control" name="lieu">
          <?php $i=1; 
                foreach ($tabloLieu as $Lieu) {
                    echo "<option value=$i>" . $Lieu['nom_lieu'] . "</option>";
                    $i++;
                }
            ?>
          </select>
  </div>
  <div style="width:12%; margin:auto;">
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
 
      <input type="text" id="lieu" name="lieu" class="form-control" placeholder="Lieu">

</form> -->




<?php
require '../vue/footer.php';
?>
