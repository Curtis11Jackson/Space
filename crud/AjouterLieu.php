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
    <label for="nom">Place Name</label>
    <input type="text" id="nom" name="nom" class="form-control" placeholder="Place name">
  </div>
  <div class="form-group">
    <label for="img">Image of the Place</label>
    <input type="text" class="form-control" id="img" class="img" name="img" placeholder="" required>
  </div>
  <div class="form-group">
    <label for="prenom">Topography</label>
    <input type="text" id="topo" name="topo" class="form-control" placeholder="Topography">
  </div>
  <div class="form-group">
    <label for="race">GPS</label>
    <input type="text" id="gps" name="gps" class="form-control" maxlength="10" placeholder="GPS">
  </div>
  <div style="width:12%; border:1px solid black; margin:auto;">
  <button type="submit" class="btn btn-primary" style="margin:auto;">Ajouter la bête ! </button>
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
