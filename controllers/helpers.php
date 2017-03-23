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
