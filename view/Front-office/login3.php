<?php
session_start();

require '../../controller/user_controller.php';

$email=$_SESSION['email'] ;
$tyype=$_SESSION['tyype'] ;

$token= $_SESSION['jeton4'];

$utilisateur = new utilisateur_controller();

if($token == $_POST["logjeton"]){
    $actionId=$_SESSION['idaction'];
    $msg="Logged in";
    $utilisateur->logUploadActivity($actionId, $msg); // Assuming logUploadActivity is the function to log activity

    if ($tyype == "Professeur" || $tyype == "Etudiant") {
        header('Location: account.php');
        exit();
    } elseif ($tyype == "Admin") {
        $query = http_build_query(['email' => $user['email']]);
        header('Location: http://localhost/Projet%20Web/view/Back_office/admin.php');
        exit;
    }
} else {
    echo "
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Change the body background color
            document.body.style.backgroundColor = '#5f428';

            // Create a container for alerts if it doesn't exist
            let container = document.getElementById('notification-container');
            if (!container) {
                   container = document.createElement('div');
                container.id = 'notification-container';
                container.style.position = 'fixed';
                container.style.top = '10px';
                container.style.left = '50%';
                container.style.transform = 'translateX(-50%)';
                container.style.zIndex = '9999';
                container.style.width = '90%';
                container.style.maxWidth = '400px';
                document.body.appendChild(container);
            }

            // Create the alert element
            const alertBox = document.createElement('div');
            alertBox.style.padding = '15px 20px';
            alertBox.style.marginBottom = '10px';
            alertBox.style.borderRadius = '8px';
            alertBox.style.backgroundColor = '#ffd891';
            alertBox.style.color = '#102770';
            alertBox.style.boxShadow = '0 4px 8px rgba(0, 0, 0, 0.2)';
            alertBox.style.fontWeight = '600';
            alertBox.style.fontSize = '14px';
            alertBox.style.textAlign = 'center';
            alertBox.style.transition = 'opacity 0.5s ease';
            alertBox.textContent = 'jeton is incorrect!';

            // Add the alert to the container
            container.appendChild(alertBox);

            // Auto-dismiss the alert after 3 seconds
            setTimeout(() => {
                alertBox.style.opacity = '0';
                setTimeout(() => {
                    container.removeChild(alertBox);
                    // Go back to the previous page after alert is dismissed
                    window.history.back();
                }, 500); // Wait for fade-out transition to finish
            }, 3000);
        });
    </script>";
    // Assuming user id is stored in session
    $actionId=$_SESSION['idaction'];
    $msg="Failed login attempt";
    $utilisateur->logUploadActivity($actionId, $msg); // Assuming logUploadActivity is the function to log activity
    exit;
}











?>