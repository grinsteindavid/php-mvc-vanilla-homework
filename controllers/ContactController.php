<?php
require_once 'BaseController.php';

/**
*
*/
class ContactController extends BaseController
{

  public function __construct()
  {
    $this->authorize();
  }

  public function index()
  {

  }
}

$contactController = new ContactController();
