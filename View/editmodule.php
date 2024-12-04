<?php
require "C:\\xampp\htdocs\akrem web\Model\module.php";
require_once "C:\\xampp\htdocs\akrem web\config.php";
require "C:\\xampp\htdocs\akrem web\Controller\moduleC.php";

$id = $_GET['id']; // Récupérer l'ID du module depuis l'URL
$sql = "SELECT * FROM module WHERE id_module = ?";
$pdo = Config::getConnexion();
$stmt = $pdo->prepare($sql);
$stmt->execute([$id]);
$module = $stmt->fetch(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $duration = $_POST['duration'];
    $category = $_POST['category'];

    $sql = "UPDATE module SET title = ?, description = ?, duration = ?, category = ? WHERE id_module = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$title, $description, $duration, $category, $id]);

    echo "Module modifié avec succès !";
    header("Location: affichermodule.php");
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier le Module</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 20px;
        }

        h1 {
            color: #5a2d82;
        }

        form {
            max-width: 500px;
            margin: auto;
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        label {
            font-weight: bold;
            display: block;
            margin-top: 10px;
        }

        input, textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        button {
            background-color: #5a2d82;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #3498db;
        }
    </style>
</head>
<body>
    <h1>Modifier le Module</h1>
    <form action="" method="POST">
        <label>Titre :</label>
        <input type="text" name="title" value="<?php echo htmlspecialchars($module['title']); ?>" required>
        
        <label>Description :</label>
        <textarea name="description" required><?php echo htmlspecialchars($module['description']); ?></textarea>
        
        <label>Durée (heures) :</label>
        <input type="number" name="duration" value="<?php echo htmlspecialchars($module['duration']); ?>" required>
        
        <label>Catégorie :</label>
        <input type="text" name="category" value="<?php echo htmlspecialchars($module['category']); ?>" required>
        
        <button type="submit">Modifier</button>
    </form>
</body>
</html>
