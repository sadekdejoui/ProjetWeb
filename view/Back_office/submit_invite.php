<?php
require '..\..\config.php';

// Check if the form data was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $idevent = $_POST['idevent'];
    $iduser = $_POST['iduser'];

    // Validate form data
    if (empty($idevent) || empty($iduser)) {
        die("All fields are required.");
    }

    try {
        $pdo = config::getConnexion();

        // Check if id_evenement exists in the `evénements` table
        $eventCheck = $pdo->prepare("SELECT COUNT(*) FROM evénements WHERE id_evenement = :id_evenement");
        $eventCheck->bindParam(':id_evenement', $idevent, PDO::PARAM_INT);
        $eventCheck->execute();
        $eventExists = $eventCheck->fetchColumn();

        if (!$eventExists) {
            die("The event ID does not exist.");
        }

        // Check if id_user exists in the `utilisateurs` table
        $userCheck = $pdo->prepare("SELECT COUNT(*) FROM utilisateur WHERE id = :id_user");
        $userCheck->bindParam(':id_user', $iduser, PDO::PARAM_INT);
        $userCheck->execute();
        $userExists = $userCheck->fetchColumn();

        if (!$userExists) {
            die("The user ID does not exist.");
        }

        // Check if the combination of id_evenement and id_user already exists in the `inscription` table
        $duplicateCheck = $pdo->prepare("SELECT COUNT(*) FROM inscription WHERE id_evenement = :id_evenement AND id_user = :id_user");
        $duplicateCheck->bindParam(':id_evenement', $idevent, PDO::PARAM_INT);
        $duplicateCheck->bindParam(':id_user', $iduser, PDO::PARAM_INT);
        $duplicateCheck->execute();
        $alreadyExists = $duplicateCheck->fetchColumn();

        if ($alreadyExists) {
            die("This user is already registered for the event.");
        }

        // Insert data into the `inscription` table
        $sql = "INSERT INTO inscription (id_evenement, id_user) 
                VALUES (:id_evenement, :id_user)";
        $stmt = $pdo->prepare($sql);

        // Bind parameters to prevent SQL injection
        $stmt->bindParam(':id_evenement', $idevent, PDO::PARAM_INT);
        $stmt->bindParam(':id_user', $iduser, PDO::PARAM_INT);

        // Execute the statement
        if ($stmt->execute()) {
            header("Location: eventreg.php?message=success");
        } else {
            echo "Failed to submit the invitation.";
        }
    } catch (Exception $e) {
        die("Error: " . $e->getMessage());
    }
}
?>
