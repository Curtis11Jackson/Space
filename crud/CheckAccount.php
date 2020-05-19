<?php

require '../identifier.php';
require '../chargeauto.php';
require '../vue/header.php';



$login = $_POST['login_user'];

$password = $_POST['passw_user'];



$reponse = $dbh ->query("SELECT * FROM admin WHERE login_user = '" . $login . "'");
$req = $reponse -> fetch();


if ($req != false) {
    $reponsemdp = $dbh -> query("SELECT * FROM admin WHERE login_user = '" . $login . " ' AND passw_user = '". $password."'");
    $reqmdp = $reponsemdp -> fetch();
    if ($reqmdp != false) {
        header("Location:CheckedAccount.php?");
}
else echo "<p> Erreur Mot de passe </p>";
    
}

else echo "<p> Erreur login</p>";




require '../vue/footer.php';

?>