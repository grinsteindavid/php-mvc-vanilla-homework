<?php

function request($name)
{
  if (isset($_GET[$name])) {
    return $_GET[$name];
  } elseif (isset($_POST[$name])) {
    return $_POST[$name];
  } else {
    return null;
  }
}

function set_session($name, $value)
{
  $_SESSION[$name] = $value;
}

function get_session($name)
{
  return $_SESSION[$name];
}

function session_has($name)
{
  if (isset($_SESSION[$name])) {
    return true;
  } else {
    return false;
  }
}

function route_is($name)
{
  $uri = $_SERVER['SCRIPT_NAME'];
  $route = null;
  for ($i = strlen($uri) - 1; $i > 0; $i--) {
    if ($uri[$i] !== '/') {
      $route .= $uri[$i];
    } else {
      return (strrev($route) === $name);
    }
  }
}

function str_random($length = 10)
{
  $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $charactersLength = strlen($characters);
  $randomString = '';
  for ($i = 0; $i < $length; $i++) {
    $randomString .= $characters[rand(0, $charactersLength - 1)];
  }
  return $randomString;
}

function redirect($url)
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
