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

if (isset($_POST["logjeton"])){





    $newUserId=$_SESSION['id1'];
    $name=$_SESSION['name1'];
    $lastname=$_SESSION['lasname1'];
    $tel=$_SESSION['tel1'];
    $email=$_SESSION['mail1'];
    $pass=$_SESSION['pass1'];
    $logtype=$_SESSION['type1'];
    $date_nai=$_SESSION['dateN1'];
    $date_entre=$_SESSION['dateE1'];
    $date_insc=$_SESSION['dateI1'];
    $photoData=$_SESSION['photo1'];
    $token= $_SESSION['token1'];


    $password = password_hash($pass, PASSWORD_DEFAULT);

    if($token == $_POST["logjeton"]){
           
        $user = new utilisateur(
            $newUserId,
            $name,
            $lastname,
            $tel,
            $email,
            $password,
            $logtype,
            $date_nai,
            $date_entre,
            $date_insc,
            new DateTime(),
            $photoData
        );
        $utilisateur->addUser($user); //bel fonction sabina fi waset base
        $_SESSION['email'] = $email;
        

        try {

            // Ensure dates are formatted properly
            if ($date_insc instanceof DateTime) {
                $date_insc = $date_insc->format("d-m-Y");  // Format the date as day-month-year
            }

            if ($date_entre instanceof DateTime) {
                $date_entre = $date_entre->format("d-m-Y");  // Format the date as day-month-year
            }
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
            // Content
            $mail->isHTML(true);
            $mail->Subject = 'Les Dates';
            $mail->Body = "
            <div style='font-family: Arial, sans-serif; font-size: 16px; color: #333; line-height: 1.6;'>
                <h2 style='color: #4CAF50;'>Les Dates</h2>
                <p>Bonjour,</p>
                <p>Nous avons bien reçu votre demande. Vous avez indiqué que votre entretien est prévu pour la date suivante :</p>
                
                <p><strong>Date de l'inscription :</strong> {$date_insc}</p>
                <p><strong>Date de l'entretien :</strong> {$date_entre}</p>
                
                <p>Si vous avez besoin de modifier la date de l'entretien ou si vous avez des questions, veuillez nous contacter directement.</p>
                
                <p>Merci de votre confiance,</p>
                <p>L'équipe Questeera</p>   
            </div>

            ";
        
            $mail->AltBody = "Les Dates\n\nBonjour,\n\nNous avons bien reçu votre demande. Vous avez indiqué que votre entretien est prévu pour la date suivante :\n\nDate de l'inscription : {$date_insc}\n\nDate de l'entretien : {$date_entre}\n\nSi vous avez besoin de modifier la date de l'entretien ou si vous avez des questions, veuillez nous contacter directement.\n\nMerci de votre confiance,\nL'équipe Questeera";
        
        
            // Send email
            $mail->send();
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
        $actionId=$_SESSION['id1'];
        $msg="Logged in";
        $utilisateur->logUploadActivity($actionId, $msg); // Assuming logUploadActivity is the function to log activity
        header('Location: account.php');
        
    }
    else{
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
                    alertBox.textContent = 'Votre jeton est incorrect!';

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