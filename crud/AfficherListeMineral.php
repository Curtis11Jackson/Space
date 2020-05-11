<?php
require '../identifier.php';
require '../chargeauto.php';
require '../vue/header.php';

?>

<h1>The list of mineral</h1>


<?php
$monMineralRepo = new MineralRepository($db);

$countMineraux = $monMineralRepo->getCountById();

echo "<h3> Number of minerals : " .$countMineraux[0]. "</h3>";

$tableauMineral = $monMineralRepo->getListName();

foreach ($tableauMineral as $Mineral) {
    echo "<article>
              <h3>" . $Mineral['nom_min'] . "</h3>
              <p> Classification : ". $Mineral['class_min'] . "</p>
              <p> Number id : ". $Mineral['id_min'] . "</p>
              <p> Lieu : " . $Mineral['fk_lieu'] . "</p>
              <p style='width:15%;'><a href='DeleteMineral.php?id=".$Mineral['id_min']."' style='font-size:20px;'>Delete this mineral</a></p>
              <p style='width:15%;'><a href='UpdateMineral.php?id=".$Mineral['id_min']."&nom=".$Mineral['nom_min']."&class=".$Mineral['class_min']."&lieu=".$Mineral['fk_lieu']."' style='font-size:20px;'>Update this mineral</a></p>
              </article>";
}








?>

<?php

require '../vue/footer.php';

?>
