<?php
require 'config.php'; // Replace with your database connection file

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get id_evenement and id_user from POST request
    $id_evenement = intval($_POST['id_evenement']);
    $id_user = intval($_POST['id_user']);

    try {
        // Establish database connection
        $pdo = config::getConnexion();

        // Prepare DELETE query
        $query = "DELETE FROM inscription WHERE id_evenement = :id_evenement AND id_user = :id_user";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':id_evenement', $id_evenement, PDO::PARAM_INT);
        $stmt->bindParam(':id_user', $id_user, PDO::PARAM_INT);

        // Execute query
        if ($stmt->execute()) {
            // Redirect back to the main page with a success message
            header("Location: events.php?message=success");
            exit;
        } else {
            echo "Error deleting registration.";
        }
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
