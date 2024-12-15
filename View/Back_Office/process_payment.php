<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor\autoload.php';



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $studentName = htmlspecialchars($_POST['nom'] ?? 'Non renseigné');
    $studentEmail = htmlspecialchars($_POST['email'] ?? 'Non renseigné');
    $paymentMethod = htmlspecialchars($_POST['payment_method'] ?? 'Non sélectionné');
    $courseTitle = 'Développement Web';
    $totalAmount = '99€';
    $date = htmlspecialchars($_POST['date'] ?? date('Y-m-d'));

    // Generate PDF invoice
    $pdfContent = "Facture\n\n";
    $pdfContent .= "Cours: $courseTitle\n";
    $pdfContent .= "Nom: $studentName\n";
    $pdfContent .= "Email: $studentEmail\n";
    $pdfContent .= "Méthode de paiement: $paymentMethod\n";
    $pdfContent .= "Montant total: $totalAmount\n";
    $pdfContent .= "Date: $date\n\n";
    $pdfContent .= "Merci pour votre paiement !";

    $pdfFilePath = __DIR__ . "/invoice_$studentName.pdf";
    file_put_contents($pdfFilePath, $pdfContent);

    try {
        // Initialize PHPMailer
        $mail = new PHPMailer(true);
        $mail->SMTPDebug = 0; // Set to 2 or 3 for detailed debugging
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'lola07517@gmaill.com'; // Replace with your email
        $mail->Password = 'bdhv wqeu ypiu wgky.';   // Replace with your app password
        $mail->SMTPSecure = 'tls';              // Use TLS encryption
        $mail->Port = 587;                      // Port for TLS

        // Email settings
        $mail->setFrom('lola07517@gmail.com', 'Course Payment'); // Replace with your sender's email
        $mail->addAddress($studentEmail);                        // Recipient's email
        $mail->isHTML(true);
        $mail->Subject = 'Confirmation de paiement pour le cours';
        $mail->Body = "
            Bonjour $studentName,<br><br>
            Merci pour votre paiement pour le cours \"$courseTitle\".<br>
            Montant payé : $totalAmount<br>
            Méthode de paiement : $paymentMethod<br>
            Date : $date<br><br>
            Veuillez trouver votre facture ci-jointe.<br><br>
            Cordialement,<br>
            L'équipe des cours en ligne
        ";

        // Attach invoice PDF
        $mail->addAttachment($pdfFilePath);

        // Send email
        $mail->send();
        echo "<script>alert('Paiement effectué avec succès ! La facture a été envoyée par email.'); window.location.href = 'courses pay.html';</script>";
    } catch (Exception $e) {
        echo "<script>alert('Erreur lors de l\\'envoi de l\\'email: {$mail->ErrorInfo}');</script>";
    }

    // Cleanup: Remove temporary PDF file
    if (file_exists($pdfFilePath)) {
        unlink($pdfFilePath);
    }
}
?>
