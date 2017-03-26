<?php
  require_once '../../controllers/EventController.php';
  $data = $controller->index();
  $title = "Events";
  include "../header.php";
?>

<?php include "../navbar.php" ?>

<div class="container">
  <div class="row" style="margin: 35px 0 10px 0">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <?php include "../tables/events.php" ?>
    </div>
  </div>
</div>

<?php include "../footer.php" ?>
