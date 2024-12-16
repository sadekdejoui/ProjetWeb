<?php
// update_comment.php
$dsn = 'mysql:host=localhost;dbname=questerra;charset=utf8';
$username = 'root'; // Remplacez par votre nom d'utilisateur
$password = ''; // Remplacez par votre mot de passe

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Vérifiez si les données du formulaire sont envoyées
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Récupérer les données du formulaire
        $id = (int)$_POST['id'];
        $article_id = (int)$_POST['article_id'];
        $auteur = trim($_POST['auteur']);
        $contenu = trim($_POST['contenu']);

        // Vérifiez que les champs ne sont pas vides
        if (empty($auteur) || empty($contenu)) {
            throw new Exception("Tous les champs sont requis.");
        }

        // Préparez la requête pour mettre à jour le commentaire
        $stmt = $pdo->prepare("UPDATE commentaires SET auteur = ?, contenu = ? WHERE id = ?");
        $stmt->execute([$auteur, $contenu, $id]);

        // Vérifiez si la mise à jour a réussi
        if ($stmt->rowCount() > 0) {
            // Rediriger vers l'article après la mise à jour
            header("Location: affichage_articles.php?id=" . $article_id);
            exit();
        } else {
            throw new Exception("Erreur lors de la mise à jour du commentaire. Veuillez réessayer.");
        }
    } else {
        throw new Exception("Méthode de requête non valide.");
    }
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
} catch (Exception $e) {
    echo "Erreur : " . $e->getMessage();
}
?>