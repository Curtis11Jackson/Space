<?php
require '../identifier.php';
require '../chargeauto.php';
require '../vue/header.php';

$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$mail = $_POST['mail'];
$login = $_POST['login'];
$password = $_POST['password'];
$id = 2;

$UserTable = array(
  "id_user" => $id,
  "prenom_user" => $prenom,
  "nom_user" => $nom,   
  'mail_user' => $mail,
  'login_user' => $login,
  'passw_user' => $password);

$myUser = new User($UserTable);

$monUserRepo = new UserRepository($db);

$monUserRepo -> add($myUser);
?>
<div class="banner">
  <h1>Thank you <?php echo $UserTable['mail_user']. " " ?>for creating an account</h1>
</div>

<?php

require '../vue/footer.php';

?>