<?php
require '../../controller/user_controller.php'; // Include the controller

$user = null;
// Create an instance of the controller
$utilisateur = new utilisateur_controller();

if (isset($_POST["logemail1"]) && isset($_POST["logpass1"])) {
    // Sanitize inputs
    $email = filter_var($_POST["logemail1"], FILTER_SANITIZE_EMAIL);
    $password = htmlspecialchars($_POST["logpass1"], ENT_QUOTES, 'UTF-8');

    // Fetch user data by email
    $user = $utilisateur->showUser($email);
    
    if ($user) {
        // Check if the password key exists
        if ($password==$user['psw']) { 
            // Redirect based on user type
            $tyype = $user['tyype']; // Assuming 'tyype' is a valid column in the DB
            if ($tyype == 0 || $tyype == 1) {
                header('Location: index.html');
                exit();
            } elseif ($tyype == 2) {
                header('Location: http://localhost/Projet%20Web/view/Back_office/index.html');
                exit();
            }
        } else {
            echo $password. $user['psw'];
            echo "<script>alert('Password is incorrect!');</script>";
        }
    } else {
        echo "<script>alert('Email is incorrect!');</script>";
    }
}
?>





