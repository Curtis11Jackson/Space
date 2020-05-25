<?php

require '../identifier.php';
require '../chargeauto.php';
require '../vue/header.php';
?>


<h2 style='background-color:red; border:2px white solid; 
    width:30%;text-align:center; margin:auto; margin-top:4%;'>
    Welcome Back</h2>

<?php
$id = $_GET['id'];


$monUserRepo = new UserRepository($db);
$donnees2 = $monUserRepo->getNameById($id);

//echo var_dump($donnees2);

if ($donnees2 != false) {
    echo "<article> 
    <h2 style='background-color:red; border:2px white solid; 
    width:30%; text-align:center; margin:auto; margin-top:4%;'>
    Num : ".$donnees2[0]['id_user']." <br>
    Fisrtname : ".$donnees2[0]['prenom_user']." <br>
    Lastname : ".$donnees2[0]['nom_user']."
    </h2></article>";    
}
else{
    echo " <article> 
    <h2 style='background-color:red; border:2px white solid; 
    width:30%; text-align:center; margin:auto; margin-top:4%;'> id incorrect
    </h2>
        </article>";
}
?>



<?php

require '../vue/footer.php';

?>