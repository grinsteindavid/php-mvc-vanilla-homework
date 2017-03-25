<?php
require_once 'helpers.php';
require_once '/../models/User.php';

Class BaseController {
	public $redirect_to = 'home';

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

	public function authorize()
	{
		if (isset($_COOKIE['user'])) {
			$user = $_COOKIE['user'];
			$user = (new User)->find($user['id']);
			if (!$user) return $this->redirect($this->redirect_to);
			return true;
		} else {
			$this->redirect($this->redirect_to);
		}
	}

}
