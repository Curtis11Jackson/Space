<?php
require '../identifier.php';
require '../chargeauto.php';
require '../vue/header.php';
?>

<div class="banner">
	<h1 style="margin-bottom:4vh"> Update Animals</h1>
	</div>

<?php
$nom = $_GET['nom'];
$identif = $_GET['id'];
$alim = $_GET['alim'];
$carac = $_GET['carac'];
$race = $_GET['race'];
$force = $_GET['force'];
$lieu = $_GET['lieu'];

?>
  
<form method=POST action=ScriptUpdateAnimal.php>
  <div class="row">
    <div class="col">
      <input type="hidden" id="identif" name="identif" value="<?php echo $identif ?>" class="form-control" placeholder="Identification number">
    </div>
    <div class="col">
      <input type="text" id="name" name="nom" value="<?php echo $nom ?>" class="form-control" placeholder="Animal name">
    </div>
    <div class="col">
      <input type="text" id="alim"  name="alim" value="<?php echo $alim ?>" class="form-control" placeholder="Alimentation">
    </div>
    <div class="col">
      <input type="text" id="carac" name="carac" value="<?php echo $carac ?>" class="form-control" placeholder="Caracteristics">
    </div>
    <div class="col">
      <input type="text" id="race" name="race" value="<?php echo $race ?>" class="form-control" placeholder="Race">
    </div>
    <div class="col">
      <input type="text" id="force" name="force" value="<?php echo $force ?>" class="form-control" placeholder="Force">
    </div>
    <div class="col">
      <input type="text" id="lieu" name="lieu" value="<?php echo $lieu ?>" class="form-control" placeholder="Lieu">
    </div>
    <button type="submit" class="btn btn-primary">Update an animal</button>
  </div>
</form>

<?php
require '../vue/footer.php';
?>
