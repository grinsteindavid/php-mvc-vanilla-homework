<?php
require_once 'BaseController.php';

/**
*
*/
class HomeController extends BaseController
{

  public function __construct()
  {
    # code...
  }

  public function index()
  {
    //$_url .= $_SERVER['HTTP_HOST'];
    //$_url .= '/php-mvc/views';
    //var_dump($_url);
    //$day = 86400;
    //setcookie('user', 'working?', time() + ($day * 30), $_url);
    //var_dump($_COOKIE['user']);
    if (true) {
      // isset($_COOKIE['user'])
      //$user = (new User())->where('token', $token);
      //$data['user'] = $user[0];
      //return $data;
    }
    return null;
  }
}

$homeController = new HomeController();
