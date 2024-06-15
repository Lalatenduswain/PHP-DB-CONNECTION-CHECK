<?php

// Database configuration
$host = '127.0.0.1';
$port = '3306';
$database = 'YourDBName';
$username = 'root';
$password = 'YourStrongPassword~!@996969';
$socket = '/var/run/mysqld/mysqld.sock';

// Connection string (DSN)
$dsn = "mysql:host=$host;port=$port;dbname=$database;charset=utf8mb4;unix_socket=$socket";

try {
    // Create a PDO instance
    $pdo = new PDO($dsn, $username, $password);

    // Set error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connected successfully to the database!";
} catch (PDOException $e) {
    echo "Could not connect to the database. Error: " . $e->getMessage();
}
