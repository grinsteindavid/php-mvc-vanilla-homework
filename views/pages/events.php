<?php
  require_once '../../controllers/EventController.php';
  $data = $eventController->index();
  $title = "Events";
  include "../header.php";
?>

<?php include "../navbar.php" ?>

<div class="container">
  <?php include "../tables/events.php" ?>
</div>

<?php include "../footer.php" ?>
