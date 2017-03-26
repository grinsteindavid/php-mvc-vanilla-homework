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
    $data['events'] = (new User)->events($data['user']['id']);
    $data['vouchers'] = (new User)->vouchers($data['user']['id']);
    return $data;
  }

}

$controller = new ProfileController();
