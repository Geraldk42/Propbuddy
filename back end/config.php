<?php

$host = 'localhost'; // Database server
$dbname = 'property_manager'; // Database name
$username = 'root'; // Database username
$password = ''; // Database password (if any)

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

?>
