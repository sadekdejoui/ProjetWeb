<?php
require 'config.php';
require 'PHPMailer/PHPMailer.php'; // Include PHPMailer library
require 'PHPMailer/SMTP.php';
require 'PHPMailer/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

try {
    // Establish the database connection
    $pdo = config::getConnexion();

    // Query to fetch events starting in the next 1 minute
    $query = "
        SELECT e.titre, e.date, e.heure, u.email, u.nom, u.prenom
        FROM inscription i
        JOIN evénements e ON i.id_evenement = e.id_evenement
        JOIN utilisateurs u ON i.id_user = u.id_user
        WHERE e.date = CURDATE() AND TIME(e.heure) BETWEEN CURTIME() AND ADDTIME(CURTIME(), '00:01:00')
    ";

    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $reminders = $stmt->fetchAll();

    if (!empty($reminders)) {
        foreach ($reminders as $reminder) {
            $email = $reminder['email'];
            $nom = $reminder['nom'];
            $prenom = $reminder['prenom'];
            $titre = $reminder['titre'];
            $date = $reminder['date'];
            $heure = $reminder['heure'];

            // Send email using PHPMailer
            $mail = new PHPMailer(true);

            try {
                // SMTP server configuration
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com'; // Replace with your SMTP host
                $mail->SMTPAuth = true;
                $mail->Username = 'multiplycatnaps@gmail.com'; // Replace with your email
                $mail->Password = 'lordineedyou'; // Replace with your email password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port = 587;

                // Email content
                $mail->setFrom('your_email@example.com', 'Event Reminder'); // Replace with your sender email and name
                $mail->addAddress($email, "$prenom $nom");
                $mail->Subject = 'Event Reminder';
                $mail->Body = "Hello $prenom $nom,\n\nThis is a reminder for the upcoming event:\n\n" .
                    "Event: $titre\n" .
                    "Date: $date\n" .
                    "Time: $heure\n\n" .
                    "We hope to see you there!\n\nRegards,\nEvent Team";

                // Send the email
                $mail->send();
                echo "Reminder sent to $email for event '$titre'.\n";
            } catch (Exception $e) {
                echo "Failed to send reminder to $email. Error: " . $mail->ErrorInfo . "\n";
            }
        }
    } else {
        echo "No reminders to send at this time.\n";
    }
} catch (Exception $e) {
    die("Error: " . $e->getMessage());
}
