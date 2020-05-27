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
$img = $_GET['img'];
$topo = $_GET['topo'];
$gps = $_GET['gps'];



?>


<form class="w-75" method="POST" action="ScriptAjoutLieu.php" style="margin:auto;">
		 <div class="form-group">
     <input type="hidden" id="id" name="id" class="form-control"  value="<?php echo $id ?>" >
  </div>
  <div class="form-group">
    <label for="nom">Place Name</label>
    <input type="text" id="nom" name="nom" class="form-control"  value="<?php echo $nom ?>" required>
  </div>
  <div class="form-group">
    <label for="img">Image of the Place</label>
    <input type="text" class="form-control" id="img" class="img" name="img" >
  </div>
  <div class="form-group">
    <label for="prenom">Topography</label>
    <input type="text" id="topo" name="topo" class="form-control"  value="<?php echo $topo ?>" required>
  </div>
  <div class="form-group">
    <label for="race">GPS</label>
    <input type="text" id="gps" name="gps" class="form-control" value="<?php echo $gps ?>" required>
  </div>
  <div style="width:12%; margin:auto;">
  <button type="submit" class="btn btn-primary" style="margin:auto;">Save Changes</button>
  </div>
</form>



<?php

require '../vue/footer.php';

?>