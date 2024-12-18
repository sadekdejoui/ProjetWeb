<?php
require '../../controller/user_controller.php'; 
session_start();


$user= null;
// Create an instance of the controller
$utilisateur = new utilisateur_controller();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email'])) {
    $email = $_POST['email'];
    // Use $email to fetch user details or perform actions
} else {
    // Handle cases where the email is not provided
    echo "Error: No email provided.";
}
$list = $utilisateur->showUser($email);

$id = $list['id'];
$utilisateur->deleteUtilisateur($id);
$utilisateur->updateUserIds($id);


$list = $utilisateur->showUser($_SESSION['email']);
$actionId=$list['id'];
$msg="Deleted a user";
$utilisateur->logUploadActivity($actionId, $msg);


header('Location: students.php');
?>