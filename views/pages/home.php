<?php
  require_once '../../controllers/HomeController.php';
  $data = $homeController->index();
	$title = "HOME";
  include "../header.php";
?>

<?php include "../navbar.php" ?>

<div class="container">

  <div class="jumbotron">
    <?php include "../tables/users.php" ?>

    <h2>random value1: <?= $data['value1'] ?></h2>
    <h2>random value2: <?= $data['value2'] ?></h2>
  </div>
</div>

<?php include "../footer.php" ?>
