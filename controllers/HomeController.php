<?php
require_once 'BaseController.php';
//require_once '../models/People.php';

/**
* 
*/
class HomeController extends BaseController
{
  
  function __construct()
  {
    # code...
  }

  public function test()
  {
    //$data['client'] = People::find(1);
    $data['value1'] = $this->str_random();
    $data['value2'] = $this->str_random();

    return $data;
  }
}

$homeController = new HomeController();
