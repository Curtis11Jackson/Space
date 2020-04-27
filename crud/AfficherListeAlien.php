<?php
require '../identifier.php';
require '../chargeauto.php';
require '../vue/header.php';
?>

<h1>Voici la liste des Aliens</h1>

<?php
$monAlienRepo = new AlienRepository($db);
var_dump($monAlienRepo->getListName());
?>

<?php

require '../vue/footer.php';

?>
