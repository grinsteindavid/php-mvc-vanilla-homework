<?php
require_once 'BaseModel.php';

class Event extends BaseModel {
  public $table = 'events';

  public function add_user($user_id, $event_id)
  {
    $this->table = 'user_event';
    return $this->insert(['user_id' => $user_id, 'event_id' => $event_id]);
  }
}
