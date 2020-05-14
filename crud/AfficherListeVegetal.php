<?php
require '../identifier.php';
require '../chargeauto.php';
require '../vue/header.php';

?>

<h1>This is list of Vegetables</h1>
<?php
$monVegRepo = new VegetalRepository($db);

$nbLignes = $monVegRepo->getCountById();

echo "<h3> Number of vegetables : " .$nbLignes[0]. "</h3>";

$tableauVegeto = $monVegRepo->getListName();

foreach ($tableauVegeto as $Vegetols) {
    echo " <article>
                <h3>" . $Vegetols['nom_veg'] . "</h3>
                <p> Numéro id : ". $Vegetols['id_veg'] . "</p>
                <p> Taille : ". $Vegetols['taille_veg'] . "</p>
                <p> Classification : ". $Vegetols['class_veg'] ."</p>
                <p> Lieu : ". $Vegetols['fk_lieu'] ."</p>
<p style='width:15%;'><a href='DeleteVegetal.php?id=".$Vegetols['id_veg']."' style='font-size:20px;'>Delete this Animal</a></p>
<p style='width:15%;'><a href='UpdateVegetal.php?id=".$Vegetols['id_veg']."
&nom=".$Vegetols['nom_veg']."&taille=".$Vegetols['taille_veg']."
&class=".$Vegetols['class_veg']."&lieu=".$Vegetols['fk_lieu']."
' style='font-size:20px;'>Update this Vegetable</a></p>
</article>";
}


?>

<?php

require '../vue/footer.php';

?>
