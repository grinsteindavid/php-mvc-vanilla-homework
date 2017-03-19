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
    $data['clients'] = (new User())->all();
    $data['value1'] = $this->str_random();
    $data['value2'] = $this->str_random();

    return $data;
    //$this->redirect('contact');
  }
}

$homeController = new HomeController();
