<?php
  require_once '../../controllers/AuthController.php';
  $controller->is_auth();
  $title = "User register";
  include "../header.php";
?>

<?php include "../navbar.php" ?>

<div class="container">
  <div class="row" style="margin: 35px 0 10px 0">
    <div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-3">
      <?php include '../panels/register.php'; ?>
    </div>
  </div>
</div>

<?php include "../footer.php" ?>
