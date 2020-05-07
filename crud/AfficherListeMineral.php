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
              <p style='width:15%;'><a href='DeleteMineral.php?id=".$Mineral['id_min']."' style='font-size:20px;'>Delete this mineral</a></p>
              <p style='width:15%;'><a href='UpdateMineral.php?id=".$Mineral['id_min']."&class=".$MLineral['class_min']."' style='font-size:20px;'>Update this mineral</a></p>
              </article>";
}








?>

<?php

require '../vue/footer.php';

?>
