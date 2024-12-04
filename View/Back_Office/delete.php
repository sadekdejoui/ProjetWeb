<?php
require "C:\xampp\htdocs\akrem web\Controller\coursesC.php";

$id = $_GET['id'];
$pdo = Config::getConnexion();
$sql = "DELETE FROM courses WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$id]);

echo "Cours supprimé avec succès !";
header("Location: afficher.php");
?>
