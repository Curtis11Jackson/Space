<?php
require '../identifier.php';
require '../chargeauto.php';
require '../vue/header.php';

?>

<h1>This is the list Minerals found by Tools</h1>

<?php


$monRechercherRepo = new RechercherRepository($db);
//echo var_dump($monRechercherRepo);

$tableauMineralOutil = $monRechercherRepo->GetMineralOutil();
//echo var_dump($tableauMineralOutil);
foreach ($tableauMineralOutil as $MineroOutil) {
    echo " <article>
                <h3> MINERAL : " . $MineroOutil['nom_min'] . "</h3>
                <p> Numéro id : ". $MineroOutil['id_min'] . "</p>
                <p> Classification : ". $MineroOutil['class_min'] ."</p>
                <br/>
                <p> OUTIL : ". $MineroOutil['nom_outil'] . "</p>
                <p> Numéro id : ". $MineroOutil['id_outil'] ."</p>
                <p> Role : ". $MineroOutil['role_outil'] ."</p>
                <br/> 
</article>";
}


?>

<?php
require '../vue/footer.php';
?>
