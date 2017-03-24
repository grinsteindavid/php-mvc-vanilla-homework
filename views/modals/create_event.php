<div class="modal fade" id="create-event">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Create new event</h4>
      </div>
      <div class="modal-body">
        <?php include '../forms/create_event.php'; ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="save-changes">Save changes</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
$(function() {
  $('#save-changes').click(function(event) {
    $('.modal-body').find('form > [type="submit"]').click();
  });
});
</script>
