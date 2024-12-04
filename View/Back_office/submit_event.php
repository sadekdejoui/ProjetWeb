<?php
require 'config.php';
// Check if the form data was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $titre = $_POST['titre'];
    $description = $_POST['description'];
    $date = $_POST['date'];
    $heure = $_POST['heure'];
    $place = $_POST['place'];
    $capacite = $_POST['capacite'];

    // Validate form data (optional, but recommended)
    if (empty($titre) || empty($description) || empty($date) || empty($heure) || empty($place) || empty($capacite)) {
        die("All fields are required.");
    }

    // Insert data into the `evénements` table
    try {
        $pdo = config::getConnexion();
        $sql = "INSERT INTO evénements (titre, description, date, heure, emplacement, capacité_maximale)
                VALUES (:titre, :description, :date, :heure, :place, :capacite)";
        $stmt = $pdo->prepare($sql);
        
        // Bind parameters to prevent SQL injection
        $stmt->bindParam(':titre', $titre);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':date', $date);
        $stmt->bindParam(':heure', $heure);
        $stmt->bindParam(':place', $place);
        $stmt->bindParam(':capacite', $capacite);

        // Execute the statement
        if ($stmt->execute()) {
            header("Location: events.php?message=success");
        } else {
            echo "Failed to add the event.";
        }
    } catch (Exception $e) {
        die("Error: " . $e->getMessage());
    }
}
?>