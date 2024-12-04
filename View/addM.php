<?php
require "C:\\xampp\\htdocs\\akrem web\\Model\\module.php";     // Correct path to module.php
require_once "C:\\xampp\\htdocs\\akrem web\\config.php";        // Correct path to config.php
require "C:\\xampp\\htdocs\\akrem web\\Controller\\moduleC.php"; // Correct path to moduleC.php

$pdo = Config::getConnexion();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $moduleC = new ModuleC();
    $module = new Module($_POST['title'], $_POST['description'], $_POST['duration'], $_POST['id_course'], $_POST['category']);
    $moduleC->addM($module);
    header('Location: affichermodule.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Module</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #5a2d82;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-top: 15px;
            font-weight: bold;
        }

        input, textarea, button {
            margin-top: 5px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }

        textarea {
            resize: none;
            height: 100px;
        }

        button {
            background-color: #5a2d82;
            color: white;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #3498db;
        }

        .form-group {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Ajouter un Module</h1>
        <form method="POST" action="">
            <div class="form-group">
                <label for="title">Titre :</label>
                <input type="text" id="title" name="title" required>
            </div>

            <div class="form-group">
                <label for="description">Description :</label>
                <textarea id="description" name="description" required></textarea>
            </div>

            <div class="form-group">
                <label for="duration">Durée (en heures) :</label>
                <input type="number" id="duration" name="duration" required>
            </div>

            <div class="form-group">
                <label for="id_course">ID Cours :</label>
                <input type="number" id="id_course" name="id_course" required>
            </div>

            <div class="form-group">
                <label for="category">Catégorie :</label>
                <input type="text" id="category" name="category" required>
            </div>

            <button type="submit">Ajouter</button>
        </form>
    </div>
</body>
</html>
