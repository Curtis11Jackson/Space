<?php
require '../vue/header.php';
?>

<div class="banner">
	<h1 style="margin-bottom:4vh">Update Vegetables</h1>
	</div>


  <?php
$nom = $_GET['nom'];
$identif = $_GET['id'];
$taille = $_GET['taille'];
$classif = $_GET['class'];
$lieu = $_GET['lieu'];
?>

  
<form method=POST action=ScriptUpdateVegetal.php>
  <div class="row">
    <div class="col">
      <input type="hidden" id="identif" name="identif" value="<?php echo $identif ?>" class="form-control" placeholder="Identification number">
    </div>
    <div class="col">
      <input type="text" id="name" name="nom" value="<?php echo $nom ?>" class="form-control" placeholder="Vegetal name">
    </div>
    <div class="col">
      <input type="text" id="taille"  name="taille" value="<?php echo $taille ?>" class="form-control" placeholder="Taille">
    </div>
    <div class="col">
      <input type="text" id="classif" name="classif" value="<?php echo $classif ?>" class="form-control" placeholder="Classification">
    </div>
    <div class="col">
      <input type="text" id="lieu" name="lieu" value="<?php echo $lieu ?>" class="form-control" placeholder="Lieu">
    </div>
    <button type="submit" class="btn btn-primary">Add a vegetable</button>
  </div>
</form>

<?php
require '../vue/footer.php';
?>
