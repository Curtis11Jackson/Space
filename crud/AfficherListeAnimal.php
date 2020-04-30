<?php
require '../identifier.php';
require '../chargeauto.php';
require '../vue/header.php';

?>

<h1>This is list of Animals</h1>

<?php
$monAniRepo = new AnimalRepository($db);

$tableauAnimo = $monAniRepo->getListName();

foreach ($tableauAnimo as $Animols) {
    echo " <article>
                <h3>" . $Animols['nom_ani'] . "</h3>
                <p> Numéro id : ". $Animols['id_ani'] . "</p>
                <p> Race : ". $Animols['race_ani'] . "</p> 
                <p> Caractère : ". $Animols['carac_ani'] ."</p>
                <p> Alimentation : " . $Animols['alim_ani'] . "</p>
                <p> Force : " . $Animols['force_ani'] . "</p>
                <p> Lieu : " . $Animols['fk_lieu'] . "</p>
<p style='width:15%;'><a href='DeleteAnimal.php?id=".$Animols['id_ani']."' style='font-size:20px;'>Delete this Animal</a></p>
<p style='width:15%;'><a href='UpdateAnimal.php?id=".$Animols['id_ani']."
&nom=".$Animols['nom_ani']."&race=".$Animols['race_ani']."
&carac=".$Animols['carac_ani']."&alim=".$Animols['alim_ani']."
&force=".$Animols['force_ani']."&lieu=".$Animols['fk_lieu']."
' style='font-size:20px;'>Update this Animal</a></p>
</article>";
}


?>

<?php
require '../vue/footer.php';
?>
