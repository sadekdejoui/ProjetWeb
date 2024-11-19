<?php
// Inclure les fichiers nécessaires
include 'C:\xampp\htdocs\Projet Web - Copie\config.php';  // Inclure la configuration de la base de données
require_once 'C:\xampp\htdocs\Projet Web - Copie\View\Back_office\articleC.php';  // Inclure la classe articleC

// Créer une instance de la connexion
$conn = config::getConnexion();

// Créer une instance de articleC
$articleC = new articleC($conn);

// Récupérer tous les articles
$articles = $articleC->getAllArticles();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Articles</title>
    <style>
        /* Quelques styles pour rendre la page plus esthétique */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #ac81f2;
            color: #333;
            margin: 0;
            padding: 0;
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: white;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        .action-buttons {
            display: flex;
            justify-content: space-around;
        }

        .action-buttons a {
            padding: 5px 10px;
            text-decoration: none;
            background-color: #4CAF50;
            color: white;
            border-radius: 5px;
        }

        .action-buttons a:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1 align="center">Liste des Articles</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Titre</th>
                <th>Contenu</th>
                <th>Auteur</th>
                <th>Date de Publication</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Vérifier si la variable $articles contient des articles
            if (count($articles) > 0) {
                // Afficher chaque article
                foreach ($articles as $article) {
                    echo "<tr>";
                    echo "<td>" . $article['id'] . "</td>";
                    echo "<td>" . $article['titre'] . "</td>";
                    echo "<td>" . $article['contenu'] . "</td>";
                    echo "<td>" . $article['auteur'] . "</td>";
                    echo "<td>" . $article['date_publication'] . "</td>";
                    echo "<td class='action-buttons'>
                            <a href='edit-article.php?id=" . $article['id'] . "'>Modifier</a>
                            <a href='delete-article.php?id=" . $article['id'] . "'>Supprimer</a>
                          </td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='6' align='center'>Aucun article trouvé.</td></tr>";
            }
            ?>
        </tbody>
    </table>

    <a href="add-article.php" style="display:block; text-align:center; margin-top:20px;">Ajouter un nouvel article</a>
</body>
</html>
