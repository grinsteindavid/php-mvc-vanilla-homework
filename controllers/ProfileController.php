<?php
require_once 'BaseController.php';

/**
*
*/
class ProfileController extends BaseController
{

  public function __construct()
  {
    $this->authorize();
  }

  public function index()
  {
    $token = $_COOKIE['user'];
    $data['user'] = (new User)->where('token', $token)[0];
    return $data;
  }

  public function json_events()
  {
    $user = (new User)->where('token', request('token'))[0];
    $data = (new User)->events($user['id']);
    if ($data) {
      return json_encode($data);
    } else {
      return $this->abort();
    }
  }

  public function json_vouchers()
  {
    $user = (new User)->where('token', request('token'))[0];
    $data = (new User)->vouchers($user['id']);
    if ($data) {
      return json_encode($data);
    } else {
      return $this->abort();
    }
  }

}

$controller = new ProfileController();
