<?php if ($data['vouchers']): ?>
  <div id="carousel-vouchers" style="margin: 0 0 60px 0">
    <?php foreach ($data['vouchers'] as $voucher): ?>
      <a href="voucher_show.php?id=<?= $voucher['id'] ?>" class="text-center">
        <div><i class="fa fa-user-circle" style="font-size: 15rem"></i></div>
      </a>
    <?php endforeach ?>
  </div>
<?php else: ?>
  <h3 class="text-center">There is not associated vouchers.</h3>
<?php endif ?>



