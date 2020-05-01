<?php
require '../identifier.php';
require '../chargeauto.php';
require '../vue/header.php';
?>

<div class="banner">
  <h1 style="margin-bottom:4vh">You have added a new Vegetable</h1>
</div>



<?php

$id = 4;
$nom = $_POST['nom'];
$taille = $_POST['taille'];
$classif = $_POST['classif'];
$lieu =  $_POST['lieu'];

$tabloVeg = array(
    "id_veg" => $id,    
    "nom_veg" => $nom,
    'taille_veg' => $taille,
    'class_veg' => $classif,
    'fk_lieu' => $lieu,
);

$monVegetal = new Vegetal($tabloVeg);

$monVegRepo = new VegetalRepository($db);
$monVegRepo->add($monVegetal);


echo " <article>
<h3>" . $tabloVeg['nom_veg'] . "</h3>
<p> Taille : ". $tabloVeg['taille_veg'] . "</p>
<p> Classification : ". $tabloVeg['class_veg'] ."</p>
<p> Lieu : ". $tabloVeg['fk_lieu'] ."</p>
</article>";


?>



<?php

require '../vue/footer.php';

?>