<?php
require_once '../../config.php';
require_once '../../model/Formulaire.php';
include_once '../../Controller/FormulaireC.php';

// Initialize controller
$c = new FormulaireC();

// Retrieve the `id` and `message` from the URL
$id = $_GET['id'] ?? null;
$message = $_GET['message'] ?? ''; // Check if 'message' is set

if ($id) {
    // Approve complaint and add a response
    $c->approveComplaint($id);
    $c->reponseComplaint($id, $message);
}
// Optionally, redirect to another page
header("Location: ./REC_FORMBackOffice.php");
 exit;
?>
