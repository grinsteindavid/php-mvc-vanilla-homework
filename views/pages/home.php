<?php
  require_once '../../controllers/HomeController.php';
  $data = $homeController->index();
	$title = "HOME";
  include "../header.php";
?>

<?php include "../navbar.php" ?>

<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

    </div>
  </div>
</div>

<?php include "../footer.php" ?>
