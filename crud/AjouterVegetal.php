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
	<h1 style="margin-bottom:4vh">Add vegetables</h1>
	</div>

<form class="w-75" method="POST" action="ScriptAjoutVegetal.php" style="margin:auto;">
  <div class="col">
    <div class="col">
      <input type="text" id="name" name="nom" class="form-control" placeholder="Vegetal name">
    </div></br>
    <div class="col">
      <input type="text" id="classif" name="classif" class="form-control" placeholder="Classification">
    </div></br>
    <div class="col">
      <input type="text" id="taille" name="taille" class="form-control" placeholder="Taille">
    </div></br>
    <div class="form-group">
        <label for="inputState">Place where the vegetal is</label>
        <select id="inputState" class="form-control" name="lieu">
        <?php $i=1; 
              foreach ($tabloLieu as $Lieu) {
                  echo "<option value=$i>" . $Lieu['nom_lieu'] . "</option>";
                  $i++;
              }
          ?>
        </select>
    </div>
    <!-- <div class="col">
      <input type="text" id="lieu" name="lieu" class="form-control" placeholder="Lieu">
    </div> -->
    <button type="submit" class="btn btn-primary">Add a vegetable</button>
  </div>
</form>


<?php
require '../vue/footer.php';
?>
