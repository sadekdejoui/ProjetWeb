<?php
// Inclure la configuration de la base de données
include 'C:\xampp\htdocs\Projet Web - Copie 1 - Copie\config.php';

// Vérifier si l'ID de l'article est passé via l'URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Créer une instance de la connexion à la base de données
    $conn = config::getConnexion();

    // Préparer la requête SQL pour supprimer l'article
    $query = "DELETE FROM articles WHERE id = :id";
    $stmt = $conn->prepare($query);

    // Lier l'ID à la requête
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);

    // Exécuter la requête
    if ($stmt->execute()) {
        // Rediriger vers la page de liste des articles après la suppression
        header('Location: ListArticles.php');
        exit();
    } else {
        echo "Erreur lors de la suppression de l'article.";
    }
} else {
    // Si l'ID n'est pas défini dans l'URL, afficher une erreur
    echo "Aucun article trouvé pour suppression.";
}
?>
