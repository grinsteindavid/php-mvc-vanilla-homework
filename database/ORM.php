<?php

require 'connection.php';

function find($table, $id) {
	$sql = `SELECT * FROM `.$table. WHERE id = `.$id.`;
	$db->query($sql);
}

function where($table, $key, $value) {
	$sql = `SELECT * FROM `.$table. WHERE `.$key.` = `.$value.`;
	$db->query($sql);
}

function whereNot($table, $key, $value) {
	$sql = `SELECT * FROM `.$table. WHERE `.$key.` <> `.$value.`;
	$db->query($sql);
}

function destroy($table, $id) {
	$sql = `DELETE FROM `.$table. WHERE id = `.$id.`;
	$db->query($sql);
}