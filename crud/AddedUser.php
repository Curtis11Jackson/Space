<?php
require '../identifier.php';
require '../chargeauto.php';
require '../vue/header.php';

$id = 2;
$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$mail = $_POST['mail'];
$login = $_POST['login'];
$password = $_POST['password'];


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
  <h1 style="margin-bottom:4vh;">Thank you <?php echo $UserTable['login_user']. " " ?>for creating an account</h1>
</div>
<!-- <?php
  // echo " <article>
  //             <p> Your First Name : ". $UserTable['prenom_user'] . "</p>
  //             <p> Your Surname : ". $UserTable['nom_user'] . "</p>
  //             <p> Your Email : ". $UserTable['mail_user'] . "</p>
  //             <p> Your Password  : " . $UserTable['passw_user'] . " </p> 
  //     </article>";

?> -->

<a href="UserAccount.php?id=<?php echo $myUser->id_user()?>" style="text-align:center;">Go to My Account</a>

<?php

require '../vue/footer.php';

?>