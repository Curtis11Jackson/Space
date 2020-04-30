<?php
require '../identifier.php';
require '../chargeauto.php';
require '../vue/header.php';
?>

<div class="banner">
	<h1 style="margin-bottom:4vh">Delete a Vegetable</h1>
	</div>

<?php
	$id = $_GET['id'];


$monVegRepo = new VegetalRepository($db);
$monVegRepo->delete($id);

?>

<?php
require '../vue/footer.php';
?>
