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
    return null;
  }

}

$controller = new ProfileController();
