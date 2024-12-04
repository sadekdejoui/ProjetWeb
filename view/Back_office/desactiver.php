<?php
require '../../controller/user_controller.php'; 

$user= null;
// Create an instance of the controller
$utilisateur = new utilisateur_controller();

if (isset($_POST['id'])) {
    $id = $_POST['id'];
}
echo $id;
$utilisateur->deactivateUtilisateur($id);
$utilisateur->updateUserIds($id);
header('Location: students.php');
?>