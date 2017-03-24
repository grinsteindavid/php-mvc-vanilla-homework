<a class="btn btn-primary" data-toggle="modal" href='#create-event'>Create</a>
<div class="table-responsive">
  <table class="table table-hover table-condensed">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Created at</th>
      </tr>
    </thead>
    <tbody>
      <?php if ($data['events']): ?>
        <?php foreach ($data['events'] as $event): ?>
          <tr>
            <td><?= $event['id'] ?></td>
            <td><?= $event['name'] ?></td>
            <td><?= $event['created_at'] ?></td>
          </tr>
        <?php endforeach ?>
      <?php endif ?>
    </tbody>
  </table>
</div>

<?php include '../modals/create_event.php'; ?>
