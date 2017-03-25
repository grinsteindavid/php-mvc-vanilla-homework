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
      <?php if ($data['vouchers']): ?>
        <?php foreach ($data['vouchers'] as $voucher): ?>
          <tr>
            <td><?= $voucher['id'] ?></td>
            <td>
              <a href="voucher_show.php?id=<?= $voucher['id'] ?>"><?= $voucher['name'] ?></a>
            </td>
            <td><?= $voucher['created_at'] ?></td>
            <td>
              <a href="_get/destroy_voucher.php?id=<?= $voucher['id'] ?>" class="btn btn-xs btn-danger">
                <i class="fa fa-times-circle"></i>
              </a>
              <a href="voucher_edit.php?id=<?= $voucher['id'] ?>" class="btn btn-xs btn-warning">
                <i class="fa fa-edit"></i>
              </a>
            </td>
          </tr>
        <?php endforeach ?>
      <?php endif ?>
    </tbody>
  </table>
</div>

<a class="btn btn-primary" data-toggle="modal" href='#create-voucher'>Create</a>

<?php include '../modals/voucher_create.php'; ?>
