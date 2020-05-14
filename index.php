<?php


require 'identifier.php';
require 'chargeauto.php';
require 'vue/header.php';

?>
	

	<div class="banner">
	<h1 style="margin-bottom:4vh">Space Exploration</h1>
	</div>
	
	<div class="justify-content-center resize shadow bg-white rounded">
	<div id="carouselExampleControls" class="carousel slide carousel-fade" data-ride="carousel">
		<div class="carousel-inner">


			<?php
			$reponse = $db->query('SELECT * FROM lieu ORDER BY id_lieu DESC LIMIT 5');
			
			$isActive = true;
			
			while ($donnees = $reponse->fetch()) {
				
					
	
			?>

				<div class="<?php if ($isActive) echo 'active'; ?> carousel-item">
					<img class="d-block w-100 resize" src="images/<?php echo $donnees['img_lieu']; ?>">
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
		

	<div class="section">
		<p style="margin-top:4%;">Voici un projet avec 2 Astronautes et leur sbire ! Quelques citations de nos chers camarades...<br>
		Jean Noël : "A mon époque ..."<br>
		Curtis : "Jean Noël tu est vieux"<br>
		Laurent : "Eh les gars ça marche pas moi !!"
	</p>
	</div>
	
<?php

//$monAni = array("4","KingKong","carnivore","feroce","enorme","gorille","1");
//$monAnimal = new Animal($monAni);

?>

	
<?php

require 'vue/footer.php';

?>