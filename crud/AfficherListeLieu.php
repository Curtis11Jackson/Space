<?php
require '../identifier.php';
require '../chargeauto.php';
require '../vue/header.php';
?>

<h1>The list of Places</h1>

<?php
$monLieuRepo = new LieuRepository($db);

$tableauLieu = $monLieuRepo->getListName();

foreach ($tableauLieu as $Lieux) {
    echo " <article>
                <h3>" . $Lieux['nom_lieu'] . "</h3>
                <p> Numéro id : ". $Lieux['id_lieu'] . "</p>
                <p> Topographie Lieu : ". $Lieux['topo_lieu'] . "</p>
                <p> Position : ". $Lieux['gps_lieu'] ."</p>
                <p style='width:15%;'><a href='DeleteLieu.php?id=".$Lieux['id_lieu']."' style='font-size:20px;'>Delete this Place</a></p>
                <p style='width:15%;'><a href='UpdateLieu.php?id=".$Lieux['id_lieu']."' style='font-size:20px;'>Update this Place</a></p>
        </article>";
}
?>

<?php

require '../vue/footer.php';

?>
