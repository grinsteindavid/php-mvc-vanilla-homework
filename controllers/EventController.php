<?php
require_once 'BaseController.php';
require_once '/../models/User.php';
require_once '/../models/Event.php';

$data = null;
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

  public function show()
  {
    $data['event'] = (new Event)->find(request('id'));
    if (!$data['event']) set_session('alert-warning', 'The event doesn\'t exist.');
    echo(file_get_contents("http://localhost:3000/php-mvc/views/pages/event_show.php"));
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
    return $this->redirect('event_index');
  }

  public function destroy()
  {
    $data['event'] = (new Event)->destroy(request('id'));
    if ($data['event']) {
      set_session('alert-success', 'Event deleted successfully.');
      return $this->redirect('event_index');
    } else {
      set_session('alert-warning', 'The event doesn\'t exist.');
      return $this->redirect('event_index');
    }
  }
}

$eventController = new EventController();
