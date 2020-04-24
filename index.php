<?php


require 'vue/header.php';

// On enregistre notre autoload.
function chargerClasse($classname)
{
  require $classname.'.php';
}

spl_autoload_register('chargerClasse');

?>
	

	<div class="banner">
	<h1 style="margin-bottom:4vh">Space Exploration</h1>
	</div>
	
	<div class="section" style="width:40%; margin:auto;">
		<img src="images/probe3.jpg" class="astro" style="margin:0 auto 0;">
		<p style="margin-top:4%;">Voici un projet avec 2 Astronautes et leur sbire ! Quelques citations de nos chers camarades...<br>
		Jean Noël : "A mon époque ..."<br>
		Curtis : "Jean Noël tu est vieux"<br>
		Laurent : "Eh les gars ça marche pas moi !!"
	</p>
	</div>
	
<?php

echo getenv("HTTP_USER_AGENT");



?>

	
<?php

require 'vue/footer.php';

?>