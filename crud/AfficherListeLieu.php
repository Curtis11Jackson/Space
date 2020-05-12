<?php
require '../identifier.php';
require '../chargeauto.php';
require '../vue/header.php';
?>

<h1>The list of Places</h1>

<?php
$monLieuRepo = new LieuRepository($db);

$countLieu = $monLieuRepo->getCountById();

echo "<h3> Number of Places : " .$countLieu[0]. "</h3>";

$tableauLieu = $monLieuRepo->getListName();

foreach ($tableauLieu as $Lieux) {
    echo " <article>
                <h3>" . $Lieux['nom_lieu'] . "</h3>
                <img src=../images/". $Lieux['img_lieu']." width='320' height='200' class='img-fluid' "."</img>
                <p> Numéro id : ". $Lieux['id_lieu'] . "</p>
                <p> Topographie Lieu : ". $Lieux['topo_lieu'] . "</p>
                <p> Position : ". $Lieux['gps_lieu'] ."</p>
                <p style='width:15%;'><a href='DeleteLieu.php?id=".$Lieux['id_lieu']."' style='font-size:20px;'>Delete this Place</a></p>
                <p style='width:15%;'><a href='UpdateLieu.php?id=".$Lieux['id_lieu']."
                &nom=".$Lieux['nom_lieu']."&img=".$Lieux['img_lieu']."&topo=".$Lieux['topo_lieu']."
                &gps=".$Lieux['gps_lieu']."' style='font-size:20px;'>Update this Place</a></p>
        </article>";
}
?>

<?php

require '../vue/footer.php';

?>
