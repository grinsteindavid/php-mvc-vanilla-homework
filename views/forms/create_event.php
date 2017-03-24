<form action="_post/create_event.php" method="POST" role="form">

  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" name="name" required>
  </div>

  <div class="form-group">
    <label>Description</label>
    <textarea class="form-control" rows="5" name="description" required></textarea>
  </div>

  <button type="submit" hidden></button>
</form>
