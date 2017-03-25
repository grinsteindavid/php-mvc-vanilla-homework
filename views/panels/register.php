<div class="panel panel-primary" style="border: 0;">
  <div class="panel-body">
    <?php include '../forms/register.php'; ?>
  </div>
  <div class="panel-footer">
    <button type="button" class="btn btn-primary" id="register">Register</button>
  </div>
</div>

<script type="text/javascript">
  $('#register').click(function() {
    $('.panel-body').find('form > [type="submit"]').click();
  })
</script>
