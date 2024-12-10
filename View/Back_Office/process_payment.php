<?php
ini_set('memory_limit', '1G'); // Vous pouvez augmenter encore la limite si nécessaire

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require_once 'C:\xampp\htdocs\akrem web\View\Back_Office\process_payment.php';
require '../vendor/autoload.php';

header('Content-Type: application/json');

// Récupérer les données JSON envoyées par le client
$data = json_decode(file_get_contents('php://input'), true);

// Vérification des données d'entrée
$email = $data['email'] ?? null;
$pdfBase64 = $data['pdf'] ?? null;
$courseTitle = $data['courseTitle'] ?? 'Cours';
$studentName = $data['studentName'] ?? 'Étudiant';

if (!$email || !$pdfBase64) {
    echo json_encode(['success' => false, 'message' => 'Données manquantes']);
    exit;
}

try {
    // Utiliser un fichier temporaire pour le PDF
    $tempFile = tempnam(sys_get_temp_dir(), 'facture_');
    
    // Décoder le fichier PDF et sauvegarder directement dans le fichier temporaire
    $pdfContent = base64_decode(preg_replace('#^data:application/pdf;base64,#', '', $pdfBase64));
    file_put_contents($tempFile, $pdfContent);

    // Vérifiez la taille du fichier pour éviter les dépassements
    if (filesize($tempFile) > 10 * 1024 * 1024) { // Limite à 10 MB
        unlink($tempFile);  // Supprimer le fichier temporaire si trop volumineux
        echo json_encode(['success' => false, 'message' => 'La taille du fichier PDF dépasse la limite autorisée.']);
        exit;
    }

    // Configurer PHPMailer
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'votre-email@gmail.com'; // Remplacez par votre email
    $mail->Password = 'votre-mot-de-passe';    // Remplacez par votre mot de passe ou un mot de passe d'application
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    // Configurer l'email
    $mail->setFrom('votre-email@gmail.com', 'Questerra');
    $mail->addAddress($email, $studentName);
    $mail->Subject = "Facture pour le cours $courseTitle";
    $mail->Body = "Bonjour $studentName,\n\nVoici la facture pour votre inscription au cours \"$courseTitle\". Merci de votre confiance.\n\nCordialement,\nL'équipe Questerra";

    // Ajouter le fichier PDF en pièce jointe
    $mail->addAttachment($tempFile);

    // Envoyer l'email
    $mail->send();

    // Supprimer le fichier temporaire après l'envoi
    unlink($tempFile);

    // Réponse réussie
    echo json_encode(['success' => true, 'message' => 'Facture envoyée avec succès']);
} catch (Exception $e) {
    // Réponse en cas d'erreur
    echo json_encode(['success' => false, 'message' => $mail->ErrorInfo]);
}
?>
