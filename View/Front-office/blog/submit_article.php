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
        $imagePath = ''; // Initialiser le chemin de l'image

        if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
            $fileTmpPath = $_FILES['image']['tmp_name'];
            $fileName = $_FILES['image']['name'];
            $fileSize = $_FILES['image']['size'];
            $fileNameCmps = explode(".", $fileName);
            $fileExtension = strtolower(end($fileNameCmps));

            // Vérifiez le type de fichier
            $allowedfileExtensions = ['jpg', 'jpeg', 'png', 'gif'];
            if (in_array($fileExtension, $allowedfileExtensions) && $fileSize < 2 * 1024 * 1024) { // Limite de 2 Mo
                // Créez un nom de fichier unique
                $newFileName = md5(time() . $fileName) . '.' . $fileExtension;
                $uploadFileDir = 'C:\xampp\htdocs\Projet Web - Copie 1 - Copie\View\Front-office\blog\uploads/'; // Répertoire d'upload

                $dest_path = $uploadFileDir . $newFileName;
                
                if (move_uploaded_file($fileTmpPath, $dest_path)) {
                    $imagePath = 'uploads/' . $newFileName; // Enregistrez le chemin relatif
                } else {
                    echo "Erreur lors du déplacement du fichier.";
                }
            } else {
                echo "Type de fichier non autorisé ou taille de fichier trop grande.";
            }
        }

        // Préparez la requête d'insertion
        $stmt = $pdo->prepare("INSERT INTO articles (titre, auteur, contenu, image) VALUES (?, ?, ?, ?)");
        $stmt->execute([$title, $author, $content, $imagePath]);
        $lastInsertId = $pdo->lastInsertId();

        // Redirigez vers affichage_articles.php avec l'ID de l'article
        header("Location: affichage_articles.php?id=" . $lastInsertId);
        exit; // Assurez-vous d'appeler exit après header pour arrêter l'exécution du script
    }
    
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}
?>