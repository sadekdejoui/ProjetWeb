<?php
session_start();


require '../../controller/user_controller.php'; // Include the controller

$user = null;
$user2 = null;
// Create an instance of the controller
$utilisateur = new utilisateur_controller();

$token=$_SESSION['token'];
$email=$_SESSION['forget_email'];

if (isset($_POST["logpass"]) && isset($_POST["token"])) {    
    if ($token==$_POST['token']) {
        $user2 = $utilisateur->showUser($email);

        $lastname =$user2['nom'];
        $name =$user2['prenom'];
        $date = $user2['date_nai'];
        $tel = (int)$user2['tel'];
        
        // Default photo value (current photo)
        $photo = $user2['photo'];
        //echo $photo."<br>";
    
        echo '<pre>';
        print_r($_FILES);
        echo '</pre>';
    
        // Handle photo upload if provided
        $photo = null; // Initialize $photo to null by default
    
        // Handle photo upload
        if (isset($_FILES['logphoto']) && $_FILES['logphoto']['error'] === UPLOAD_ERR_OK) {
            $tmpName = $_FILES['logphoto']['tmp_name'];
            $fileName = $_FILES['logphoto']['name'];
            $uploadDir = 'uploads/';
    
            // Ensure the upload directory exists
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }
    
            // Generate a unique file name to prevent overwriting
            $newFileName = $uploadDir . uniqid() . '-' . basename($fileName);
    
            // Move the uploaded file to the desired directory
            if (move_uploaded_file($tmpName, $newFileName)) {
                $photo = $newFileName; // Set $photo to the path of the uploaded file
                echo "File uploaded successfully: " . htmlspecialchars($newFileName) . "<br>";
            } else {
                echo "Failed to move the uploaded file.<br>";
            }
        } else {
            echo "No file uploaded or there was an upload error.<br>";
        }
        $password = password_hash($_POST["logpass"], PASSWORD_DEFAULT);
        
        // Create a new utilisateur object with updated details
        $user = new utilisateur(
            null,               // id: Do not update (leave as null)
            $name,              // prenom
            $lastname,          // nom
            $tel,               // tel
            null,               // email
            $password,               // psw
            null,               // tyype: Do not update
            new DateTime($date), // date_nai (date of birth)
            null,               // date_entre: Do not update
            null,               // date_insc: Do not update
            new DateTime(),     // date_mise (date of update)
            $photo              // photo (updated or existing)
        );
        $utilisateur->updateSelectedFields($user, $email);
        $actionId=$_SESSION['idaction'];
        $msg="Password changed";
        $utilisateur->logUploadActivity($actionId, $msg); // Assuming logUploadActivity is the function to log activity
        header('Location: login.html'); 
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
                alertBox.textContent = 'Jeton is incorrect!';

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
        $actionId=$_SESSION['idaction'];
        $msg="Failed login attempt";
        $utilisateur->logUploadActivity($actionId, $msg); // Assuming logUploadActivity is the function to log activity

        exit;
    }
}
?>





