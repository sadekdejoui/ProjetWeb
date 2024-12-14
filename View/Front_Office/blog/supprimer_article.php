<?php
// delete_article.php
include 'C:\xampp\htdocs\ReProjet\View\Front_Office\get_articles.php'; // Inclure le fichier pour récupérer les articles

if (isset($_GET['id'])) {
    $id = (int)$_GET['id']; // Convertir en entier pour éviter les injections

    // Préparez la requête pour supprimer l'article
    $stmt = $conn->prepare("DELETE FROM articles WHERE id = ?");
    $stmt->execute([$id]);

    header("Location: blog.php"); // Redirigez vers la page du blog après la suppression
    exit;
} else {
    echo "Aucun article spécifié.";
    exit;
}
?>