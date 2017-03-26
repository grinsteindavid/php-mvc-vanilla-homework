<div class="panel panel-primary" style="border: 0;">
  <div class="panel-heading">
    <h3 class="panel-title text-center"></h3>
  </div>
  <div class="panel-body text-center">
    <i class="fa fa-user-circle" style="font-size: 15rem"></i>
    <strong style="display:block;margin:25px 0 15px 0"><?= $data['user']['email'] ?></strong>
  </div>
  <div class="panel-footer">
    <h3 class="text-center">My Events</h3>
    <?php include '../carousels/events.php'; ?>

    <h3 class="text-center">My Vouchers</h3>
    <?php include '../carousels/vouchers.php'; ?>
  </div>
</div>
