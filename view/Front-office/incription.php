<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';
require '../../controller/user_controller.php';


$user= null;
// create an instance of the controller 
$utilisateur = new utilisateur_controller(); //ayet lel classe eli fih kol chyy
$mail = new PHPMailer(true);  // Instantiate PHPMailer object

if (isset($_POST["loglastname"])  && $_POST["logname"] && $_POST["logdate"] && $_POST["logtel"] && $_POST["logpass"]  && $_POST["logemail"]) {

    $email = $_POST["logemail"];
    $logtype = $_POST["logtype"];
    
    $date_nai = new DateTime($_POST['logdate']);

    $date_insc = new DateTime();
    $date_entre = clone $date_insc; 
    $date_entre->modify('+7 days'); 


    if ($utilisateur->checkEmailExists($email)) {
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
                alertBox.textContent = 'Email already exists in the database!';

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
    else{

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
        
            $token = bin2hex(random_bytes(5)); // Generates a secure 64-character token
            $mail->isHTML(true);
            $mail->Subject = 'Verification Email';
            $mail->Body = "
            <div style='font-family: Arial, sans-serif; font-size: 16px; color: #333; line-height: 1.6;'>
                <h2 style='color: #4CAF50;'>Verification Email</h2>
                <p>Bonjour,</p>
                <p>Nous avons reçu une demande pour s'inscrire dans Questeera.</p>
                <p>Votre jeton : {$token}</p>
                <p>Merci,</p>
                <p>L'équipe Questeera</p>   
            </div>
            ";        
        
            // Send email
            $mail->send();
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
        
        $lastUserId = $utilisateur->getLastUserId(); // Function to get the last user ID
        $newUserId = $lastUserId + 1; // Increment the ID for the new user
        $photoData = file_get_contents('img/pfp.png');
        $_SESSION['id1']= $newUserId;
        $_SESSION['name1']= $_POST["logname"];
        $_SESSION['lasname1']= $_POST["loglastname"];
        $_SESSION['tel1']= $_POST["logtel"];
        $_SESSION['mail1']= $_POST["logemail"];
        $_SESSION['pass1']= $_POST["logpass"];
        $_SESSION['type1']= $logtype;
        $_SESSION['dateN1']= $date_nai;
        $_SESSION['dateE1']= $date_entre;
        $_SESSION['dateI1']= $date_insc;
        $_SESSION['photo1']= $photoData;
        $_SESSION['token1']= $token;


        header('Location: verifemail.php');
    }
}




?>
