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
		$this->db->close();
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
		$status = $this->db->query($sql);
		$this->db->close();
		return $status;
	}

	public function insert($attributes)
	{
		$sql = "INSERT INTO ".$this->table." ";
		$sqlKeys = "(";
		$sqlValues = "VALUES (";
		$numAttributes = count($attributes);
		$counter = 1;
		foreach ($attributes as $key => $value) {
			if ($counter === $numAttributes) {
				$sqlKeys .= $key.")";
				$sqlValues .= "'".$value."')";
			} else {
				$sqlKeys .= $key.",";
				$sqlValues .= "'".$value."',";
			}
			$counter++;
		}
		$sql .= $sqlKeys." ".$sqlValues.";";
		$status = $this->db->query($sql);
		$this->db->close();
		return $status;
	}

	public function update($id, $attributes)
	{
		$sql = "UPDATE ".$this->table." SET ";
		$numAttributes = count($attributes);
		$counter = 1;
		foreach ($attributes as $key => $value) {
			if ($counter === $numAttributes) {
				$sql .= $key."= '".$value."'";
			} else {
				$sql .= $key."= '".$value."',";
			}
			$counter++;
		}
		$sql .= " WHERE id = ".$id.";";
		$status = $this->db->query($sql);
		$this->db->close();
		return $status;
	}
}
