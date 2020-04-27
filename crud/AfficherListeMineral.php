<?php
require '../identifier.php';
require '../chargeauto.php';
require '../vue/header.php';

?>

<h1>Voici la liste des Minéraux</h1>


<?php
$monMineralRepo = new MineralRepository($db);
var_dump($monMineralRepo->getListName());
?>

<?php

require '../vue/footer.php';

?>
