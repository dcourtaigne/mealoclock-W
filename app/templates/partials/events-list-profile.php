<?php
$eventDate=explode(' ',$event['dateFR']);
?>

<li class="row">
  <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    <strong class="h3"><?= $this->e($eventDate[0])?></strong></br><?= $this->e($eventDate[1])?>
  </div>

  <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
      <h3><?= $this->e($event['event_title'])?></h3>
      <p><?= $this->e($event['event_time'])?></p>
      <p>Chez <a href="#"><?= $this->e($userName)?></a>, Paris <?= $this->e($event['event_location'])?></p>
  </div>
</li>

<hr class="bordeauNav">
