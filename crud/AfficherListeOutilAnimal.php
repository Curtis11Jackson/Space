<?php
require '../identifier.php';
require '../chargeauto.php';
require '../vue/header.php';

?>

<h1>This is the list of Tools that kill Animals</h1>

<?php


$monTuerRepo = new TuerRepository($db);
//echo var_dump(RecolterRepository;


$tableauOutilAnimal = $monTuerRepo->GetOutilAnimal();
//echo var_dump($tableauOutilAnimal);
foreach ($tableauOutilAnimal as $OutilAnimal) {
    echo " <article>
                <h3> Outil : " . $OutilAnimal['nom_outil'] . "</h3>
                <p> Numéro id : ". $OutilAnimal['id_outil'] . "</p>
                <br/>
                <p> Tue l'animal : ". $OutilAnimal['nom_ani'] . "</p>
                <p> Numéro id : ". $OutilAnimal['id_ani'] ."</p>
                <p> Race Animal : ". $OutilAnimal['race_ani'] ."</p>
                <br/> 
</article>";
}


?>

<?php
require '../vue/footer.php';
?>
