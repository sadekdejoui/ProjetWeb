<?php
// submit_comment.php

// Connexion à la base de données
$dsn = 'mysql:host=localhost;dbname=articles;charset=utf8';
$username = 'root'; // Remplacez par votre nom d'utilisateur
$password = ''; // Remplacez par votre mot de passe

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Vérification des données reçues
        if (isset($_POST['article_id'], $_POST['auteur'], $_POST['contenu'])) {
            $article_id = (int)$_POST['article_id']; // Convertir en entier pour éviter les injections SQL
            $auteur = trim($_POST['auteur']);
            $contenu = trim($_POST['contenu']);

            // Validation simple
            if (empty($auteur) || empty($contenu)) {
                // Gérer l'erreur (par exemple, rediriger avec un message d'erreur)
                header("Location: blog.php?error=Veuillez remplir tous les champs.");
                exit;
            }

            // Préparez la requête d'insertion
            $stmt = $pdo->prepare("INSERT INTO commentaires (article_id, auteur, contenu) VALUES (?, ?, ?)");
            $stmt->execute([$article_id, $auteur, $contenu]);

            // Redirigez vers l'article après l'ajout du commentaire
            header("Location: affichage_articles.php?id=" . $article_id . "&success=Commentaire ajouté avec succès!");
            exit; // Terminer le script après redirection
        } else {
            // Gérer le cas où les données ne sont pas définies
            header("Location: affichage_articles.php?error=Données manquantes.");
            exit;
        }
    }
} catch (PDOException $e) {
    // Gérer les erreurs de connexion à la base de données
    echo "Erreur de connexion : " . $e->getMessage();
}
?>