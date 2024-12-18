<?php
include 'C:\xampp\htdocs\Projet Web\config.php';  // Include database configuration
require_once 'C:\xampp\htdocs\Projet Web\controller\ArticleC.php';  // Include ArticleC class
require_once 'C:\xampp\htdocs\Projet Web\controller\CommentaireC.php';  // Include CommentaireC class

$conn = config::getConnexion(); // Database connection

// Create an instance of ArticleC and CommentaireC
$articleC = new ArticleC($conn);
$commentaireC = new CommentaireC($conn);

// Retrieve the article ID from the URL
$id = intval($_GET['id']); // Ensure the ID is an integer

// Fetch the article by ID
$article = $articleC->getArticleById($id); // Assuming this method exists in your ArticleC class

// Fetch comments for the article
$commentaires = $commentaireC->getCommentairesByArticle($id); // Assuming this method exists in your CommentaireC class

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Handle comment deletion
    if (isset($_POST['commentaire_id'])) {
        $commentaire_id = intval($_POST['commentaire_id']);
        $commentaireC->deleteCommentaire($commentaire_id);
        header("Location: article.php?id=" . $id); // Redirect to the same article page
        exit();
    }

    // Handle article deletion
    if (isset($_POST['id'])) {
        $articleC->deleteArticle($id);
        header("Location: articles.php"); // Redirect to the articles list
        exit();
    }
}


if ($article) {
    // Display the article
    echo "<div class='article'>";
    
    // Create a container for the image and article info
    echo "<div class='article-header'>";
    
    // Display the article image
    if (!empty($article['image'])) {
        echo "<img src='" . htmlspecialchars($article['image']) . "' alt='Image de l'article' class='article-image'>";
    } else {
        echo '<p><em>Aucune image disponible pour cet article.</em></p>';
    }
    
    // Article information
    echo "<div class='article-info'>";
    echo "<h1>" . htmlspecialchars($article['titre']) . "</h1>";
    echo "<p><strong>Auteur :</strong> " . htmlspecialchars($article['auteur']) . "</p>"; // Assuming 'auteur' is a field in your article
    echo "<p><strong>Publié le :</strong> " . htmlspecialchars($article['date_publication']) . "</p>";
    echo "<p><strong>Nombre de vues :</strong> " . htmlspecialchars($article['nombre_vues']) . "</p>";
    echo "</div>"; // End of article-info

    echo "</div>"; // End of article-header

    echo "<p class='article-content'>" . nl2br(htmlspecialchars($article['contenu'])) . "</p>"; // Display the article content with line breaks

    // Delete article button
    echo "<form method='POST' action=''>"; // Soumettre à la même page
echo "<input type='hidden' name='id' value='" . htmlspecialchars($article['id']) . "'>";
echo "</form>"; // Fermer le formulaire

// Lien pour supprimer l'article (optionnel, si vous souhaitez avoir un lien en plus du bouton)
echo "<a href='delete-article.php?id=" . htmlspecialchars($article['id']) . "' class='btn btn-danger' onclick='return confirm(\"Êtes-vous sûr de vouloir supprimer cet article ?\");'>Supprimer</a>";
echo "</div>";
    // Display comments
    echo "<h2>Commentaires</h2>";
    if ($commentaires) {
        foreach ($commentaires as $commentaire) {
            echo "<div class='comment'>";
            echo "<p><strong>" . htmlspecialchars($commentaire['auteur']) . " :</strong> " . htmlspecialchars($commentaire['contenu']) . "</p>";
            echo "<p><em>Publié le : " . htmlspecialchars($commentaire['date_creation']) . "</em></p>";
            
                        // Delete comment button
                        echo "<form method='POST' action=''>"; // Soumettre à la page de traitement de la suppression
                        echo "<input type='hidden' name='commentaire_id' value='" . htmlspecialchars($commentaire['id']) . "'>";
                        echo "</form>";
                        echo "<a href='delete_comment.php?id=" . htmlspecialchars($commentaire['id']) . "' class='btn btn-danger' onclick='return confirm(\"Êtes-vous sûr de vouloir supprimer ce commentaire ?\");'>Supprimer</a>";
                        echo "</div>";
                    
                    }
                } else {
                    echo "<p>Aucun commentaire pour cet article.</p>";
                }
            } else {
                echo "<p>Article non trouvé.</p>";
            }
            ?>
            
            <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .article {
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 20px;
        }

        .article-header {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .article-image {
            width: 200px;
            height: 150px;
            margin-right: 20px;
            border-radius: 5px;
        }

        .article-info {
            flex-grow: 1;
        }

        h1 {
            color: #333;
            margin-bottom: 10px;
        }

        h2 {
            color: #555;
            margin-top: 20px;
            margin-bottom: 10px;
        }

        p {
            margin: 5px 0;
            line-height: 1.6; /* Increases line spacing for better readability */
            word-wrap: break-word; /* Forces line breaks for long words */
        }

        .btn {
            padding: 10px 15px;
            text-decoration: none;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-right: 10px; /* Adds space between buttons */
            display: inline-block; /* Allows buttons to be displayed on the same line */
        }

        .btn-danger {
            background-color: #ac81f2; /* Red color for delete button */
        }

        .btn {
            background-color: #ac81f2; /* Blue color for edit button */
        }

        .btn:hover {
            background-color: rgb(163, 119, 234); /* Darker color for edit button on hover */
        }

        .btn-danger:hover {
            background-color: rgb(163, 119, 234) /* Darker color for delete button on hover */
        }

        .comment {
            background-color: #f9f9f9; /* Background color for comments */
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin: 10px 0;
        }

        img {
            max-width: 100%; /* Ensures the image does not exceed the width of its container */
            height: auto; /* Maintains the aspect ratio of the image */
            margin-bottom: 20px; /* Adds space below the image */
        }
        .main-content {
    margin-left: 240px; /* Espace entre la sidebar et le contenu principal */
    padding: 20px; /* Ajoute un peu de rembourrage autour du contenu principal */
}
    </style>