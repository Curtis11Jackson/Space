<?php
require '../identifier.php';
require '../chargeauto.php';
require '../vue/header.php';
?>

<div class="banner">
  <h1 style="margin-bottom:4vh">You have added a new Alien</h1>
</div>

<?php

$nom = $_POST['nom'];
$race = $_POST['race'];
$carac = $_POST['carac'];
$id = 4;

$tabloAli = array(
  "id" => $id,    
  "nom_alien" => $nom,
  'race_alien' => $race,
  'carac_alien' => $carac);

$monAlien = new Alien($tabloAli);

$monAlienRepo = new AlienRepository($db);

$monAlienRepo -> add($monAlien);

?>
<?php

require '../vue/footer.php';

?>