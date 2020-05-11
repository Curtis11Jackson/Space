<?php
require '../identifier.php';
require '../chargeauto.php';
require '../vue/header.php';

?>

<h1>This is the list Minerals found by Tools</h1>

<?php


$monRechercherRepo = new RechercherRepository($db);
//echo var_dump($monRechercherRepo);

$tableau = $monRechercherRepo->GetMineralOutil();

foreach ($tableauMineralOutil as $MineroOutil) {
    echo " <article>
                <h3>" . $MineroOutil['nom_min'] . "</h3>
                <p> Numéro id : ". $MineroOutil['id_min'] . "</p>
                <p> Class : ". $MineroOutil['class_min'] ."</p>
                <p> Recherché par : " . $MineroOutil['nom_outil'] . " <br/> 
</article>";
}


?>

<?php
require '../vue/footer.php';
?>
