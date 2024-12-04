<?php
require "C:\\xampp\htdocs\akrem web\Model\courses.php";
require_once "C:\\xampp\htdocs\akrem web\config.php";
require "C:\\xampp\htdocs\akrem web\Controller\coursesC.php";

// Fetch courses from the database
$sql = "SELECT * FROM courses";
$pdo = Config::getConnexion();
$stmt = $pdo->query($sql);
$courses = $stmt->fetchAll(PDO::FETCH_ASSOC);


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Cours</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #5a2d82;
            color: white;
            padding: 15px 20px;
            text-align: center;
        }

        header h1 {
            margin: 0;
        }

        .container {
            max-width: 900px;
            margin: 30px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .add-course {
            display: inline-block;
            margin-bottom: 20px;
            padding: 10px 20px;
            background-color: #5a2d82;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .add-course:hover {
            background-color: #3498db;
        }

        .course-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .course-item {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            background-color: #fafafa;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .course-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
        }

        .course-item h3 {
            margin-top: 0;
            color: #5a2d82;
        }

        .course-item p {
            margin: 8px 0;
        }

        .course-actions {
            margin-top: 10px;
        }

        .course-actions a {
            display: inline-block;
            margin-right: 10px;
            padding: 8px 12px;
            text-decoration: none;
            color: white;
            background-color: #3498db;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .course-actions a:hover {
            background-color: #2c3e50;
        }

        .delete {
            background-color: #e74c3c;
        }

        .delete:hover {
            background-color: #c0392b;
        }
    </style>
</head>
<body>
    <header>
        <h1>Liste des Cours</h1>
    </header>
    <div class="container">
        <a href="add.php" class="add-course">Ajouter un Nouveau Cours</a>
        <ul class="course-list">
            <?php foreach ($courses as $course): ?>
                <li class="course-item">
                    <h3><?php echo htmlspecialchars($course['title']); ?></h3>
                    <p><strong>Catégorie :</strong> <?php echo htmlspecialchars($course['category']); ?></p>
                    <p><strong>Prix :</strong> <?php echo htmlspecialchars($course['price']); ?> €</p>
                    <p><strong>Durée :</strong> <?php echo htmlspecialchars($course['duration']); ?> heures</p>
                    <div class="course-actions">
                        <a href="edit_courses.php?id=<?php echo $course['id']; ?>">Modifier</a>
                        <a href="delete.php?id=<?php echo $course['id']; ?>" class="delete">Supprimer</a>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
  
</body>

</html>
