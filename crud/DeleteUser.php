<?php
require '../vue/header.php';
require '../identifier.php';
require '../chargeauto.php';
?>

<div class="banner">
	<h1 style="margin-bottom:4vh">Delete an account</h1>
    </div>

    <?php
    
    $prenom = $_GET['prenom'];
    $nom = $_GET['nom'];
    $mail = $_GET['mail'];
    $login = $_GET['login'];
    $password = $_GET['password'];
    $id = $_GET['id'];
    
    $UserTable = array(
      "id_user" => $id,
      "prenom_user" => $prenom,
      "nom_user" => $nom,   
      'mail_user' => $mail,
      'login_user' => $login,
      'passw_user' => $password);
    
    $myUser = new User($UserTable);
    
    $monUserRepo = new UserRepository($db);
    
    $monUserRepo -> delete($id);

?>

<?php
require '../vue/footer.php';
?>
