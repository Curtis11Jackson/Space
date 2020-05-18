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