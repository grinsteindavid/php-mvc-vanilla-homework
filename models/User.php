<?php
require_once 'BaseModel.php';

class User extends BaseModel {
  public $table = 'users';

  public function events($user_id)
  {
    return $this->many_to_many('user_event', 'user_id', $user_id, 'events','event_id');
  }

  public function vouchers($user_id)
  {
    return $this->many_to_many('user_voucher', 'user_id', $user_id, 'vouchers', 'voucher_id');
  }
}
