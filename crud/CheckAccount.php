<?php

require '../chargeauto.php';

?>


<!doctype html>

<html lang="Fr-fr">
  <head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <?php 
    if ( (explode("/",$_SERVER['PHP_SELF'])[1] == "Space") && (explode("/",$_SERVER['PHP_SELF'])[2] == "crud") ) {
      
      echo  "<link rel='stylesheet' type='text/css' href='../css/main.css'/>
      <link rel='stylesheet' media='(max-width: 992px)' href='../css/tablet.css'/>
      <link rel='stylesheet' media='(max-width: 576px)' href='../css/smartphone.css'/>";
    }
    else
    {
	  echo  "<link rel='stylesheet' type='text/css' href='css/main.css'/>
		<link rel='stylesheet' media='(max-width: 992px)' href='css/tablet.css'/>
		<link rel='stylesheet' media='(max-width: 576px)' href='css/smartphone.css'/>";
    }
?> 

		<title>Space Missions</title>

  </head>

  <body>

<?php
$user_agent = getenv("HTTP_USER_AGENT");

if(strpos($user_agent, "Win") !== FALSE)
$os = "Windows";
elseif(strpos($user_agent, "Mac") !== FALSE)
$os = "Mac";
elseif(strpos($user_agent, "Lin") !== FALSE)
$os = "Linux";

if($os === "Windows")
{
    $db = new PDO('mysql:host=localhost;dbname=space', 'root', '');
}

elseif($os === "Mac")
{
    $db = new PDO('mysql:host=localhost;dbname=space', 'root', 'root');
} 

elseif($os === "Linux")
{
    $db = new PDO('mysql:host=localhost;dbname=space', 'phpmyadmin', 'handigital');
    // echo getenv("HTTP_USER_AGENT");
}



$login = $_POST["login"];
$password = $_POST["password"];

$reponse = $db->query("SELECT * FROM user WHERE login_user='". $login. "'");
// var_dump($reponse);
$donnees = $reponse->fetch();
// echo var_dump($donnees);
if ($donnees != false) {
    $reponse2 = $db->query("SELECT * FROM user WHERE login_user='" . $login. "' AND passw_user='". $password. "'");
    $donnees2 = $reponse2->fetch();
    // echo var_dump($donnees2);
    if ($donnees2 != false) {
        header("Location:CheckedAccount.php?id=".$donnees2['id_user']);
    }
    else{
        echo " <article> 
        <h2 style='background-color:red; border:2px white solid; width:30%; text-align:center; margin:auto; margin-top:4%;'> Votre Mot de Passe est Incorrect</h2>
</article>";
    }
} else {
    echo "<article> 
    <p> Votre Login est Incorrect</p>
</article>";
}
?>

<div>
<a href="../Login.php" style="font-size:18px; border:solid white 1px; background-color:black;">Retour à la page de connexion</a>
</div>
<?php

require '../vue/footer.php';

?>