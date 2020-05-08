<?php
require '../identifier.php';
require '../chargeauto.php';
require '../vue/header.php';

?>

<h1>This is list of Place of Animals</h1>

<?php

// $monSituer = new Situer();

$monSituerRepo = new SituerRepository($db);
//echo var_dump($monSituerRepo);
$tableauLieuAnimo = $monSituerRepo->GetLieuAnimal();

foreach ($tableauLieuAnimo as $Animols) {
    echo " <article>
                <h3>" . $Animols['nom_ani'] . "</h3>
                <p> Numéro id : ". $Animols['id_ani'] . "</p>
                <p> Race : ". $Animols['race_ani'] . "</p> 
                <p> Caractère : ". $Animols['carac_ani'] ."</p>
                <p> Alimentation : " . $Animols['alim_ani'] . "</p>
                <p> Force : " . $Animols['force_ani'] . "</p>
                <p> Lieu : " . $Animols['nom_lieu'] . "
                Topographie : ". $Animols['topo_lieu'] . " 
                GPS : ". $Animols['gps_lieu'] . "</p> 
</article>";
}


?>

<?php
require '../vue/footer.php';
?>
