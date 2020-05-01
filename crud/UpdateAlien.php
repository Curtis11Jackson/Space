<?php
require '../identifier.php';
require '../chargeauto.php';
require '../vue/header.php';
?>

<div class="banner">
  <h1 style="margin-bottom:4vh">Update your Alien</h1>
</div>

<?php
$id = $_GET['id'];
$nom = $_GET['nom'];
$race = $_GET['race'];
$carac = $_GET['carac'];



?>


<form method=POST action=ScriptUpdateAlien.php>
  <div class="row">
  <div class="col-1">
      <input type="hidden" id="id" name="id" class="form-control"  value="<?php echo $id ?>" >
    </div>
    <div class="col-3">
      <input type="text" id="nom" name="nom" class="form-control"  value="<?php echo $nom ?>" required>
    </div>
    <div class="col-3">
      <input type="text" id="race" name="race" class="form-control" value="<?php echo $race ?>" required>
    </div>
    <div class="col-3">
      <input type="text" id="carac" name="carac" class="form-control" value="<?php echo $carac ?>" required>
    </div>
    <button type="submit" class="btn btn-primary">Save Changes</button>
  </div>
</form>

<?php

require '../vue/footer.php';

?>
