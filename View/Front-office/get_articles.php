<?php
include 'C:\xampp\htdocs\Projet Web - Copie\config.php'; // Inclure la configuration de la base de données
include 'C:\xampp\htdocs\Projet Web - Copie\View\Back_office\articleC.php'; // Inclure le contrôleur des articles

// Créer une instance de la connexion
$conn = config::getConnexion();

// Créer une instance de articleC
$articleC = new articleC($conn);

// Récupérer tous les articles
$articles = $articleC->getAllArticles();
?>