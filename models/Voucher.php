<?php
require_once 'BaseModel.php';

class Voucher extends BaseModel {
  public $table = 'vouchers';

  public function add_user($user_id, $voucher_id)
  {
    $this->table = 'user_voucher';
    return $this->insert(['user_id' => $user_id, 'voucher_id' => $voucher_id]);
  }
}
