<?php
// Inclure les fichiers nécessaires
include 'C:\xampp\htdocs\Projet Web - Copie\config.php'; // Inclure la configuration de la base de données
include 'C:\xampp\htdocs\Projet Web - Copie\View\Back_office\article.php'; // Inclure la classe Article
include 'C:\xampp\htdocs\Projet Web - Copie\View\Back_office\articleC.php'; // Inclure la classe articleC

// Vérifier si l'ID est passé dans l'URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Créer une instance de la connexion à la base de données
    $conn = config::getConnexion();

    // Préparer la requête SQL pour récupérer l'article par son ID
    $query = "SELECT * FROM articles WHERE id = :id";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();

    // Récupérer l'article
    $article = $stmt->fetch(PDO::FETCH_ASSOC);

    // Si l'article n'existe pas
    if (!$article) {
        echo "Article introuvable.";
        exit();
    }
} else {
    echo "ID manquant.";
    exit();
}

// Vérifier si le formulaire a été soumis pour mettre à jour l'article
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titre = $_POST['titre'];
    $contenu = $_POST['contenu'];
    $auteur = $_POST['auteur'];

    // Vérifier si les champs ne sont pas vides
    if (!empty($titre) && !empty($contenu) && !empty($auteur)) {
        // Créer une instance du contrôleur pour mettre à jour l'article
        $articleC = new articleC($conn);
        $articleC->updateArticle($id, $titre, $contenu);

        // Rediriger vers la liste des articles après la mise à jour
        header('Location: ListArticles.php');
        exit();
    } else {
        $error = "Tous les champs sont requis.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier l'Article</title>
    <style>
        table {
            width: 60%;
            margin: 20px auto;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .btn {
            background-color: #4CAF50;
            color: white;
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #45a049;
        }

        .btn-cancel {
            background-color: #f44336;
        }

        .btn-cancel:hover {
            background-color: #e53935;
        }

        .error {
            color: red;
        }
    </style>
</head>
<body>
    <h1 align="center">Modifier l'Article</h1>

    <!-- Affichage des erreurs -->
    <?php if (isset($error)): ?>
        <div class="error"><?php echo $error; ?></div>
    <?php endif; ?>

    <!-- Formulaire de modification -->
    <form action="" method="POST">
        <table>
            <tr>
                <td><label for="titre">Titre :</label></td>
                <td><input type="text" name="titre" id="titre" value="<?php echo htmlspecialchars($article['titre']); ?>" maxlength="100"></td>
            </tr>
            <tr>
                <td><label for="contenu">Contenu :</label></td>
                <td><textarea name="contenu" id="contenu" rows="5" cols="30"><?php echo htmlspecialchars($article['contenu']); ?></textarea></td>
            </tr>
            <tr>
                <td><label for="auteur">Auteur :</label></td>
                <td><input type="text" name="auteur" id="auteur" value="<?php echo htmlspecialchars($article['auteur']); ?>" maxlength="50"></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" class="btn" value="Mettre à jour">
                    <a href="ListArticles.php" class="btn btn-cancel">Annuler</a>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
