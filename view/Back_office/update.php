<?php
require '../../controller/user_controller.php'; 

$user= null;
$user2= null;
// Create an instance of the controller
$utilisateur = new utilisateur_controller();

if (isset($_POST['email'])) {
    $email = $_POST['email'];
}
if (isset($_POST["loglastname"])  || $_POST["logname"] || $_POST["logdate1"] || $_POST["logdate2"] || $_POST["logdate3"] || $_POST["logtel"] || $_POST["logpass"]) {

    $user2 = $utilisateur->showUser($email);
    $lastname = !empty($_POST["loglastname"]) ? $_POST["loglastname"] : $user2['nom'];
    $name = !empty($_POST["logname"]) ? $_POST["logname"] : $user2['prenom'];
    $date1 = !empty($_POST["logdate1"]) ? $_POST["logdate1"] : $user2['date_nai'];
    $date2 = !empty($_POST["logdate2"]) ? $_POST["logdate2"] : $user2['date_nai'];
    $date3 = !empty($_POST["logdate3"]) ? $_POST["logdat3"] : $user2['date_nai'];
    $tel = !empty($_POST["logtel"]) ? (int)$_POST["logtel"] : (int)$user2['tel'];
    $psw = !empty($_POST["logpass"]) ? $_POST["logpass"] : $user2['psw'];
    
    $user = new utilisateur(
        null,               // id: Do not update (leave as null)
        $name,              // prenom
        $lastname,          // nom
        $tel,               // tel
        null,               // email
        $psw,               // psw
        null,               // tyype: Do not update
        new DateTime($date1), // date_nai (date of birth)
        new DateTime($date2),               // date_entre: Do not update
        new DateTime($date3),               // date_insc: Do not update
        new DateTime()      // date_mise (date of update)
    );  
    
    // Update only the necessary fields
    $utilisateur->updateSelectedFields($user, $email);
    
    header('Location: sprofile.php?email=' . $user2['email']);
}  
?>