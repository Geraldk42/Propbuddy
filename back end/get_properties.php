<?php

require_once 'config.php';

// Select all properties from database
$stmt = $pdo->query("SELECT * FROM properties");
$properties = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Send JSON response
header('Content-Type: application/json');
echo json_encode($properties);

?>
