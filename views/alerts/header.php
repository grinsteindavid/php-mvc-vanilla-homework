<div class="container-fluid" style="padding:20px 0 0 0;margin:0">
  <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2">

    <?php if (session_has('alert-success')): ?>
      <div class="alert alert-success alert-dismissable fade in">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <i class="fa fa-check" aria-hidden="true"></i>
        <strong>Success: </strong> <?= get_session('alert-success') ?>
      </div>
    <?php endif ?>

    <?php if (session_has('alert-info')): ?>
      <div class="alert alert-info alert-dismissable fade in">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <i class="fa fa-info-circle" aria-hidden="true"></i>
        <strong>Info: </strong> <?= get_session('alert-info') ?>
      </div>
    <?php endif ?>

    <?php if (session_has('alert-warning')): ?>
      <div class="alert alert-warning alert-dismissable fade in">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
        <strong>Warning: </strong> <?= get_session('alert-warning') ?>
      </div>
    <?php endif ?>

    <?php if (session_has('alert-danger')): ?>
      <div class="alert alert-danger alert-dismissable fade in">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
        <strong>Danger: </strong> <?= get_session('alert-danger') ?>
      </div>
    <?php endif ?>

  </div>
</div>
