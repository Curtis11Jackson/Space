<?php
require '../vue/header.php';
require '../identifier.php';
require '../chargeauto.php';
?>

<div class="banner">
	<h1 style="margin-bottom:4vh">Delete a Place</h1>
</div>

<?php

$id = $_GET['id'];


$monLieuRepo = new LieuRepository($db);
$monLieuRepo->delete($id);



?>

<?php
require '../vue/footer.php';
?>