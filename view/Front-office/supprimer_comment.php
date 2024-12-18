<?php
// delete_comment.php
session_start();
$dsn = 'mysql:host=localhost;dbname=questerra;charset=utf8';
$username = 'root'; 
$password = '';

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Vérifier si un ID est passé dans l'URL
    if (isset($_GET['id'])) {
        $id = (int)$_GET['id'];

        // Vérifier si le commentaire existe
        $stmt = $pdo->prepare("SELECT * FROM commentaires WHERE id = ?");
        $stmt->execute([$id]);
        $commentaire = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($commentaire) {
            // Suppression du commentaire
            $stmt = $pdo->prepare("DELETE FROM commentaires WHERE id = ?");
            $stmt->execute([$id]);

            // Rediriger vers affichage_articles.php après la suppression
            header("Location: affichage_articles.php?id=" . htmlspecialchars($commentaire['article_id']));
            exit();
        } else {
            echo "Commentaire non trouvé.";
        }
    } else {
        echo "Aucun commentaire spécifié.";
    }
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}
?>