<?php

require_once 'config.php';

// Check if POST data exists
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Extract POST data
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    // Insert property into database
    $stmt = $pdo->prepare("INSERT INTO properties (name, description, price) VALUES (:name, :description, :price)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':price', $price);

    if ($stmt->execute()) {
        // Property added successfully
        $response['success'] = true;
        $response['message'] = 'Property added successfully';
    } else {
        // Failed to add property
        $response['success'] = false;
        $response['message'] = 'Failed to add property';
    }

    // Send JSON response
    header('Content-Type: application/json');
    echo json_encode($response);
}

?>
