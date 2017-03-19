<?php

class BaseModel
{
	public $db;
	public $table;

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

	public function build($sql)
	{
		$result = $this->db->query($sql);
		$data = null;
		for ($i = 0; $i < $result->num_rows; $i++) {
			$data[$i] = $result->fetch_assoc();
		}
		return $data;
	}

	public function all()
	{
		$sql = "SELECT * FROM ".$this->table.";";
		return $this->build($sql);
	}

	public function find($id)
	{
		$sql = "SELECT * FROM ".$this->table." WHERE id = ".$id.";";
		return $this->build($sql);
	}

	public function where($key, $value)
	{
		$sql = "SELECT * FROM ".$this->table." WHERE ".$key." = ".$value.";";
		return $this->build($sql);
	}

	public function whereNot($key, $value)
	{
		$sql = "SELECT * FROM ".$this->table." WHERE ".$key." <> ".$value.";";
		return $this->build($sql);
	}

	public function destroy($id)
	{
		$sql = "DELETE FROM ".$this->table." WHERE id = ".$id.";";
		return $this->db->query($sql);
	}
}
