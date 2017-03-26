<?php
require_once 'helpers.php';
require_once '/../models/User.php';

Class BaseController {
	public $redirect_to = 'login';

	public function __construct()
  {
    session_start();
  }

	public function str_random($length = 10)
	{
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomString;
	}

	public function redirect($url)
	{
		if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
			$uri = 'https://';
		} else {
			$uri = 'http://';
		}
		$uri .= $_SERVER['HTTP_HOST'];

		session_regenerate_id(true);
		header('Location: '.$uri.'/php-mvc/views/pages/'.$url.'.php');
		session_write_close();
		exit();
	}

	public function abort()
	{
		header('HTTP/1.1 503 Service Temporarily Unavailable');
		header('Status: 503 Service Temporarily Unavailable');
		exit();
	}

	public function authorize()
	{
		if (isset($_COOKIE['user'])) {
			$token = $_COOKIE['user'];
			$user = (new User)->where('token', $token);
			if ($user) {
				return true;
			} else {
				return $this->redirect($this->redirect_to);
			}
		} else {
			$this->redirect($this->redirect_to);
		}
	}

	public function authenticate($email, $password)
	{
		$user = (new User)->where('email', $email);
		if ($user[0]['password'] === $password) {
			return $user[0]['token'];
		} else {
			return false;
		}
	}

	public function is_auth()
	{
		if (isset($_COOKIE['user']) && $_COOKIE['user'] !== 'null') {
			return $this->redirect($this->redirect_to);
		}
	}

	public function is_login()
	{
		if (isset($_COOKIE['user']) && $_COOKIE['user'] !== 'null') {
			return true;
		}
	}

}
