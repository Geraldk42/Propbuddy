<?php

require_once 'config.php';

// Check if POST data exists
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Extract POST data
    $id = $_POST['id'];

    // Delete property from database
    $stmt = $pdo->prepare("DELETE FROM properties WHERE id = :id");
    $stmt->bindParam(':id', $id);

    if ($stmt->execute()) {
        // Property deleted successfully
        $response['success'] = true;
        $response['message'] = 'Property deleted successfully';
    } else {
        // Failed to delete property
        $response['success'] = false;
        $response['message'] = 'Failed to delete property';
    }

    // Send JSON response
    header('Content-Type: application/json');
    echo json_encode($response);
}

?>
