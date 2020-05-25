<?php
require '../vue/header.php';
require '../identifier.php';
require '../chargeauto.php';
?>

<div class="banner">
	<h1 style="margin-bottom:4vh">You have Deleted your comment</h1>
	</div>

<?php
    
    $id = $_GET['id'];


    $monCommentRepo = new CommentRepository($db);
    $monCommentRepo->delete($id);

    

?>


<?php
require '../vue/footer.php';
?>