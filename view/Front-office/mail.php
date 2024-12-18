<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';
require '../../controller/user_controller.php';


$email=$_SESSION['email'] ;

$mail = new PHPMailer(true);  // Instantiate PHPMailer object



    
   

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
            $_SESSION['jeton4']=$token;
            header('Location: login2.php');
            // Send email
            $mail->send();
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
        
        





?>
