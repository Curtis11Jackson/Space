<?php
require '../identifier.php';
require '../chargeauto.php';
require '../vue/header.php';
?>

<div class="banner">
  <h1 style="margin-bottom:4vh">Update a Place</h1>
</div>

<?php
$id = $_GET['id'];
$nom = $_GET['nom'];
$topo = $_GET['topo'];
$gps = $_GET['gps'];



?>


<form method=POST action=ScriptUpdateLieu.php>
  <div class="row">
  <div class="col-1">
      <input type="hidden" id="id" name="id" class="form-control"  value="<?php echo $id ?>" >
    </div>
    <div class="col-3">
      <input type="text" id="nom" name="nom" class="form-control"  value="<?php echo $nom ?>" required>
    </div>
    <div class="col-3">
      <input type="text" id="topo" name="topo" class="form-control"  value="<?php echo $topo ?>" required>
    </div>
    <div class="col-3">
      <input type="text" id="gps" name="gps" class="form-control" value="<?php echo $gps ?>" required>
    </div>
    <button type="submit" class="btn btn-primary">Save Changes</button>
  </div>
</form>

<?php

require '../vue/footer.php';

?>