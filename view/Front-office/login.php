<?php
session_start();

require '../../controller/user_controller.php'; // Include the controller

$user = null;
// Create an instance of the controller
$utilisateur = new utilisateur_controller();

if (isset($_POST["logemail1"]) && isset($_POST["logpass1"])) {
    // Sanitize inputs
    $email = filter_var($_POST["logemail1"], FILTER_SANITIZE_EMAIL);
    $password = htmlspecialchars($_POST["logpass1"], ENT_QUOTES, 'UTF-8');

    // Fetch user data by email
    $user = $utilisateur->showUser($email);
    
    
    if ($user) {
        $_SESSION['idaction'] = $user['id'];
        // Check if the password key exists
        if (password_verify($password,$user['psw'])) { 
            // Redirect based on user type
            $_SESSION['tyype']=$user['tyype']; // Assuming 'tyype' is a valid column in the DB
            $_SESSION['email'] = $user['email'];
            $_SESSION['tel4'] = $user['tel'];
            header('Location: login2.php');
            exit;
        }
        else {
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
                    alertBox.textContent = 'Password is incorrect!';
    
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
    } else {
        echo"
        
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
                alertBox.textContent = 'Email is incorrect!';

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
        
        exit;
    }
}
?>





