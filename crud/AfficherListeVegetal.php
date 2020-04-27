<?php
require '../identifier.php';
require '../chargeauto.php';
require '../vue/header.php';

?>

<h1>Voici la liste des Végétaux</h1>
<?php
$monVegRepo = new VegetalRepository($db);
var_dump($monVegRepo->getListName());
?>

<?php

require '../vue/footer.php';

?>
