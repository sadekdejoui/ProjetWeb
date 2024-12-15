<?php
include 'C:\xampp\htdocs\config.php';  // Include database configuration
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
echo "<a href='delete-article.php?id=" . htmlspecialchars($article['id']) . "' class='btn btn-danger'>Supprimer</a>";
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
                        echo "<a href='delete_comment.php?id=" . htmlspecialchars($commentaire['id']) . "' class='btn btn-danger'>Supprimer</a>";

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
                    line-height: 1.6; /* Augmente l'espacement entre les lignes pour une meilleure lisibilité */
                    word-wrap: break-word; /* Force le retour à la ligne pour les mots longs */
                }
            
                .btn {
                    padding: 10px 15px;
                    text-decoration: none;
                    color: white;
                    border: none;
                    border-radius: 5px;
                    cursor: pointer;
                    margin-right: 10px; /* Ajoute un espace entre les boutons */
                    display: inline-block; /* Permet aux boutons de s'afficher sur la même ligne */
                }
            
                .btn-danger {
                    background-color: #dc3545; /* Couleur rouge pour le bouton de suppression */
                }
            
                .btn {
                    background-color: #007bff; /* Couleur bleue pour le bouton de modification */
                }
            
                .comment {
                    background-color: #f9f9f9; /* Couleur de fond pour les commentaires */
                    border: 1px solid #ccc;
                    border-radius: 5px;
                    padding: 10px;
                    margin: 10px 0;
                }
            
                img {
                    max-width: 100%; /* Assure que l'image ne dépasse pas la largeur de son conteneur */
                    height: auto; /* Maintient le ratio de l'image */
                    margin-bottom: 20px; /* Ajoute un espace en bas de l'image */
                }
            </style>