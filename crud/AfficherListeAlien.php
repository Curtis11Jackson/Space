<?php
require '../identifier.php';
require '../chargeauto.php';
require '../vue/header.php';
?>

<h1>Voici la liste des Aliens</h1>

<?php
$monAlienRepo = new AlienRepository($db);

$tableauAlien = $monAlienRepo->getListName();

foreach ($tableauAlien as $Alienz) {
    echo " <article>
                <h3>" . $Alienz['nom_alien'] . "</h3>
                <p> Numéro id : ". $Alienz['id_alien'] . "</p>
                <p> Race : ". $Alienz['race_alien'] . "</p>
                <p> Caractère : ". $Alienz['carac_alien'] ."</p>
               <p style='width:15%;'><a href='DeleteAlien.php' style='font-size:20px;'>Delete this Alien</a></p>
        </article>";
}
?>

<?php

require '../vue/footer.php';

?>
