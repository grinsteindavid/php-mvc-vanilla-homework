<?php
  $title = "Event - " . ($data['event']['name']? $data['event']['name'] : 'not found.');
  include "../header.php";
?>

<?php include "../navbar.php" ?>
<?php include "../alerts/header.php" ?>

<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <h1><?= $data['event']['name'] ?></h1>
    </div>
  </div>
</div>

<?php include "../footer.php" ?>
