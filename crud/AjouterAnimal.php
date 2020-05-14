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
	<h1 style="margin-bottom:4vh">Add animals</h1>
	</div>

<!-- <form method=POST action=ScriptAjoutAnimal.php> -->
<form class="w-75" method="POST" action="ScriptAjoutAnimal.php" style="margin:auto;">
  <div class="col">
    <div class="col">
      <input type="text" id="name" name="name" class="form-control" placeholder="Animal name">
    </div></br>
    <div class="col">
      <input type="text" id="alim" name="alim" class="form-control" placeholder="Alimentation">
    </div></br>
    <div class="col">
      <input type="text" id="carac" name="carac" class="form-control" placeholder="Caracteristics">
    </div></br>
    <div class="col">
      <input type="text" id="race" name="race" class="form-control" placeholder="Race">
    </div></br>
    <div class="col">
      <input type="text" id="force" name="force" class="form-control" placeholder="Force">
    </div></br>
    <div class="form-group">
        <label for="inputState">Place where the animal is</label>
        <select id="inputState" class="form-control" name="lieu">
        <?php $i=1; 
              foreach ($tabloLieu as $Lieu) {
                  echo "<option value=$i>" . $Lieu['nom_lieu'] . "</option>";
                  $i++;
              }
          ?>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Add an animal</button>
  </div>  
</form>


<?php
require '../vue/footer.php';
?>
