<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';  // Include the Composer autoloader

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
    $mail->setFrom('lola07517@gmail.com', 'Mailer');  // Your email (same as the recipient in this case)
    $mail->addAddress('sadokdejoui88@gmail.com', 'Joe User');  // Send email to your Gmail address

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'Password Reset Request';
    $mail->Body    = 'a';
    $mail->AltBody = 'b';

    // Send email
    $mail->send();
    echo 'Password reset link has been sent to sadokdejoui88@gmail.com';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
