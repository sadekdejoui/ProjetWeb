<?php
require '../../controller/user_controller.php'; 

$user= null;
$user2= null;
// Create an instance of the controller
$utilisateur = new utilisateur_controller();


if (isset($_POST["loglastname"])  && $_POST["logname"] && $_POST["logdate"] && $_POST["logtel"] && $_POST["logpass"]  && $_POST["logemail"]) {
    $date_nai = new DateTime($_POST['logdate']);
    $user = new utilisateur_controller(
        $_POST["logname"],
        $_POST["loglastname"],
        $_POST["logtel"],
        $_POST["logemail"],
        $_POST["logpass"],
        $date_nai,
        new DateTime()
    );
    $user2 = $utilisateur->showUser($email);
        
    $utilisateur->updateSelectedFields2($user, $user2['id']);
    header('Location:account.php');//3ayet lel fichier offerlist
}
?>