<?php
// getComplaintResponses.php

require '../../config.php'; // Include your database configuration
require_once '../../model/Formulaire.php';
include_once '../../Controller/FormulaireC.php'; // Include the controller or model that handles complaints

$complaintController = new FormulaireC(); // Assuming the controller is named FormulaireC

// Get the complaint ID from the query string
$complaintId = $_GET['id'];

// Fetch the responses using the showreponse method
$rep = $complaintController->showreponse($complaintId);

// Prepare the response text to return
$responseText = '';
if (!empty($rep)) {
    foreach ($rep as $response) {
        // Output the complaint response stored in 'contenu'
        $responseText .= htmlspecialchars($response['contenu']) . "<br>"; // Append each response stored in 'contenu'
    }
} else {
    $responseText = "No responses available."; // Default message if no responses
}

// Return the response as a JSON object
echo json_encode(['responses' => $responseText]);
?>
