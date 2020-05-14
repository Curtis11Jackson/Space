<?php
require '../identifier.php';
require '../chargeauto.php';
require '../vue/header.php';
?>


<div class="banner">
	<h1 style="margin-bottom:4vh">Add places</h1>
  </div>

  <form class="w-75" method="POST" action="ScriptAjoutLieu.php" style="margin:auto;">
		 <div class="form-group">
    <label for="nom" style="color:white; background-color:black;">Place Name</label>
    <input type="text" id="nom" name="nom" class="form-control" placeholder="Place name">
  </div>
  <div class="form-group">
    <label for="img" style="color:white; background-color:black;">Image of the Place</label>
    <input type="text" class="form-control" id="img" class="img" name="img" placeholder="url of the image" required>
  </div>
  <div class="form-group">
    <label for="prenom" style="color:white; background-color:black;">Topography</label>
    <input type="text" id="topo" name="topo" class="form-control" placeholder="Topography">
  </div>
  <div class="form-group">
    <label for="race" style="color:white; background-color:black;">GPS</label>
    <input type="number" id="gps" name="gps" class="form-control" title="Invalid GPS" maxlength="10" placeholder="GPS">
  </div>
  <div style="width:12%; margin:auto;">
  <button type="submit" class="btn btn-primary" style="margin:auto;">Add this Place</button>
  </div>
</form>


<!-- <form method=POST action=ScriptAjoutLieu.php>
  <div class="row">
    <div class="col">
      <input type="text" id="nom" name="nom" class="form-control" placeholder="Place name">
    </div>
    <div class="form-group">
    <input type="text" class="form-control" id="img" class="img" name="img" value="src=../images/">
  </div>
    <div class="col">
      <input type="text" id="topo" name="topo" class="form-control" placeholder="Topography">
    </div>
    <div class="col">
      <input type="text" id="gps" name="gps" class="form-control" maxlength="10" placeholder="GPS">
    </div>
    <button type="submit" class="btn btn-primary">Add a place</button>
  </div>
</form>

<h1 class="">Ajouter Un Animal</h1> -->
		

<?php
require '../vue/footer.php';
?>
