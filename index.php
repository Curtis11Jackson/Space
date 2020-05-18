<?php


require 'identifier.php';
require 'chargeauto.php';
require 'vue/header.php';

?>


<div class="banner">
	<h1 style="margin-bottom:4vh">Space Exploration</h1>
</div>


<div class="justify-content-center shadow  rounded">
	<div id="carouselExampleControls" class="carousel slide carousel-fade" data-ride="carousel">
		<div class="carousel-inner justify-content-center">


			<?php
			$reponse = $db->query('SELECT * FROM lieu ORDER BY id_lieu');

			$isActive = true;

			while ($donnees = $reponse->fetch()) {



			?>

				
				<div class="<?php if ($isActive) echo 'active'; ?> carousel-item justify-content-center">
					<img class="d-block w-100 align-items-center" style="margin-left:50%;" src="images/<?php echo $donnees['img_lieu']; ?>">
				<div><h2 class="d-block w-100 align-items-center" style="background-color:white; text-align:center; margin-left:50%; padding:2px;"><?php echo $donnees['nom_lieu']; ?></h2>
        		</div>
				</div>

				
			<?php
				$isActive = false;
			}
			?>

		</div>
		<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only ">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only ">Next</span>
		</a>
	</div>
</div>
</div>
</div>

<h2 style="color:white; margin-top:4vh; text-align:center;">Créez un compte</h2>
  
  <form class="w-50" method="POST" action="crud/AddedUser.php" style="margin:auto;">
		 <div class="form-group">
    <label for="prenom" style="color:white;">Prénom</label>
    <input type="text" id="prenom" name="prenom" class="form-control" placeholder="Renseignez votre Prénom">
  </div>
  <div class="form-group">
    <label for="nom" style="color:white;">Nom</label>
    <input type="text" id="nom" name="nom" class="form-control" placeholder="Renseignez votre Nom">
  </div>
  <div class="form-group">
    <label for="mail" style="color:white;">Email</label>
    <input type="text" id="mail" name="mail" class="form-control" placeholder="Renseignez votre Email">
  </div>
  <div class="form-group">
    <label for="login" style="color:white;">Login</label>
    <input type="text" id="login" name="login" class="form-control" placeholder="Renseignez votre Login">
  </div>
  <div class="form-group">
    <label for="password" style="color:white;">Mot de Passe</label>
    <input type="password" id="password" name="password" class="form-control" placeholder="Renseignez votre Mot de Passe">
  </div>
  <div style="width:15%; margin:auto;">
  <button type="submit" class="btn btn-primary" style="margin:auto;">Créer mon compte</button>
  </div>
  </form>

<?php

require 'vue/footer.php';

?>