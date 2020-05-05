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
              <h3>" . $Mineral['nom_min'] . "</h3>
              <p> Classification : ". $Mineral['class_min'] . "</p>
              <p> Number id : ". $Mineral['id_min'] . "</p>
              <p style='width:15%;'><a href='DeleteMineral.php?id=".$Mineral['id_min']."' style='font-size:20px;'>Delete this Place</a></p>
              <p style='width:15%;'><a href='UpdateMineral.php?id=".$Mineral['id_min']."
              &nom=".$Mineral['nom_min']."&class=".$Mineral['class_min']."
              &lieu=".$Mineral['fk_lieu']."
                <p style='width:15%;'><a href='UpdateLieu.php?id=".$Mineral['id_min']."' style='font-size:20px;'>Update this Place</a></p>
              </article>";
}








?>

<?php

require '../vue/footer.php';

?>
