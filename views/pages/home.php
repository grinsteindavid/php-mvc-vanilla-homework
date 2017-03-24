<?php
  require_once '../../controllers/HomeController.php';
  $data = $homeController->index();
	$title = "HOME";
  include "../header.php";
?>

<?php include "../navbar.php" ?>

<div class="container">

</div>

<?php include "../footer.php" ?>
