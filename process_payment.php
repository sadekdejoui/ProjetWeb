<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;




header('Content-Type: application/json');

$data = json_decode(file_get_contents('php://input'), true);

$email = $data['email'];
$pdfBase64 = $data['pdf'];
$courseTitle = $data['courseTitle'];
$studentName = $data['studentName'];

if (!$email || !$pdfBase64) {
    echo json_encode(['success' => false, 'message' => 'Données manquantes']);
    exit;
}

try {
    // Décoder le fichier PDF
    $pdfContent = base64_decode(preg_replace('#^data:application/pdf;base64,#', '', $pdfBase64));
    $pdfFilePath = 'facture.pdf';
    file_put_contents($pdfFilePath, $pdfContent);

    // Configuration de PHPMailer
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'votre-email@gmail.com'; // Remplacez par votre email
    $mail->Password = 'votre-mot-de-passe';    // Remplacez par votre mot de passe ou un mot de passe d'application
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    // Configuration de l'email
    $mail->setFrom('votre-email@gmail.com', 'Questerra');
    $mail->addAddress($email, $studentName);
    $mail->Subject = "Facture pour le cours $courseTitle";
    $mail->Body = "Bonjour $studentName,\n\nVoici la facture pour votre inscription au cours \"$courseTitle\". Merci de votre confiance.\n\nCordialement,\nL'équipe Questerra";

    // Attacher la facture PDF
    $mail->addAttachment($pdfFilePath);

    // Envoyer l'email
    $mail->send();

    // Supprimer le fichier temporaire
    unlink($pdfFilePath);

    echo json_encode(['success' => true]);
} catch (Exception $e) {
    echo json_encode(['success' => false, 'message' => $mail->ErrorInfo]);
}
?>
