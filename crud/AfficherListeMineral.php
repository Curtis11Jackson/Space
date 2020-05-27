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

?>
<section style="display:flex; flex-wrap: wrap;">
<?php

$tableauMineral = $monMineralRepo->getListName();

foreach ($tableauMineral as $Mineral) {
    echo "<article style='border:1px solid white; width:50%;  margin-bottom:2%;'>
              <h3>" . $Mineral['nom_min'] . "</h3>
              <p style='width:35%; margin:auto; margin-bottom:2%;'> Classification : ". $Mineral['class_min'] . "</p>
              <p style='width:35%; margin:auto; margin-bottom:2%;'> Number id : ". $Mineral['id_min'] . "</p>
              <p style='width:35%; margin:auto; margin-bottom:2%;'> Lieu : " . $Mineral['fk_lieu'] . "</p>
              <p style='width:25%;'><a href='DeleteMineral.php?id=".$Mineral['id_min']."' style='font-size:20px;'>Delete this mineral</a></p>
              <p style='width:25%;'><a href='UpdateMineral.php?id=".$Mineral['id_min']."&nom=".$Mineral['nom_min']."&class=".$Mineral['class_min']."&lieu=".$Mineral['fk_lieu']."' style='font-size:20px;'>Update this mineral</a></p>
              </article>";
}
?>

</section>

<?php

require '../vue/footer.php';

?>
