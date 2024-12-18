<?php
include '../../config.php'; // Inclure la configuration de la base de données
include '../../controller/ArticleC.php'; // Inclure le contrôleur des articles

// Créer une instance de la connexion
$conn = config::getConnexion();

// Créer une instance de articleC
$articleC = new articleC($conn);

// Récupérer tous les articles
$articles = $articleC->getAllArticles();
?>