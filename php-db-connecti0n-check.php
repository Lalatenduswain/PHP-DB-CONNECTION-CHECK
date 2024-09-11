<?php
// Change this to the path of your database.php if necessary
require '/opt/lampp/htdocs/app/config/database.php';

// Create a new connection using the database configuration
try {
    $db = new mysqli('localhost', 'root', 'YourStrongPassword', YourDB_Name);
    if ($db->connect_error) {
        die('Connect Error (' . $db->connect_errno . ') ' . $db->connect_error);
    }
    echo 'Connection successful!';
} catch (Exception $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
?>
