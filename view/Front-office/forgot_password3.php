<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>Questerra</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://unicons.iconscout.com/release/v2.1.9/css/unicons.css'>
    <link rel="stylesheet" href="../Front-office/css/style2.css">
    <link rel="icon" href="../Front-office/img/favicon.ico" type="image/x-icon"/>
    <style>
        /* Hide the default radio buttons */
        input[type="radio"].btn-check {
            appearance: none; /* Hides the default inner circle */
            position: absolute; /* Removes visual presence */
            visibility: hidden; /* Ensures it's not seen */
        }
    </style>
</head>
<body>
    <div id="notification-container" style="position: fixed; top: 20px; left: 50%; transform: translateX(-50%); z-index: 9999; text-align: center;"></div>
        <div class="section">
            <div class="container">
                <div class="row full-height justify-content-center">
                    <div class="col-12 text-center align-self-center py-5">
                        <div class="section pb-5 pt-5 pt-sm-2 text-center">
                           
                            <div class="card-3d-wrap mx-auto">


                                <div class="card-3d-wrapper">
                                    <div class="card-front">
                                        <div class="center-wrap">
                                            <div class="section text-center">
                                                <h4 class="mb-4 pb-3">Réinitialisation de Mot de Passe</h4>
                                                <form action="forgot_password4.php" method="POST" class="" onsubmit="return verif3()">

                                                <div class="form-group mt-2">
                                                        <input type="password" name="logpass" class="form-style" placeholder="Votre Mot De Passe" id="logpass" autocomplete="off">
                                                        <i class="input-icon uil uil-lock-alt"></i>
                                                    </div>

                                                    <div class="form-group mt-2">
                                                        <input type="password" name="logpass2" class="form-style" placeholder="Confirmer Votre Mot De Passe" id="logpass2" autocomplete="off">
                                                        <i class="input-icon uil uil-unlock"></i>
                                                    </div>

                                                    <div class="form-group mt-2">
                                                        <input type="text" name="token" class="form-style" placeholder="Votre Jeton" id="token" autocomplete="off">
                                                        <i class="input-icon uil uil-redo"></i>
                                                    </div>	

                                                    <button class="btn mt-4" type="submit">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <script>
            function showStyledAlert(message) {
            const container = document.getElementById('notification-container');

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
            alertBox.style.transition = 'opacity 0.5s ease';
            alertBox.textContent = message;

            // Add the alert to the container
            container.appendChild(alertBox);

            // Auto-dismiss the alert after 3 seconds
            setTimeout(() => {
                alertBox.style.opacity = '0';
                setTimeout(() => container.removeChild(alertBox), 500); // Wait for the fade-out transition
            }, 7000);
        }

        function verif3() {
            // Input fields
            const motDePasse = document.getElementById("logpass");
            const confirmMotDePasse = document.getElementById("logpass2");
            
            // Regex
            const passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,30}$/; // Max 30 characters.
          
            // Validation

            if (!motDePasse.value.match(passwordRegex)) {
                showStyledAlert("Le mot de passe doit contenir au moins 8 caractères, une lettre majuscule, une lettre minuscule, un chiffre, un symbole, et avoir une longueur maximale de 30 caractères.");
                return false;
            }

            if (motDePasse.value !== confirmMotDePasse.value) {
                showStyledAlert("La confirmation du mot de passe doit être identique au mot de passe.");
                return false;
            }

            return true;
        }
    </script>
</body>
</html>