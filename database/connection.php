<?php
$DB_HOST = "localhost";
$DB_USER = "admin";
$DB_PASSWORD = "admin";

// Create connection
$db = new mysqli($DB_HOST, $DB_USER, $DB_PASSWORD);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
} 