<?php
require '../../config.php';
require_once '../../model/Formulaire.php';
include_once '../../Controller/FormulaireC.php';

session_start();

$c = new FormulaireC();
$id = intval($_GET['id']);
if (isset($id)) {
     // Sanitize ID input

    // Query to fetch the complaint response
    $complaint = $c->showComplaintbycomplaint($id);

    if ($complaint) {
        // Check if the complaint has an attachment (file)
        $fileUrl = isset($complaint['file']) ? 'http://localhost/ReProjet/uploads/' . $complaint['file'] : null;


        echo json_encode([
            'desc' => $complaint['description'] ?? 'No description available', // Use 'description' instead of 'rep'
            'file' => $fileUrl  // Return file if available
        ]);
    } else {
        echo json_encode(['error' => 'Complaint not found or no response available.']);
    }
} else {
    echo json_encode(['error' => 'No complaint ID provided.']);
}
?>