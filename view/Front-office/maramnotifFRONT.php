<?php
// Database connection
require '../../config.php';
include_once '../../Controller/NotificationC.php';

session_start();

$c = new NotificationC();


    // Query to fetch complaint
    $response = $c->showNotifUser($id); // Correct variable name

    if ($response) {
        echo json_encode($response); // Return complaint as JSON
    } else {
        echo json_encode(['error' => 'response not found.']);
    }

?>