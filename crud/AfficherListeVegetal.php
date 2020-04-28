<?php
require '../identifier.php';
require '../chargeauto.php';
require '../vue/header.php';

?>

<h1>This is list of Vegetables</h1>
<?php
$monVegRepo = new VegetalRepository($db);

$tableauVegeto = $monVegRepo->getListName();

foreach ($tableauVegeto as $Vegetols) {
    echo " <article>
                <h3>" . $Vegetols['nom_veg'] . "</h3>
                <p> Numéro id : ". $Vegetols['id_veg'] . "</p>
                <p> Taille : ". $Vegetols['taille_veg'] . "</p>
                <p> Classification : ". $Vegetols['class_veg'] ."</p>
        </article>";
}


?>

<?php

require '../vue/footer.php';

?>
