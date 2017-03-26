<?php
require_once 'BaseModel.php';

class User extends BaseModel {
  public $table = 'users';

  public function events($user_id)
  {
    return $this->join('user_event', 'user_id', $user_id);
  }

  public function vouchers($user_id)
  {
    return $this->join('user_voucher', 'voucher_id', $user_id);
  }
}
