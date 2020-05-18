<?php
require '../identifier.php';
require '../chargeauto.php';
require '../vue/header.php';


$email = $_POST['email'];
$password = $_POST['password'];
$id = 4;

$UserTable = array(
  "id_user" => $id,    
  'email_user' => $email,
  'password_user' => $password);

$myUser = new User($UserTable);

$monUserRepo = new UserRepository($db);

$monUserRepo -> add($myUser);
?>
<div class="banner">
  <h1>Thank you <?php echo $UserTable['email_user']. " " ?>for creating an account</h1>
</div>

<?php

require '../vue/footer.php';

?>