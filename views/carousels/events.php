<?php if ($data['events']): ?>
  <div id="carousel-events" style="margin: 0 0 90px 0">
    <?php foreach ($data['events'] as $event): ?>
      <a href="event_show.php?id=<?= $event['id'] ?>" class="text-center">
        <div><i class="fa fa-user-circle" style="font-size: 15rem"></i></div>
      </a>
    <?php endforeach ?>
  </div>
<?php else: ?>
  <h3 class="text-center">There is not associated events.</h3>
<?php endif ?>



