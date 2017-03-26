<form action="_post/event_update.php" method="POST" role="form">
  <input type="number" name="id" value="<?= $data['event']['id'] ?>" hidden>

  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" name="name" value="<?= $data['event']['name'] ?>" required>
  </div>

  <div class="form-group">
    <label>Description</label>
    <textarea class="form-control" rows="5" name="description" required><?= $data['event']['description'] ?></textarea>
  </div>

  <button type="button" class="btn btn-primary" sweet-alert="form">Send changes</button>
</form>
