<table class="table table-hover">
  <thead>
    <tr>
      <th>ID</th>
      <th>Email</th>
      <th>Password</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($data['clients'] as $client): ?>
      <tr>
        <td><?= $client['id'] ?></td>
        <td><?= $client['email'] ?></td>
        <td><?= $client['password'] ?></td>
      </tr>
    <?php endforeach ?>
  </tbody>
</table>