<?php
require '../identifier.php';
require '../chargeauto.php';
require '../vue/header.php';

?>

<h1>The list of mineral</h1>


<?php
$monMineralRepo = new MineralRepository($db);

$tableauMineral = $monMineralRepo->getListName();

foreach ($tableauMineral as $Mineral) {
    echo "<article>
              <h3>" . $mineral['nom_min'] . "</h3>
              <p> Classification : ". $Mineral['class_min'] . "</p>
              <p> Number id : ". $Mineral['id_min'] . "</p>
              <p style='width:15%;'><a href='DeleteLieu.php?id=".$Mineral['id_min']."' style='font-size:20px;'>Delete this Place</a></p>
                <p style='width:15%;'><a href='UpdateLieu.php?id=".$Mineral['id_min']."' style='font-size:20px;'>Update this Place</a></p>
              </article>"
}








?>

<?php

require '../vue/footer.php';

?>
