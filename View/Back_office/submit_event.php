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

    // Initialize the image path as NULL
    $imagePath = NULL;

    // Handle image upload if an image is selected
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $uploadDir = 'images/'; // Directory to store the uploaded image
        $imageName = basename($_FILES['image']['name']);
        $imagePath = $uploadDir . $imageName;

        // Validate image type (for example, allow only jpg, jpeg, png)
        $validImageTypes = ['image/jpeg', 'image/png', 'image/jpg'];
        $imageType = $_FILES['image']['type'];

        if (!in_array($imageType, $validImageTypes)) {
            die("Invalid image type. Only JPG, JPEG, and PNG are allowed.");
        }

        // Move the uploaded image to the directory
        if (move_uploaded_file($_FILES['image']['tmp_name'], $imagePath)) {
            echo "Image uploaded successfully.";
        } else {
            die("Failed to upload image.");
        }
    } else {
        echo "No image was uploaded.";
    }

    // Insert data into the `evénements` table
    try {
        $pdo = config::getConnexion();
        $sql = "INSERT INTO evénements (titre, description, date, heure, emplacement, capacité_maximale, image_path)
                VALUES (:titre, :description, :date, :heure, :place, :capacite, :imagePath)";
        $stmt = $pdo->prepare($sql);

        // Bind parameters to prevent SQL injection
        $stmt->bindParam(':titre', $titre);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':date', $date);
        $stmt->bindParam(':heure', $heure);
        $stmt->bindParam(':place', $place);
        $stmt->bindParam(':capacite', $capacite);
        $stmt->bindParam(':imagePath', $imagePath);

        // Execute the statement
        if ($stmt->execute()) {
            header("Location: allevent.php?message=success");
        } else {
            echo "Failed to add the event.";
        }
    } catch (Exception $e) {
        die("Error: " . $e->getMessage());
    }
}
?>
