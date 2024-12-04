<?php
session_start();
require '../../controller/user_controller.php';



$user= null;
// create an instance of the controller 
$utilisateur = new utilisateur_controller(); //ayet lel classe eli fih kol chyy


if (isset($_POST["loglastname"])  && $_POST["logname"] && $_POST["logdate"] && $_POST["logtel"] && $_POST["logpass"]  && $_POST["logemail"] ) {

    $email = $_POST["logemail"];
    $logtype = $_POST["logtype"];
    
    $date_nai = new DateTime($_POST['logdate']);

    $date = new DateTime();
    $date_entre = clone $date; 
    $date_entre->modify('+7 days'); 

    $date_insc = clone $date_entre; 
    $date_insc->modify('+7 days'); 


    if ($utilisateur->checkEmailExists($email)) {
        echo "
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Change the body background color
                document.body.style.backgroundColor = '#5f428';

                // Create a container for alerts if it doesn't exist
                let container = document.getElementById('notification-container');
                if (!container) {
                    container = document.createElement('div');
                    container.id = 'notification-container';
                    container.style.position = 'fixed';
                    container.style.top = '10px';
                    container.style.left = '50%';
                    container.style.transform = 'translateX(-50%)';
                    container.style.zIndex = '9999';
                    container.style.width = '90%';
                    container.style.maxWidth = '400px';
                    document.body.appendChild(container);
                }

                // Create the alert element
                const alertBox = document.createElement('div');
                alertBox.style.padding = '15px 20px';
                alertBox.style.marginBottom = '10px';
                alertBox.style.borderRadius = '8px';
                alertBox.style.backgroundColor = '#ffd891';
                alertBox.style.color = '#102770';
                alertBox.style.boxShadow = '0 4px 8px rgba(0, 0, 0, 0.2)';
                alertBox.style.fontWeight = '600';
                alertBox.style.fontSize = '14px';
                alertBox.style.textAlign = 'center';
                alertBox.style.transition = 'opacity 0.5s ease';
                alertBox.textContent = 'Email already exists in the database!';

                // Add the alert to the container
                container.appendChild(alertBox);

                // Auto-dismiss the alert after 3 seconds
                setTimeout(() => {
                    alertBox.style.opacity = '0';
                    setTimeout(() => {
                        container.removeChild(alertBox);
                        // Go back to the previous page after alert is dismissed
                        window.history.back();
                    }, 500); // Wait for fade-out transition to finish
                }, 3000);
            });
        </script>";
        exit;
    } 
    else{
        $lastUserId = $utilisateur->getLastUserId(); // Function to get the last user ID
        $newUserId = $lastUserId + 1; // Increment the ID for the new user
        $photoData = file_get_contents('img/pfp.png');
        $user = new utilisateur(
            $newUserId,
            $_POST["logname"],
            $_POST["loglastname"],
            $_POST["logtel"],
            $_POST["logemail"],
            $_POST["logpass"],
            $logtype,
            $date_nai,
            $date_entre,
            $date_insc,
            new DateTime(),
            $photoData
        );
        $utilisateur->addUser($user); //bel fonction sabina fi waset base
        $_SESSION['email'] = $email;
        header('Location: account.php');
    }
}




?>
