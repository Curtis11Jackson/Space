<?php

require '../vue/header.php';

?>


<h1 style="margin-top: 19vw;">Update Outils</h1>

<form>
  <div class="row" style="margin-top: 2vw;">
    <div class="col">
      <input type="text" id=name style="margin-left: 3vw; width: 40vw" class="form-control" placeholder="Tool name" >
    </div>
    <div class="col">
      <input type="text" id=utility style="margin-left: 3vw; margin-right: 3vw; width: 40vw"class="form-control" placeholder="Utility of tool">
    </div>

    <button type="submit" style ="margin-right: 3vw;"class="btn btn-primary">Add tool</button>
  </div>
</form>







<?php

require '../vue/footer.php';

 ?>
