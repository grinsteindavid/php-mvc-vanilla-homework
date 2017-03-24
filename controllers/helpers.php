<?php

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
