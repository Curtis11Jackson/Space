<?php
require '../identifier.php';
require '../chargeauto.php';
require '../vue/header.php';
?>

<h1>Voici la liste des Lieux</h1>

<?php
$monLieuRepo = new LieuRepository($db);

$tableauLieu = $monLieuRepo->getListName();

foreach ($tableauLieu as $Lieux) {
    echo " <article>
                <h3>" . $Lieux['nom_lieu'] . "</h3>
                <p> Numéro id : ". $Lieux['id_lieu'] . "</p>
                <p> Topographie Lieu : ". $Lieux['topo_lieu'] . "</p>
                <p> Position : ". $Lieux['GPS_lieu'] ."</p>
        </article>";
}
?>

<?php

require '../vue/footer.php';

?>
