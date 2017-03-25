<a class="btn btn-primary" data-toggle="modal" href='#create-event'>Create</a>

<div class="table-responsive">
  <table class="table table-hover table-condensed">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Created at</th>
        <th>Controls</th>
      </tr>
    </thead>
    <tbody>
      <?php if ($data['events']): ?>
        <?php foreach ($data['events'] as $event): ?>
          <tr>
            <td><?= $event['id'] ?></td>
            <td>
              <a href="_get/show_event.php?id=<?= $event['id'] ?>"><?= $event['name'] ?></a>
            </td>
            <td><?= $event['created_at'] ?></td>
            <td>
              <a href="_get/destroy_event.php?id=<?= $event['id'] ?>" class="btn btn-xs btn-danger">
                <i class="fa fa-times-circle"></i>
              </a>
            </td>
          </tr>
        <?php endforeach ?>
      <?php endif ?>
    </tbody>
  </table>
</div>

<?php include '../modals/create_event.php'; ?>
