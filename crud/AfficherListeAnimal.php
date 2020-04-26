<?php
require '../identifier.php';
require '../chargeauto.php';
require '../vue/header.php';

?>

<h1>Voici la liste des Animaux</h1>

<?php
$monAniRepo = new AnimalRepository($db);
var_dump($monAniRepo->getListName());
?>

<?php

require '../vue/footer.php';

?>
