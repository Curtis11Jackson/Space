<?php

require '../identifier.php';
require '../chargeauto.php';
require '../vue/header.php';
?>

<div class="banner">
  <h1 style="margin-bottom:4vh">You have added a new Animal</h1>
</div>

<?php

$nom = $_POST['name'];
$alim = $_POST['alim'];
$carac = $_POST['carac'];
$race = $_POST['race'];
$force = $_POST['force'];
$lieu = 2;
$id = 4;

$tabloAni = array(
    "id_ani" => $id,    
    "nom_ani" => $nom,
    'alim_ani' => $alim,
    'carac_ani' => $carac,
    'force_ani' => $force,    
    'race_ani' => $race,
    'fk_lieu' => $lieu,
);

$monAnimal = new Animal($tabloAni);

$monAniRepo = new AnimalRepository($db);
$monAniRepo->add($monAnimal);


?>


<?php
require '../vue/footer.php';
?>
