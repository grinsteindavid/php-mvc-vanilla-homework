<form action="_post/voucher_create.php" method="POST" role="form">

  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" name="name" required>
  </div>

  <div class="form-group">
    <label>Description</label>
    <textarea class="form-control" rows="5" name="description" required></textarea>
  </div>

  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
  <button type="button" class="btn btn-primary" sweet-alert="form">Save changes</button>
</form>
