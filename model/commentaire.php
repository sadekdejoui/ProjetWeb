<?php
// Connexion à la base de données
//$pdo = new PDO('mysql:host=localhost;dbname=questerra', 'root', '');
$pdo = new PDO('mysql:host=localhost;dbname=base de données 1', 'root', '');


// Code SQL pour récupérer les commentaires et les informations des articles
$stmt = $pdo->prepare("
    SELECT c.*, a.auteur AS article_auteur, a.date_publication AS article_date_creation, a.nombre_vues 
    FROM commentaires c 
    JOIN articles a ON c.article_id = a.id 
    ORDER BY c.date_creation DESC
");
$stmt->execute();
$commentaires = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Commencez à afficher les commentaires
?>