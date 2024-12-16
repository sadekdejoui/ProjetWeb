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
    $complaint = $c->showComplaintbycomplaint($id); // Fetch complaint details

    if ($complaint) {
        $fileContent = null;
        $fileType = null;

        // Check if the 'file' attribute contains valid data
        if (!empty($complaint['file'])) {
            $fileContent = base64_encode($complaint['file']); // Encode file data to Base64
            $fileType = 'application/octet-stream'; // Default MIME type
        }

        // Prepare the response
        $response = [
            'nom' => $complaint['nom'] ?? '',
            'email' => $complaint['email'] ?? '',
            'telephone' => $complaint['telephone'] ?? '',
            'type_reclamation' => $complaint['type_reclamation'] ?? '',
            'description' => $complaint['description'] ?? '',
            'fileContent' => $fileContent, // Base64-encoded file content
            'fileType' => $fileType // MIME type
        ];

        echo json_encode($response);
    } else {
        echo json_encode(['error' => 'Complaint not found.']);
    }
} else {
    echo json_encode(['error' => 'No complaint ID provided.']);
}
?>
