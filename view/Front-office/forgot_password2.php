<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';
require '../../controller/user_controller.php'; // Include the controller

$user = null;
// Create an instance of the controller
$utilisateur = new utilisateur_controller();

$mail = new PHPMailer(true);  // Instantiate PHPMailer object

if (isset($_POST["logemail1"])) {
    // Sanitize inputs
    $email = filter_var($_POST["logemail1"], FILTER_SANITIZE_EMAIL);

    // Fetch user data by email
    $user = $utilisateur->showUser($email);
    
    if ($user) {
        try {
            //Server settings
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';  // Gmail SMTP server
            $mail->SMTPAuth = true;
            $mail->Username = 'lola07517@gmail.com';  // Your Gmail address
            $mail->Password = 'bdhv wqeu ypiu wgky'; // Your generated App Password (from Google)
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;  // Use TLS encryption
            $mail->Port = 587;  // SMTP port for TLS (587)
        
            // Recipients
            $mail->setFrom('lola07517@gmail.com', 'Questerra');  // Your email (same as the recipient in this case)
            $mail->addAddress($email, 'Utilisateur');  // Send email to your Gmail address
        
            $resetLink = "http://localhost/Projet%20Web/view/Front-office/forgot_password3.php"; // Generate your reset token link dynamically
            // Content
            $token = bin2hex(random_bytes(32)); // Generates a secure 64-character token
            $mail->isHTML(true);
            $mail->Subject = 'Demande de reinitialisation du mot de passe';
            $mail->Body = "
            <div style='font-family: Arial, sans-serif; font-size: 16px; color: #333; line-height: 1.6;'>
                <h2 style='color: #4CAF50;'>Demande de Réinitialisation de Mot de Passe</h2>
                <p>Bonjour,</p>
                <p>Nous avons reçu une demande pour réinitialiser le mot de passe de votre compte Questeera. Si vous n'êtes pas à l'origine de cette demande, veuillez ignorer cet email.</p>
                <p>Pour réinitialiser votre mot de passe, cliquez sur le bouton ci-dessous :</p>
                <p style='text-align: center;'>
                    <a href='{$resetLink}' style='background-color: #4CAF50; color: #fff; padding: 10px 20px; text-decoration: none; border-radius: 5px;'>Réinitialiser le mot de passe</a>
                </p>
                <p>Si le bouton ne fonctionne pas, copiez et collez le lien suivant dans votre navigateur :</p>
                <p><a href='{$resetLink}'>{$resetLink}</a></p>
                <p>Votre jeton : {$token}</p>
                <p>Merci,</p>
                <p>L'équipe Questeera</p>   
            </div>
            ";
        
            $mail->AltBody = "Demande de Réinitialisation de Mot de Passe\n\nBonjour,\n\nNous avons reçu une demande pour réinitialiser le mot de passe de votre compte Questeera. Si vous n'êtes pas à l'origine de cette demande, veuillez ignorer cet email.\n\nPour réinitialiser votre mot de passe, cliquez sur le lien ci-dessous :\n\n{$resetLink}\n\nMerci,\nL'équipe Questeera";
        
        
            // Send email
            $mail->send();

            $_SESSION['token'] = $token;
            $_SESSION['forget_email'] = $email;
            echo 'Password reset link has been sent';
            header('Location: login.html');
            exit();
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
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





