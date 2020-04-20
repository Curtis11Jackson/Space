<?php

require '../vue/header.php';

?>


<h1 style="margin-top: 19vw;">Update Mineral</h1>

<form>
  <div class="row" style="margin-top: 2vw;">
    <div class="col">
      <input type="text" id=name style="margin-left: 3vw; width: 40vw" class="form-control" placeholder="mineral name" >
    </div>
    <div class="col">
      <input type="text" id=mineral style="margin-left: 3vw; margin-right: 3vw; width: 40vw"class="form-control" placeholder="mineral classification">
    </div>

    <button type="submit" style ="margin-right: 3vw;"class="btn btn-primary">Add mineral</button>
  </div>
</form>







<?php

require '../vue/footer.php';

 ?>
