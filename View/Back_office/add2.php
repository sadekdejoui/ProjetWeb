<?php
require '../../controller/user_controller.php'; 

$user = null;

// Create an instance of the controller
$utilisateur = new utilisateur_controller();

if (!empty($_POST["loglastname"]) && !empty($_POST["logname"]) && !empty($_POST["logtel"]) && !empty($_POST["logpass"]) && !empty($_POST["logemail"]) && !empty($_POST["logdate1"]) && !empty($_POST["logdate2"]) && !empty($_POST["logdate3"])) {

    // Handle DateTime objects
    $date1 = new DateTime($_POST['logdate1']);
    $date2 = new DateTime($_POST['logdate2']);
    $date3 = new DateTime($_POST['logdate3']);
    $type = 1;

    // Create the user object
    $user = new utilisateur(
        NULL,
        $_POST["logname"],
        $_POST["loglastname"],
        $_POST["logtel"],
        $_POST["logemail"],
        $_POST["logpass"],
        $type,
        $date1,
        $date2,
        $date3,
        new DateTime() // Current timestamp for user creation
    );

    // Add user to the database
    $utilisateur->addUser($user);

    // Redirect to profile page after adding user
    header('Location: sprofile.php');
    exit();
}
?>