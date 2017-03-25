<?php
require_once '/../database/Connection.php';

class BaseModel
{
	public $db;
	public $table;

	public function __construct()
	{
		$this->db = (new Connection())->db;
	}

	public function buildCollection($sql)
	{
		$result = $this->db->query($sql);
		$data = null;
		if ($result) {
			for ($i = 0; $i < $result->num_rows; $i++) {
				$data[$i] = $result->fetch_assoc();
			}
		}
		$this->db->close();
		return $data;
	}

	public function build($sql)
	{
		$result = $this->db->query($sql);
		if ($result) $result = $result->fetch_assoc();
		$this->db->close();
		return $result;
	}

	public function all()
	{
		$sql = "SELECT * FROM ".$this->table.";";
		return $this->buildCollection($sql);
	}

	public function find($id)
	{
		$sql = "SELECT * FROM ".$this->table." WHERE id = ".$id.";";
		return $this->build($sql);
	}

	public function first()
	{
		$sql = "SELECT id FROM ".$this->table." ORDER BY id ASC LIMIT 1;";
		return $this->build($sql);
	}

	public function last()
	{
		$sql = "SELECT id FROM ".$this->table." ORDER BY id DESC LIMIT 1;";
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
		$counter = 0;
		foreach ($attributes as $key => $value) {
			$counter++;
			if ($counter === $numAttributes) {
				$sqlKeys .= $key.")";
				$sqlValues .= "'".$value."')";
			} else {
				$sqlKeys .= $key.",";
				$sqlValues .= "'".$value."',";
			}
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
		$counter = 0;
		foreach ($attributes as $key => $value) {
			$counter++;
			if ($counter === $numAttributes) {
				$sql .= $key."= '".$value."'";
			} else {
				$sql .= $key."= '".$value."',";
			}
		}
		$sql .= " WHERE id = ".$id.";";
		$status = $this->db->query($sql);
		$this->db->close();
		return $status;
	}
}
