<?php
require '../identifier.php';
require '../chargeauto.php';
require '../vue/header.php';

?>

<h1>The Animals eat vegetables</h1>

<?php
$monMangerRepo = new MangerRepository($db);

$tableauAnimo = $monMangerRepo->getAnimalVegetal();

foreach ($tableauAnimo as $Animols) {
    echo " <article>
                <h3>" . $Animols['nom_ani'] . "</h3>
                <p> Numéro id : ". $Animols['id_ani'] . "</p>
                <p> Race : ". $Animols['race_ani'] . "</p> 
                <p> Caractère : ". $Animols['carac_ani'] ."</p>
                <p> Alimentation : " . $Animols['alim_ani'] . "</p>
                <p> Force : " . $Animols['force_ani'] . "</p>
                <p> Lieu : " . $Animols['fk_lieu'] . "</p>
                <h4 style='text-align:center'> mange </h4>
                <p> Numéro id : ". $Animols['id_veg'] . "</p>
                <p> Nom : ". $Animols['nom_veg'] . "</p> 
                <p> Classification : ". $Animols['class_veg'] ."</p>
                <p> Taille : " . $Animols['taille_veg'] . "</p>
                
                </article>";
}


?>

<?php
require '../vue/footer.php';
?>
