<?php

class Connection
{
  public $db;

  public function __construct()
  {
    $host = "localhost";
    $user = "admin";
    $password = "admin";
    $database = "ciudad_konecta";
    $port = 3306;

    // Create connection
    $this->db = new mysqli($host, $user, $password, $database, $port);

    // Check connection
    if ($this->db->connect_error) {
      die("Connection failed: " . $this->db->connect_error);
    }
  }
}
