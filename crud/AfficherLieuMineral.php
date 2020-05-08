<?php
require '../identifier.php';
require '../chargeauto.php';
require '../vue/header.php';

?>

<h1>This is list of Minerals in their Place</h1>

<?php

// $monSituer = new Situer();

$monSituerRepo = new SituerRepository($db);
//echo var_dump($monSituerRepo);
$tableauMineralAnimo = $monSituerRepo->GetLieuMineral();

foreach ($tableauMineralAnimo as $Minero) {
    echo " <article>
                <h3>" . $Minero['nom_min'] . "</h3>
                <p> Numéro id : ". $Minero['id_min'] . "</p>
                <p> Class : ". $Minero['class_min'] ."</p>
                <p> Lieu : " . $Minero['nom_lieu'] . " <br/> 
                Topographie : ". $Minero['topo_lieu'] . " <br/>
                GPS : ". $Minero['gps_lieu'] . "</p> 
</article>";
}


?>

<?php
require '../vue/footer.php';
?>
