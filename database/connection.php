<?php

class Connection 
{
	$DB_HOST = "localhost";
	$DB_USER = "admin";
	$DB_PASSWORD = "admin";
	$db;

	__construct() 
	{
		// Create connection
		$this->db = new mysqli($DB_HOST, $DB_USER, $DB_PASSWORD);

		// Check connection
		if ($this->db->connect_error) {
			die("Connection failed: " . $this->db->connect_error);
		}
	}
	
}
