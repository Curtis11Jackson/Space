<?php

require '../chargeauto.php';


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
        echo "<h2>Mauvais Password</h2>";
    }
} else {
    echo "<h2>Mauvais Login</h2>";
}
?>


<a href="../Login.php">Retour</a>

<?php

require '../vue/footer.php';

?>