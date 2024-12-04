<?php
require "C:\\xampp\\htdocs\\akrem web\\Model\\module.php";
require_once "C:\\xampp\\htdocs\\akrem web\\config.php";
require "C:\\xampp\\htdocs\\akrem web\\Controller\\moduleC.php";

// Fetch modules from the database
$modelcontrol = new ModuleC();
$liste = $modelcontrol->affichermodule();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Modules</title>
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

        .add-module {
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

        .add-module:hover {
            background-color: #3498db;
        }

        .module-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .module-item {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            background-color: #fafafa;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .module-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
        }

        .module-item h3 {
            margin-top: 0;
            color: #5a2d82;
            font-size: 1.25rem;
        }

        .module-item p {
            margin: 8px 0;
        }

        .module-actions {
            margin-top: 10px;
        }

        .module-actions a {
            display: inline-block;
            margin-right: 10px;
            padding: 8px 12px;
            text-decoration: none;
            color: white;
            background-color: #3498db;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .module-actions a:hover {
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
        <h1>Liste des Modules</h1>
    </header>
    <div class="container">
        <a href="addM.php" class="add-module">Ajouter un Nouveau Module</a>
        <?php if (empty($liste)): ?>
            <p>Aucun module disponible pour le moment.</p>
        <?php else: ?>
            <ul class="module-list">
                <?php foreach ($liste as $module): ?>
                    <li class="module-item">
                        <h3><?php echo htmlspecialchars($module['title']); ?></h3>
                        <p><strong>Description :</strong> <?php echo htmlspecialchars($module['description']); ?></p>
                        <p><strong>Durée :</strong> <?php echo htmlspecialchars($module['duration']); ?> heures</p>
                        <p><strong>Catégorie :</strong> <?php echo htmlspecialchars($module['category']); ?></p>
                        <div class="module-actions">
                            <a href="editmodule.php?id=<?php echo $module['id_module']; ?>">Modifier</a>
                            <a href="deletemodule.php?id=<?php echo $module['id_module']; ?>" class="delete">Supprimer</a>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </div>
</body>
</html>
