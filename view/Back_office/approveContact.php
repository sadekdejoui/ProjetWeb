<?php
ob_clean();  // Clean any previous output
header('Content-Type: application/json');  // Set the response type to JSON

require_once '../../config.php';
require_once '../../model/Formulaire.php';
include_once '../../Controller/FormulaireC.php';
include_once '../../Controller/NotificationC.php';

// Initialize controllers
$c = new FormulaireC();
$notif = new NotificationC();
$sent_by = 0; // Default sender ID
$id_user = 0; // Should be the logged-in user ID
$contenu = "Your Complaint has been approved"; // Notification content

// Retrieve the `id` (complaint ID) and `message` (response) from the POST request
$id = $_POST['complaint_id'] ?? null;
$message = $_POST['response'] ?? '';

// Validate input
if ($id && $message) {
    try {
        // Approve the complaint and insert response
        $c->approveComplaint($id);
        $lastId=$c->reponseComplaint($id, $message);
        $lastId=$notif->addNotification($contenu,$id_user,$sent_by,$id,$lastId);
        // Send a notification (optional)
        //$notif->sendNotification($id_user, $sent_by, $contenu);

        // Return a success response
        echo json_encode(['success' => true, 'message' => 'Response submitted successfully']);
    } catch (Exception $e) {
        // Return an error response if something goes wrong
        echo json_encode(['success' => false, 'message' => 'Error: ' . $e->getMessage()]);
    }
} else {
    // If input is invalid, return an error
    echo json_encode(['success' => false, 'message' => 'Invalid request or missing data']);
}
?>
