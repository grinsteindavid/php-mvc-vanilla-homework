<?php
  require_once '../../controllers/ProfileController.php';
  $data = $controller->index();
  $title = "Profile";
  include "../header.php";
?>

<?php include "../navbar.php" ?>

<div class="container">
  <div class="row" style="margin: 35px 0 10px 0">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

    </div>
  </div>
</div>

<?php include "../footer.php" ?>
