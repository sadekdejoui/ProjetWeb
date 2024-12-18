<?php
session_start();
?>
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
                                                <h4 class="mb-4 pb-3">Verif Email</h4>
                                                <form action="verifmail2.php" method="POST" class="" >
                                                            
                                                    <div class="form-group mt-2">
                                                        <input type="text" id="logjeton" name="logjeton" class="form-style" placeholder="Votre Jeton" >
                                                        <i class="input-icon uil uil-redo"></i>
                                                    </div>                                                    
        
                                                    <button class="btn mt-4" type="submit">Verfier</button>
                                                    
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
        
        
</body>
</html>