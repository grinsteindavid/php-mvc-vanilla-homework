<?php
  require_once '../../controllers/HomeController.php';
  $data = $homeController->index();
	$title = "HOME";
  include "../header.php";
?>

<div class="container">
  <div class="header">
  	<ul class="nav nav-pills pull-right">
  	  <li class="active"><a href="home.php">Home</a></li>
  	  <li><a href="#">About</a></li>
  	  <li><a href="contact.php">Contact</a></li>
  	</ul>
  	<h3 class="text-muted">jquery proj</h3>
  </div>

  <div class="jumbotron">
    <?php include "../tables/user.php"; ?>

    <h2>random value1: <?= $data['value1'] ?></h2>
    <h2>random value2: <?= $data['value2'] ?></h2>
  	<p class="lead">Always a pleasure scaffolding your apps.</p>
  	<p><a class="btn btn-lg btn-success" href="#">Splendid!</a></p>
  </div>

  <div class="row marketing">
	<div class="col-lg-6">
	  <h4>HTML5 Boilerplate</h4>
	  <p>HTML5 Boilerplate is a professional front-end template for building fast, robust, and adaptable web apps or sites.</p>
	</div>
  </div>

  <div class="footer">
	<p>♥ from the Yeoman team</p>
  </div>
</div>

<?php include "../footer.php"; ?>
