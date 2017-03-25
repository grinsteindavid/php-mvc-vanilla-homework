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
    return null;
  }
}

$homeController = new HomeController();
