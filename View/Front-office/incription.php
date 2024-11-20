<?php
require '..\controller\user_controller.php'; //aayet lil fiha fonctionnet



$user= null;
// create an instance of the controller
$utilisateur = new utilisateur_controller(); //ayet lel classe eli fih kol chyy


if (isset($_POST["loglastname"])  && $_POST["logname"] && $_POST["logdate"] && $_POST["logtel"] && $_POST["logpass"]  && $_POST["logemail"] && $_POST["logtype"]) {

    $date_nai = new DateTime($_POST['logdate']);

    $date = new DateTime();
    $date_entre = clone $date; 
    $date_entre->modify('+7 days'); 

    $date_insc = clone $date_entre; 
    $date_insc->modify('+7 days'); 
    $user = new utilisateur(
        NULL,
        $_POST["logname"],
        $_POST["loglastname"],
        $_POST["logtel"],
        $_POST["logemail"],
        $_POST["logpass"],
        $_POST["logtype"],
        $date_nai,
        $date_entre,
        $date_insc,
        new DateTime(),
    );
            
    $utilisateur->addUser($user); //bel fonction sabina fi waset base
    header('Location:index.html');//aytlha bech yafishiha louta
}




?>
