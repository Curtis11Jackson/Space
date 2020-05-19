<?php
require '../identifier.php';
require '../chargeauto.php';
require '../vue/header.php';
?>

<h1>My Account</h1>

<?php


$id = $_GET['id'];

$monUserRepo = new UserRepository($db);


$UserTable = $monUserRepo->getNameById($id);



foreach ($UserTable as $Userz) {
    echo " <article>
              <h3>" . $Userz['prenom_user'] . "</h3>
              <h3>" . $Userz['nom_user'] . "</h3>
              <p> Mail : ". $Userz['mail_user'] . "</p>
              <p> Login : ". $Userz['login_user'] . "</p>
              <p style='width:15%;'><a href='UpdateUser.php?id=".$Userz['id_user']."&prenom=".$Userz['prenom_user']." &nom=".$Userz['nom_user']." &mail=" .$Userz['mail_user']. "&login=" .$Userz['login_user']. " &password=" .$Userz['passw_user']."' style='font-size:20px;'>Made a mistake? Click here to make some changes</a></p>
              <p style='width:15%;'><a href='DeleteUser.php?id=".$Userz['id_user']."' style='font-size:20px;'>Delete my account</a></p>
              </article>";


}

?>

<?php

require '../vue/footer.php';

?>


