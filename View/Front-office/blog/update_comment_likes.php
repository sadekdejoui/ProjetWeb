<?php
include 'config.php'; // Inclure votre fichier de configuration

$pdo = config::getConnexion();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $action = $_POST['action'];

    if ($action === 'like') {
        $stmt = $pdo->prepare("UPDATE commentaires SET likes = likes + 1 WHERE id = ?");
        $stmt->execute([$id]);
        echo json_encode(['success' => true, 'action' => 'like']);
    } elseif ($action === 'dislike') {
        $stmt = $pdo->prepare("UPDATE commentaires SET dislikes = dislikes + 1 WHERE id = ?");
        $stmt->execute([$id]);
        echo json_encode(['success' => true, 'action' => 'dislike']);
    } else {
        echo json_encode(['success' => false, 'error' => 'Action non valide']);
    }
} else {
    echo json_encode(['success' => false, 'error' => 'Méthode non autorisée']);
}
?>