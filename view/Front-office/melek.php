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
        // Query to fetch related description (assuming this function works as expected)
        $descc = $c->showcompbyres($complaint['id_rec']); 

        // Check if the file exists and base64 encode it if it does
        $fileContent = isset($descc['file']) && !empty($descc['file']) ? base64_encode($descc['file']) : null;

        // Prepare the response in JSON format
        echo json_encode([
            'description' => $descc['description'] ?? 'No response available',  // Description
            'file' => $fileContent ? 'data:image/jpeg;base64,' . $fileContent : null, // Image (base64 encoded)
            'rep' => $complaint['rep'] ?? 'No response available', // Response
        ]);
    } else {
        echo json_encode(['error' => 'Complaint not found or no response available.']);
    }
} else {
    echo json_encode(['error' => 'No complaint ID provided.']);
}

?>
