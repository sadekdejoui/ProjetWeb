<?php
// submit_article.php

// Connexion à la base de données
$dsn = 'mysql:host=localhost;dbname=articles;charset=utf8';
$username = 'root'; // Remplacez par votre nom d'utilisateur
$password = ''; // Remplacez par votre mot de passe

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Vérifiez si le formulaire a été soumis
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $title = $_POST['title'];
        $author = $_POST['author'];
        $content = $_POST['content'];

        // Préparez la requête d'insertion
        $stmt = $pdo->prepare("INSERT INTO articles (titre, auteur, contenu) VALUES (?, ?, ?)");
        $stmt->execute([$title, $author, $content]);

        echo "Article ajouté avec succès.";
    }
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}
?>