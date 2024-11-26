<?php
// Database connection
require '../../config.php';
require_once '../../model/Formulaire.php';
include_once '../../Controller/FormulaireC.php';

session_start();

$c = new FormulaireC();

if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // Sanitize ID input

    // Query to fetch complaint
    $complaint = $c->showComplaintbycomplaint($id); // Correct variable name

    if ($complaint) {
        echo json_encode($complaint); // Return complaint as JSON
    } else {
        echo json_encode(['error' => 'Complaint not found.']);
    }
} else {
    echo json_encode(['error' => 'No complaint ID provided.']);
}
?>
