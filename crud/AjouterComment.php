<?php
require '../identifier.php';
require '../chargeauto.php';
require '../vue/header.php';

$monLieuRepo = new LieuRepository($db);

$tabloLieu = $monLieuRepo->getListName();
?>


<div class="banner">
    <h1 style="margin-bottom:4vh">Add a comment</h1>
</div>

<form class="w-75" method="POST" action="ScriptAjoutComment.php" style="margin:auto;">
    <div class="form-group">
        <label for="text" style="color:white; background-color:black;">Write about your experience</label>
        <input type="text" id="text" name="text" class="form-control" placeholder="Please share your thoughts">
    </div>
    <div class="form-group">
        <label for="date" style="color:white; background-color:black;">Date of your visit</label>
        <input type="date" id="date" name="date" class="form-control" placeholder="When did you visit ?">
    </div>
    <div class="form-group">
        <label for="user" style="color:white; background-color:black;">Your Pseudo</label>
        <input type="text" id="user" name="user" class="form-control" placeholder="Write your Pseudo">
    </div>
    <div class="form-group">
        <label for="inputState" style="color:white; background-color:black;">Place where the mineral is</label>
        <select id="inputState" class="form-control" name="lieu">
            <?php $i = 1;
            foreach ($tabloLieu as $Lieu) {
                echo "<option value=$i>" . $Lieu['nom_lieu'] . "</option>";
                $i++;
            }
            ?>
        </select>

        <div style="width:12%;margin:auto;">
            <button type="submit" class="btn btn-primary" style="margin:auto;">Add your comment</button>
        </div>
</form>


<?php
require '../vue/footer.php';
?>