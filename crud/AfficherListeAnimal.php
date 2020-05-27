<?php
require '../identifier.php';
require '../chargeauto.php';
require '../vue/header.php';

?>
<div class="banner">
<h1>This is the list of Animals</h1>
</div>
<?php
$monAniRepo = new AnimalRepository($db);

$nbLignes = $monAniRepo->getCountById();

echo "<h3> Number of animals : " .$nbLignes[0]. "</h3>";
?>

<section style="display:flex; flex-wrap: wrap;">
<?php

$tableauAnimo = $monAniRepo->getListName();

foreach ($tableauAnimo as $Animols) {
    echo " <article  style='border:1px solid white; width:50%; margin-bottom:2%;'>
                <h3>" . $Animols['nom_ani'] . "</h3>
                <p style='width:35%; margin:auto; margin-bottom:2%;'> Numéro id : ". $Animols['id_ani'] . "</p>
                <p style='width:35%; margin:auto; margin-bottom:2%;'> Race : ". $Animols['race_ani'] . "</p> 
                <p style='width:35%; margin:auto; margin-bottom:2%;'> Caractère : ". $Animols['carac_ani'] ."</p>
                <p style='width:35%; margin:auto; margin-bottom:2%;'> Alimentation : " . $Animols['alim_ani'] . "</p>
                <p style='width:35%; margin:auto; margin-bottom:2%;'> Force : " . $Animols['force_ani'] . "</p>
                <p style='width:35%; margin:auto; margin-bottom:2%;'> Lieu : " . $Animols['fk_lieu'] . "</p>
<p style='width:25%;'><a href='DeleteAnimal.php?id=".$Animols['id_ani']."' style='font-size:20px;'>Delete this Animal</a></p>
<p style='width:25%;'><a href='UpdateAnimal.php?id=".$Animols['id_ani']."
&nom=".$Animols['nom_ani']."&race=".$Animols['race_ani']."
&carac=".$Animols['carac_ani']."&alim=".$Animols['alim_ani']."
&force=".$Animols['force_ani']."&lieu=".$Animols['fk_lieu']."
' style='font-size:20px;'>Update this Animal</a></p>
</article>";
}


?>
</section>
<?php
require '../vue/footer.php';
?>
