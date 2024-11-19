<?php
include 'C:\xampp\htdocs\Projet Web - Copie\config.php'; // Inclure la configuration de la base de données
include 'C:\xampp\htdocs\Projet Web - Copie\View\Back_office\article.php'; // Inclure le modèle Article
include 'C:\xampp\htdocs\Projet Web - Copie\View\Back_office\articleC.php'; // Inclure le contrôleur des articles

// Créer une instance de la connexion PDO
$connexion = config::getConnexion();

// Créer une instance du contrôleur en passant la connexion
$articleC = new articleC($connexion);

$error = "";

// Créer un article
$article = null;

if (
    isset($_POST["titre"]) &&
    isset($_POST["contenu"]) &&
    isset($_POST["auteur"])
) {
    if (
        !empty($_POST["titre"]) &&
        !empty($_POST["contenu"]) &&
        !empty($_POST["auteur"])
    ) {
        $article = new Article(
            $_POST["titre"],
            $_POST["contenu"],
            $_POST["auteur"]
        );
        // Ajouter l'article à la base de données
        $articleC->addArticle($article->getTitre(), $article->getContenu(), $article->getAuteur());
        header('Location: ListArticles.php'); // Rediriger vers la liste des articles
    } else {
        $error = "Informations manquantes"; // Message d'erreur si des informations sont manquantes
    }
}
?>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Article</title>
    <style>
        /* Global Styles */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #ac81f2;
            color: #333;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: white;
            margin-top: 30px;
        }

        #error {
            color: red;
            text-align: center;
        }

        a {
            color: #4CAF50;
            text-decoration: none;
            font-size: 18px;
            margin-left: 20px;
        }

        a:hover {
            text-decoration: underline;
        }

        /* Form Styles */
        .form-container {
            background-color: white;
            width: 60%;
            margin: 50px auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            margin: 20px 0;
        }

        td {
            padding: 10px;
            text-align: left;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            border-radius: 4px;
            border: 1px solid #ccc;
            font-size: 14px;
        }

        textarea {
            resize: vertical;
        }

        input[type="submit"],
        input[type="reset"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover,
        input[type="reset"]:hover {
            background-color: #45a049;
        }

        /* Responsive Styles */
        @media screen and (max-width: 768px) {
            .form-container {
                width: 90%;
            }

            table {
                font-size: 14px;
            }
        }
    </style>
    <script>
        function validateForm() {
            var titre = document.getElementById("titre").value;
            var contenu = document.getElementById("contenu").value;
            var auteur = document.getElementById("auteur").value;

            var error = false;

            // Vérification du champ "titre"
            if (titre == "") {
                alert("Le titre est obligatoire.");
                error = true;
            }

            // Vérification du champ "contenu"
            if (contenu == "") {
                alert("Le contenu est obligatoire.");
                error = true;
            }

            // Vérification du champ "auteur"
            if (auteur == "") {
                alert("L'auteur est obligatoire.");
                error = true;
            }

            // Si des erreurs ont été trouvées, empêcher l'envoi du formulaire
            return !error;
        }
    </script>
</head>

<body>

    <h1>Ajouter un Nouvel Article</h1>

    <div class="form-container">
        <a href="ListArticles.php">Retour à la liste</a>
        <hr>

        <div id="error">
            <?php echo $error; ?>
        </div>

        <!-- Ajout de l'attribut onsubmit pour appeler la fonction de validation -->
        <form action="" method="POST" onsubmit="return validateForm()">
            <table>
                <tr>
                    <td><label for="titre">Titre :</label></td>
                    <td><input type="text" name="titre" id="titre" maxlength="100"></td>
                </tr>
                <tr>
                    <td><label for="contenu">Contenu :</label></td>
                    <td><textarea name="contenu" id="contenu" rows="5" cols="30"></textarea></td>
                </tr>
                <tr>
                    <td><label for="auteur">Auteur :</label></td>
                    <td><input type="text" name="auteur" id="auteur" maxlength="50"></td>
                </tr>
                <tr align="center">
                    <td><input type="submit" value="Enregistrer"></td>
                    <td><input type="reset" value="Réinitialiser"></td>
                </tr>
            </table>
        </form>
    </div>

</body>

</html>