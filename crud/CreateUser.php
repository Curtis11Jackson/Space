<?php

require '../identifier.php';
require '../chargeauto.php';
require '../vue/header.php';

?>


<div class="banner">
	<h1 style="margin-bottom:4vh">Space Exploration</h1>
</div>



<div class="parent">
  <img class="child" src="../images/naut.jpg" style="width:15%; height:10%;">
</div>

<h2 style="color:white; margin-top:4vh; text-align:center; background-color:black; width:20%; margin:auto;">Create an account</h2>
  
  <form class="w-50" method="POST" action="AddedUser.php" style="margin:auto;">
		 <div class="form-group">
    <label for="prenom" style="color:white;">Prénom</label>
    <input  type="text" id="prenom" name="prenom" class="form-control" placeholder="Renseignez votre Prénom" required>
  </div>
  <div class="form-group">
    <label for="nom" style="color:white;">Nom</label>
    <input type="text" id="nom" name="nom" class="form-control" placeholder="Renseignez votre Nom" required>
  </div>
  <div class="form-group">
    <label for="mail" style="color:white;">Email</label>
    <input type="text" id="mail" name="mail" class="form-control" placeholder="Renseignez votre Email" required>
  </div>
  <div class="form-group">
    <label for="login" style="color:white;">Login</label>
    <input type="text" id="login" name="login" class="form-control" placeholder="Renseignez votre Login" required>
  </div>
  <div class="form-group">
    <label for="password" style="color:white;">Mot de Passe</label>
    <input type="password" id="password" name="password" class="form-control" placeholder="Renseignez votre Mot de Passe" required>
  </div>
  <div style="width:15%; margin:auto;">
  <button type="submit" class="btn btn-primary" style="margin:auto;">Créer mon compte</button>
  </div>
  </form>

<?php

require '../vue/footer.php';

?>