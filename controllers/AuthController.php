<?php
require_once 'BaseController.php';

/**
*
*/
class AuthController extends BaseController
{

  public function __construct()
  {

  }

  public function login()
  {
    $this->is_auth();
    $token = $this->authenticate(request('email'), request('password'));
    if ($token) {
      $day = 86400;
      setcookie('user', $token, time() + ($day * 30), '/');
      return $this->redirect('profile');
    }
    set_session('alert-warning', 'Your user credentials provided were incorrect.');
    return $this->redirect('login');
  }

  public function logout()
  {
    if (isset($_COOKIE['user'])) {
      setcookie("user", 'null', -1, '/');
    }
    return $this->redirect($this->redirect_to);
  }

  public function register()
  {
    $this->is_auth();
    $token = null;
    while (true) {
      $token = $this->str_random(50);
      $users = (new User)->where('token', $token);
      if (!$users) {
        break;
      }
    }
    $status = (new User)->insert([
      'email' => request('email'), 'password' => request('password'), 'token' => $token, 'created_at' => date("d/m/Y")
    ]);
    if ($status) {
      $day = 86400;
      setcookie('user', $token, time() + ($day * 30), '/');
      return $this->redirect('profile');
    }
    set_session('alert-warning', 'Your user email credential provided already exist.');
    return $this->redirect('register');
  }
}

$controller = new AuthController();
