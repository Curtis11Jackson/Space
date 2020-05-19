<?php
require '../identifier.php';
require '../chargeauto.php';
require '../vue/header.php';
?>

<div class="banner">
  <h1 style="margin-bottom:4vh">You have updated your Account</h1>
</div>

<?php
$id = $_POST['id'];
$prenom =  $_POST['prenom'];
$nom =  $_POST['nom'];
$mail = $_POST['mail'];
$login =  $_POST['login'];
$password = $_POST['password'];


$UserTable = array(
  "id_user" => $id,
  "prenom_user" => $prenom,
  "nom_user" => $nom,
  "mail_user" => $mail,
  "login_user" => $login,
  "passw_user" => $password,
);

$myUser = new User($UserTable);

$monUserRepo = new UserRepository($db);

$monUserRepo -> update($myUser);


  echo " <article>
              <p> Your First Name : ". $UserTable['prenom_user'] . "</p>
              <p> Your Surname : ". $UserTable['nom_user'] . "</p>
              <p> Your Email : ". $UserTable['mail_user'] . "</p>
              <p> Your Login : ". $UserTable['login_user'] . "</p>
              <p> Your Password  : " . $UserTable['passw_user'] . " </p> 
      </article>";

?> 

?>


