<?php
require '../identifier.php';
require '../chargeauto.php';
require '../vue/header.php';
?>

<h1>Voici la liste des Lieux</h1>

<?php
$monLieuRepo = new LieuRepository($db);
var_dump($monLieuRepo->getListName());
?>

<?php

require '../vue/footer.php';

?>
