<div class="panel panel-primary" style="border: 0;">
  <div class="panel-heading">
    <h3 class="panel-title text-center">Log in to your account</h3>
  </div>
  <div class="panel-body">
    <?php include '../forms/login.php'; ?>
  </div>
  <div class="panel-footer">
    <button type="button" class="btn btn-primary" id="login">Login</button>
  </div>
</div>

<script type="text/javascript">
  $('#login').click(function() {
    $('.panel-body').find('form > [type="submit"]').click();
  })
</script>
