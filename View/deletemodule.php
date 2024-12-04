<?php
require "C:\\xampp\htdocs\akrem web\Controller\ModuleC.php";
require_once "C:\\xampp\htdocs\akrem web\config.php";

$id = $_GET['id']; // Récupérer l'ID du module depuis l'URL
$pdo = Config::getConnexion();
$sql = "DELETE FROM module WHERE id_module = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$id]);

echo "Module supprimé avec succès !";
header("Location: affichermodule.php");
?>
