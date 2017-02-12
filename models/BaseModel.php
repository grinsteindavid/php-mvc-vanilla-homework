<?php
require_once '../database/connection.php';

class BaseModel 
{
	$db;
	$table;
	
	__construct() 
	{
		$this->db = new Connection()->db;
	}
	
	public static function find($id) 
	{
		$sql = `SELECT * FROM `.$this->table. WHERE id = `.$id.`;
		return $this->db->query($sql);
	}

	public static function where($key, $value) 
	{
		$sql = `SELECT * FROM `.$this->table. WHERE `.$key.` = `.$value.`;
		return $this->db->query($sql);
	}

	public static function whereNot($key, $value) 
	{
		$sql = `SELECT * FROM `.$this->table. WHERE `.$key.` <> `.$value.`;
		return $this->db->query($sql);
	}

	public static function destroy($id) 
	{
		$sql = `DELETE FROM `.$this->table. WHERE id = `.$id.`;
		return $this->db->query($sql);
	}
}
