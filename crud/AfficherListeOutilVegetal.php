<?php
require '../identifier.php';
require '../chargeauto.php';
require '../vue/header.php';

?>

<h1>This is the list Vegetables found by Tools</h1>

<?php


$monRecolterRepo = new RecolterRepository($db);
//echo var_dump($monRechercherRepo);

$tableauVegetalOutill = $monRecolterRepo->GetVegetalOutil();
//echo var_dump($tableauMineralOutil);
foreach ($tableauVegetalOutil as $VegetalOutil) {
    echo " <article>
                <h3> Outil : " . $VegetalOutil['nom_outil'] . "</h3>
                <p> Numéro id : ". $VegetalOutil['id_outil'] . "</p>
                <p> Rôle Outil : ". $VegetalOutil['role_outil'] ."</p>
                <br/>
                <p> Vegetal : ". $VegetalOutil['nom_veg'] . "</p>
                <p> Numéro id : ". $VegetalOutil['id_veg'] ."</p>
                <p> Classification : ". $VegetalOutil['role_outil'] ."</p>
                <br/> 
</article>";
}


?>

<?php
require '../vue/footer.php';
?>
