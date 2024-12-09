<?php
require '../../config.php';
require_once '../../model/Formulaire.php';
include_once '../../Controller/FormulaireC.php';

session_start();

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

$c = new FormulaireC();
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

header('Content-Type: application/json');  // Ensure content is returned as JSON

if ($id > 0) {
    $complaint = $c->showComplaintbycomplaint($id);

    if ($complaint) {
        // Check if a file exists and base64 encode if needed
        $fileData = !empty($complaint['file']) ? base64_encode($complaint['file']) : null;

        $response = [
            'desc' => $complaint['description'] ?? 'No description available',
            'file' => $fileData  // Sending the file data as base64 encoded string
        ];

        echo json_encode($response);  // Send the response as JSON
    } else {
        echo json_encode(['error' => 'Complaint not found or no response available.']);
    }
} else {
    echo json_encode(['error' => 'Invalid or missing complaint ID.']);
}
?>
