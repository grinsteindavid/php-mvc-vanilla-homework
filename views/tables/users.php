<div class="table-responsive">
  <table class="table table-hover table-condensed">
    <thead>
      <tr>
        <th>ID</th>
        <th>Email</th>
        <th>Password</th>
      </tr>
    </thead>
    <tbody>
      <?php if ($data['clients']): ?>
        <?php foreach ($data['clients'] as $client): ?>
          <tr>
            <td><?= $client['id'] ?></td>
            <td><?= $client['email'] ?></td>
            <td><?= $client['password'] ?></td>
          </tr>
        <?php endforeach ?>
      <?php endif ?>
    </tbody>
  </table>
</div>
