<?php
// Inclure les fichiers nécessaires
include 'C:\xampp\htdocs\config.php';  // Inclure la configuration de la base de données
require_once 'C:\xampp\htdocs\Projet Web\controller\CommentaireC.php';  // Inclure la classe CommentaireC

// Créer une instance de la connexion
$conn = config::getConnexion();

// Créer une instance de CommentaireC
$commentaireC = new CommentaireC($conn);

// Vérifier si l'ID du commentaire est passé en paramètre
if (isset($_GET['id'])) {
    $commentaire_id = $_GET['id'];
    
    // Appeler la méthode pour supprimer le commentaire
    $commentaireC->deleteCommentaire($commentaire_id);
    
    // Rediriger vers la page de gestion des commentaires ou une autre page
    header('Location: ListArticles.php'); // Changez cela selon votre structure de page
    exit();
} else {
    // Si aucun ID n'est fourni, rediriger ou afficher un message d'erreur
    echo "Aucun commentaire à supprimer.";
}
?>