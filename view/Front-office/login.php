<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';
require '../../controller/user_controller.php'; // Include the controller

$user = null;
// Create an instance of the controller
$utilisateur = new utilisateur_controller();

if (isset($_POST["logemail1"]) && isset($_POST["logpass1"])) {
    // Sanitize inputs
    $email = filter_var($_POST["logemail1"], FILTER_SANITIZE_EMAIL);
    $password = htmlspecialchars($_POST["logpass1"], ENT_QUOTES, 'UTF-8');

    if (isset($_POST["mdpoublie"])) {
        try {
            //Server settings
            $email->isSMTP();
            $email->Host = 'smtp.example.com'; // SMTP server
            $email->SMTPAuth = true;
            $email->Username = 'your_email@example.com';  // Your email address
            $email->Password = 'your_email_password'; // Your email password
            $email->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $email->Port = 587;
        
            //Recipients
            $email->setFrom('your_email@example.com', 'Mailer');
            $email->addAddress('recipient@example.com', 'Joe User'); // Add recipient
        
            //Content
            $email->isHTML(true);
            $email->Subject = 'Here is the subject';
            $email->Body    = 'This is the HTML message body <b>in bold!</b>';
            $email->AltBody = 'This is the plain text message body for non-HTML email clients';
        
            $email->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }

    // Fetch user data by email
    $user = $utilisateur->showUser($email);
    
    if ($user) {
        // Check if the password key exists
        if ($password==$user['psw']) { 
            // Redirect based on user type
            $tyype = $user['tyype']; // Assuming 'tyype' is a valid column in the DB
            $_SESSION['email'] = $user['email'];
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





