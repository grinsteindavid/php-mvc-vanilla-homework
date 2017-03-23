<?php
require_once 'BaseController.php';
require_once '/../models/User.php';

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
    //(new User)->insert(['email' => '12345@email.com', 'password' => $this->str_random()]);
    //(new User)->destroy(2);
    //(new User)->find(2);
    (new User)->update(2, ['password' => $this->str_random()]);
    $data['clients'] = (new User())->all();
    $data['value1'] = $this->str_random();
    $data['value2'] = $this->str_random();
    set_session('alert-success', 'It works!');

    return $data;
    //$this->redirect('contact');
  }
}

$homeController = new HomeController();
