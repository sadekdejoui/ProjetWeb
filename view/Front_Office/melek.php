<?php
// Database connection
require '../../config.php';
require_once '../../model/Formulaire.php';
include_once '../../Controller/FormulaireC.php';

session_start();

$c = new FormulaireC();

if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // Sanitize ID input

    // Query to fetch the complaint response
    $complaint = $c->showResponsebycomplaint($id);

    if ($complaint) {
        // Ensure 'rep' field is included in the result
        echo json_encode([
            'rep' => $complaint['rep'] ?? 'No response available' // Check if 'rep' exists
        ]);
    } else {
        echo json_encode(['error' => 'Complaint not found or no response available.']);
    }
} else {
    echo json_encode(['error' => 'No complaint ID provided.']);
}


?>
