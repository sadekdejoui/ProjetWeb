<?php
session_start();
require '../../controller/user_controller.php'; 

$user= null;
$user2= null;
// Create an instance of the controller
$utilisateur = new utilisateur_controller();

$email = $_SESSION['email5'];


if (isset($_POST["loglastname"])  || $_POST["logname"] || $_POST["logdate1"] || $_POST["logdate2"] || $_POST["logdate3"] || $_POST["logtel"] || $_POST["logpass"] || isset($_POST['logphoto'])) {

    $user2 = $utilisateur->showUser($email);
    $lastname = !empty($_POST["loglastname"]) ? $_POST["loglastname"] : $user2['nom'];
    $name = !empty($_POST["logname"]) ? $_POST["logname"] : $user2['prenom'];
    $date1 = !empty($_POST["logdate1"]) ? $_POST["logdate1"] : $user2['date_nai'];
    $date2 = !empty($_POST["logdate2"]) ? $_POST["logdate2"] : $user2['date_nai'];
    $date3 = !empty($_POST["logdate3"]) ? $_POST["logdat3"] : $user2['date_nai'];
    $tel = !empty($_POST["logtel"]) ? (int)$_POST["logtel"] : (int)$user2['tel'];
    $psw = !empty($_POST["logpass"]) ? password_hash($_POST["logpass"], PASSWORD_DEFAULT) : $user2['psw']; 

        // Default photo value (current photo)
        $photo = $user2['photo'];
        //echo $photo."<br>";
    
        echo '<pre>';
        print_r($_FILES);
        echo '</pre>';
    
        // Handle photo upload if provided
        $photo = null; // Initialize $photo to null by default
    
        // Handle photo upload
        if (isset($_FILES['logphoto']) && $_FILES['logphoto']['error'] === UPLOAD_ERR_OK) {
            $tmpName = $_FILES['logphoto']['tmp_name'];
            $fileName = $_FILES['logphoto']['name'];
            $uploadDir = 'uploads/';
    
            // Ensure the upload directory exists
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }
    
            // Generate a unique file name to prevent overwriting
            $newFileName = $uploadDir . uniqid() . '-' . basename($fileName);
    
            // Move the uploaded file to the desired directory
            if (move_uploaded_file($tmpName, $newFileName)) {
                $photo = $newFileName; // Set $photo to the path of the uploaded file
                echo "File uploaded successfully: " . htmlspecialchars($newFileName) . "<br>";
            } else {
                echo "Failed to move the uploaded file.<br>";
            }
        } else {
            echo "No file uploaded or there was an upload error.<br>";
        }
    
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
        new DateTime(),      // date_mise (date of update)
        $photo
    );  
    $actionId=$user2['id'];
    echo $actionId;
    $msg="Updated profile";
    $utilisateur->logUploadActivity($actionId, $msg);
    // Update only the necessary fields
    $utilisateur->updateSelectedFields($user, $email);
    
    header('Location: sprofile.php');
} 
?>