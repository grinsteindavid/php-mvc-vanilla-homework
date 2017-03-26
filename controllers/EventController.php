<?php
require_once 'BaseController.php';
require_once '/../models/Event.php';

/**
*
*/
class EventController extends BaseController
{

  public function __construct()
  {
    $this->authorize();
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
    return $data;
  }

  public function create()
  {
    $status = (new Event)->insert(
      ['name' => request('name'), 'description' => request('description'), 'created_at' => date("d/m/Y")]
    );
    if ($status) {
      set_session('alert-success', 'Event created successfully.');
    } else {
      set_session('alert-warning', 'Event could not be created.');
    }
    return $this->redirect('event_index');
  }

  public function edit()
  {
    $data['event'] = (new Event)->find(request('id'));
    if (!$data['event']) set_session('alert-warning', 'The event doesn\'t exist.');
    return $data;
  }

  public function update()
  {
    $data['event'] = (new Event)->update(request('id'), [
      'name' => request('name'), 'description' => request('description')
    ]);
    if ($data['event']) {
      set_session('alert-success', 'Event deleted successfully.');
    } else {
      set_session('alert-warning', 'The event doesn\'t exist.');
    }
    return $this->redirect('event_index');
  }

  public function destroy()
  {
    $data['event'] = (new Event)->destroy(request('id'));
    if ($data['event']) {
      set_session('alert-success', 'Event deleted successfully.');
    } else {
      set_session('alert-warning', 'The event doesn\'t exist.');
    }
    return $this->redirect('event_index');
  }
}

$controller = new EventController();
