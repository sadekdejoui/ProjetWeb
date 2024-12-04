<?php
require "C:\\xampp\htdocs\akrem web\Model\courses.php";
require_once "C:\\xampp\htdocs\akrem web\config.php";
require "C:\\xampp\htdocs\akrem web\Controller\coursesC.php";

$id = $_GET['id'];
$sql = "SELECT * FROM courses WHERE id = ?";
$pdo = Config::getConnexion();
$stmt = $pdo->prepare($sql);
$stmt->execute([$id]);
$course = $stmt->fetch(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $duration = $_POST['duration'];
    $description = $_POST['description'];

    $sql = "UPDATE courses SET title = ?, category = ?, price = ?, duration = ?, description = ? WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$title, $category, $price, $duration, $description, $id]);

    echo "Cours modifié avec succès !";
    header("Location: afficher.php");
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier le Cours</title>
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
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            max-width: 500px;
            margin: 0 auto;
            background: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        label {
            font-weight: bold;
            display: block;
            margin-top: 15px;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        input:focus, textarea:focus {
            outline: none;
            border-color: #5a2d82;
            box-shadow: 0 0 5px rgba(90, 45, 130, 0.5);
        }

        button {
            display: block;
            width: 100%;
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

        .container {
            text-align: center;
            margin-top: 20px;
        }

        .container a {
            text-decoration: none;
            color: #5a2d82;
            font-weight: bold;
            margin-top: 15px;
            display: inline-block;
            transition: color 0.3s;
        }

        .container a:hover {
            color: #3498db;
        }
    </style>
</head>
<body>
    <h1>Modifier le Cours</h1>
    <form action="" method="POST">
        <label for="title">Titre :</label>
        <input type="text" id="title" name="title" value="<?php echo htmlspecialchars($course['title']); ?>" required>
        
        <label for="category">Catégorie :</label>
        <input type="text" id="category" name="category" value="<?php echo htmlspecialchars($course['category']); ?>" required>
        
        <label for="price">Prix (€) :</label>
        <input type="number" step="0.01" id="price" name="price" value="<?php echo htmlspecialchars($course['price']); ?>" required>
        
        <label for="duration">Durée (heures) :</label>
        <input type="number" id="duration" name="duration" value="<?php echo htmlspecialchars($course['duration']); ?>" required>
        
        <label for="description">Description :</label>
        <textarea id="description" name="description" required><?php echo htmlspecialchars($course['description']); ?></textarea>
        
        <button type="submit">Modifier</button>
    </form>

    <div class="container">
        <a href="afficher.php">Retour à la liste des cours</a>
    </div>
</body>
</html>
