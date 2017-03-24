<?php
  require_once '../../controllers/ContactController.php';
  $data = $contactController->index();
  $title = "CONTACT";
  include "../header.php";
?>

<?php include "../navbar.php" ?>

<div class="container">
  <div class="jumbotron">
    <h1>contact</h1>
  </div>
</div>

<?php include "../footer.php" ?>
