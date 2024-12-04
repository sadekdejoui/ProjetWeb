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

        // Check if registered
        $registrationQuery = "SELECT * FROM inscription WHERE id_evenement = :id_evenement AND id_user = :id_user";
        $registrationStmt = $pdo->prepare($registrationQuery);
        $registrationStmt->bindParam(':id_evenement', $id_evenement, PDO::PARAM_INT);
        $registrationStmt->bindParam(':id_user', $id_user, PDO::PARAM_INT);
        $registrationStmt->execute();
        $registered = $registrationStmt->fetch();

        if (!$registered) {
            echo "You are not registered for this event.";
        } else {
            // Cancel registration
            $deleteQuery = "DELETE FROM inscription WHERE id_evenement = :id_evenement AND id_user = :id_user";
            $deleteStmt = $pdo->prepare($deleteQuery);
            $deleteStmt->bindParam(':id_evenement', $id_evenement, PDO::PARAM_INT);
            $deleteStmt->bindParam(':id_user', $id_user, PDO::PARAM_INT);
            $deleteStmt->execute();

            echo "Registration canceled successfully.";
        }
    } elseif (isset($_GET['id_evenement'])) {
        $id_evenement = (int)$_GET['id_evenement'];
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Cancel Registration</title>
        </head>
        <body>
            <h1>Cancel Registration</h1>
            <form method="POST">
                <input type="hidden" name="id_evenement" value="<?= $id_evenement; ?>">
                <label for="id_user">User ID:</label>
                <input type="number" name="id_user" id="id_user" required><br>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" required><br>
                <button type="submit">Cancel Registration</button>
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
