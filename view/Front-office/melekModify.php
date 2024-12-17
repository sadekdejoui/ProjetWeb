<?php
require '../../config.php';
require_once '../../model/Formulaire.php';
include_once '../../Controller/FormulaireC.php';

session_start();

ob_clean(); // Clean any previous output
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);

    $description = isset($data['description']) ? htmlspecialchars($data['description']) : null;
    $id = isset($data['id']) ? intval($data['id']) : null;

    if ($id && $description) {
        try {
            // Initialize FormulaireC and call the update function
            $formulaireC = new FormulaireC();
            $formulaireC->addchanges($id, $description);

            // Send success response
            echo json_encode(['success' => true, 'message' => 'Complaint updated successfully!']);
        } catch (Exception $e) {
            // Handle errors from the database or function
            echo json_encode(['error' => 'Failed to update complaint: ' . $e->getMessage()]);
        }
    } else {
        echo json_encode(['error' => 'Invalid or missing data']);
    }
} else {
    echo json_encode(['error' => 'Invalid request method']);
}
?>
