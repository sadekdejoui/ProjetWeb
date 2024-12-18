<?php
// Database connection
require '../../config.php';
include_once '../../Controller/NotificationC.php';

session_start();

$c = new NotificationC();


    // Query to fetch complaint
    $complaint = $c->showNotifAdmin(); // Correct variable name

    if ($complaint) {
        echo json_encode($complaint); // Return complaint as JSON
    } else {
        echo json_encode(['error' => 'Complaint not found.']);
    }

?>
