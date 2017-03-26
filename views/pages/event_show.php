<?php
  require_once '../../controllers/EventController.php';
  $data = $controller->show();
  $title = "Event - " . ($data['event']['name']? $data['event']['name'] : 'not found.');
  include "../header.php";
?>

<?php include "../navbar.php" ?>

<div class="container">
  <div class="row" style="margin: 35px 0 10px 0">
    <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
      <?php include '../panels/event_show.php'; ?>
    </div>
  </div>
</div>

<?php include "../footer.php" ?>
