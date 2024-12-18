<?php
require '..\..\config.php'; // Replace with your database connection file

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get id_inscription from POST request
    $id_inscription = intval($_POST['id_inscription']);

    try {
        // Establish database connection
        $pdo = config::getConnexion();

        // Prepare DELETE query
        $query = "DELETE FROM inscription WHERE id_inscription = :id_inscription";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':id_inscription', $id_inscription, PDO::PARAM_INT);

        // Execute query
        if ($stmt->execute()) {
            // Redirect back to the main page with a success message
            header("Location: eventreg.php?message=success");
            exit;
        } else {
            echo "Error deleting registration.";
        }
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
