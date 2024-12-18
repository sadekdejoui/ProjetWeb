<?php
require_once "C:\\xampp\\htdocs\\akrem web\\Controller\\coursesC.php";

// Créer une instance du contrôleur
$courseC = new courseC();

// Appeler la méthode pour récupérer tous les cours
$courses = $courseC->afficher();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Cours</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1200px;
            margin: 50px auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        th, td {
            padding: 12px;
            border: 1px solid #ddd;
        }

        th {
            background-color: #f4f4f4;
            color: #333;
            text-align: left;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .no-data {
            text-align: center;
            color: #999;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Liste des Cours</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Price (€)</th>
                    <th>Duration (hours)</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($courses->rowCount() > 0):
                    foreach ($courses->fetchAll(PDO::FETCH_ASSOC) as $course):
                ?>
                <tr>
                    <td><?= htmlspecialchars($course['id']); ?></td>
                    <td><?= htmlspecialchars($course['title']); ?></td>
                    <td><?= htmlspecialchars($course['category']); ?></td>
                    <td><?= htmlspecialchars($course['price']); ?></td>
                    <td><?= htmlspecialchars($course['duration']); ?></td>
                    <td><?= htmlspecialchars($course['description']); ?></td>
                </tr>
                <?php
                    endforeach;
                else:
                ?>
                <tr>
                    <td colspan="6" class="no-data">Aucun cours disponible</td>
                </tr>
                <?php
                endif;
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
