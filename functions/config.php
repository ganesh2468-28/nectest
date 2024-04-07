<?php
// Database connection parameters
$host = 'localhost';
$dbname = 'login_system';
$username = 'root';
$password = '';

// Create PDO instance
$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
?>
