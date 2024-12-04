<?php
require 'config.php';

try {
    $pdo = config::getConnexion();

    if (isset($_GET['id_evenement']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
        $id_evenement = (int)$_GET['id_evenement'];
        $id_user = (int)$_POST['id_user'];
        $password = $_POST['password'];

        // Validate user credentials
        $userQuery = "SELECT * FROM utilisateurs WHERE id_user = :id_user AND mot_de_passe = :password";
        $userStmt = $pdo->prepare($userQuery);
        $userStmt->bindParam(':id_user', $id_user, PDO::PARAM_INT);
        $userStmt->bindParam(':password', $password, PDO::PARAM_STR);
        $userStmt->execute();
        $user = $userStmt->fetch();

        if (!$user) {
            die("Invalid credentials.");
        }

        // Check if already registered
        $alreadyRegisteredQuery = "SELECT * FROM inscription WHERE id_evenement = :id_evenement AND id_user = :id_user";
        $alreadyRegisteredStmt = $pdo->prepare($alreadyRegisteredQuery);
        $alreadyRegisteredStmt->bindParam(':id_evenement', $id_evenement, PDO::PARAM_INT);
        $alreadyRegisteredStmt->bindParam(':id_user', $id_user, PDO::PARAM_INT);
        $alreadyRegisteredStmt->execute();
        $alreadyRegistered = $alreadyRegisteredStmt->fetch();

        if ($alreadyRegistered) {
            echo "You are already registered for this event.";
        } else {
            // Check capacity
            $capacityQuery = "SELECT COUNT(*) as total FROM inscription WHERE id_evenement = :id_evenement";
            $capacityStmt = $pdo->prepare($capacityQuery);
            $capacityStmt->bindParam(':id_evenement', $id_evenement, PDO::PARAM_INT);
            $capacityStmt->execute();
            $currentRegistrations = $capacityStmt->fetchColumn();

            $eventQuery = "SELECT capacité_maximale FROM evénements WHERE id_evenement = :id_evenement";
            $eventStmt = $pdo->prepare($eventQuery);
            $eventStmt->bindParam(':id_evenement', $id_evenement, PDO::PARAM_INT);
            $eventStmt->execute();
            $eventCapacity = $eventStmt->fetchColumn();

            if ($currentRegistrations >= $eventCapacity) {
                echo "Event is fully booked.";
            } else {
                // Register user
                $insertQuery = "INSERT INTO inscription (id_evenement, id_user) VALUES (:id_evenement, :id_user)";
                $insertStmt = $pdo->prepare($insertQuery);
                $insertStmt->bindParam(':id_evenement', $id_evenement, PDO::PARAM_INT);
                $insertStmt->bindParam(':id_user', $id_user, PDO::PARAM_INT);
                $insertStmt->execute();

                echo "Registration successful!";
            }
        }
    } elseif (isset($_GET['id_evenement'])) {
        $id_evenement = (int)$_GET['id_evenement'];
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Event Registration</title>
        </head>
        <body>
            <h1>Register for Event</h1>
            <form method="POST">
                <input type="hidden" name="id_evenement" value="<?= $id_evenement; ?>">
                <label for="id_user">User ID:</label>
                <input type="number" name="id_user" id="id_user" required><br>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" required><br>
                <button type="submit">Register</button>
            </form>
        </body>
        </html>
        <?php
    } else {
        echo "Invalid request.";
    }
} catch (Exception $e) {
    die("Error: " . $e->getMessage());
}
?>
