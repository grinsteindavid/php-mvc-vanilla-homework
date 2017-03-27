<div class="panel panel-primary" style="border: 0;">
  <div class="panel-heading">
    <h1 class="panel-title text-center" style="font-size: 24px">
      <?= $data['event']['name'] ?>
      <span class="pull-right"><?= $data['event']['created_at'] ?></span>
    </h1>
  </div>
  <div class="panel-body text-center" style="padding: 10px 20px 10px 20px; word-break: break-all">
    <i class="fa fa-calendar" style="font-size: 15rem"></i>
  </div>
  <div class="panel-footer text-center">
    <?= $data['event']['description'] ?>
  </div>
</div>
