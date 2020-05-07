<?php

require '../identifier.php';
require '../chargeauto.php';
require '../vue/header.php';
?>

<div class="banner">
  <h1 style="margin-bottom:4vh">You have modified a new Animal</h1>
</div>

<?php

$id = $_POST['ident'];
$nom = $_POST['nom'];
$class = $_POST['class'];
$lieu =  $_POST['lieu'];

$tabloMin = array(
    "id_ani" => $id,    
    "nom_ani" => $nom,
    'class_min' => $class,
    'fk_lieu' => $lieu,
);

$monMineral = new Mineral($tabloMin);

$monMineralRepo = new MineralRepository($db);
$monMineralRepo->update($monMineral);

echo var_dump($monMineral);

echo " <article>
<h3>" . $tabloMin['nom_ani'] . "</h3>
<p> Class : ". $tabloMin['class_min'] . "</p>
<p> Lieu : ". $tabloMin['fk_lieu'] ."</p>
</article>";


?>


<?php
require '../vue/footer.php';
?>
