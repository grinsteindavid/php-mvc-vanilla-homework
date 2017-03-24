<?php
require_once 'BaseController.php';
require_once '/../models/User.php';
require_once '/../models/Event.php';

/**
*
*/
class EventController extends BaseController
{

  public function __construct()
  {
    # code...
  }

  public function index()
  {
    $data['events'] = (new Event)->all();
    return $data;
  }

  public function create()
  {
    $status = (new Event)->insert(
      ['name' => $_POST["name"], 'description' => $_POST["description"], 'created_at' => date("d/m/Y")]
    );
    if ($status) {
      set_session('alert-success', 'Event created successfully.');
    } else {
      set_session('alert-warning', 'Event could not be created.');
    }
    return $this->redirect('events');
  }
}

$eventController = new EventController();
