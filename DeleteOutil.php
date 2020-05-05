<?php
require '../vue/header.php';
require '../identifier.php';
require '../chargeauto.php';
?>

<div class="banner">
	<h1 style="margin-bottom:4vh">Delete a Outil</h1>
</div>

<?php

$id = $_GET['id'];


$monOutilRepo = new OutilRepository($db);
$monOutilRepo->delete($id);



?>

<?php
require '../vue/footer.php';
?>
