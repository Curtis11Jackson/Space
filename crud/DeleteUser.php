<?php
require '../vue/header.php';
require '../identifier.php';
require '../chargeauto.php';
?>

<div class="banner">
	<h1 style="margin-bottom:4vh">Delete an account</h1>
    </div>
    
    <?php
    
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

    <h3><?php echo $UserTable['login_user']. " " ?> are you sure you want to delete your account ?</h3>

    <a href="ConfirmDeleteUser.php">Yes</a>
    <a href="UserAccount.php">No</a>



<?php
require '../vue/footer.php';
?>
