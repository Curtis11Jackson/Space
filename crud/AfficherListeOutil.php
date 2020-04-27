<?php
require '../identifier.php';
require '../chargeauto.php';
require '../vue/header.php';

?>

<h1>Voici la liste des Outils</h1>
<?php
$monOutRepo = new OutilRepository($db);
var_dump($monOutRepo->getListName());
?>

<?php

require '../vue/footer.php';

?>
