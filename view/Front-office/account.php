<?php
session_start();
require '../../controller/user_controller.php';

// Get the email parameter from the URL
$email = $_SESSION['email'];

if(!isset($_SESSION['email'])){
    header("Location: login.html");
    exit();
}

// Create an instance of the utilisateur_controller class
$utilisateur = new utilisateur_controller();

// Fetch the user details and photo binary data
$list = $utilisateur->showUser($email);
$imageData = $utilisateur->getUserPhotoByEmail($email);
  

// Set the user type
$type = $list['tyype'];

// Initialize the image source (base64-encoded) for displaying in HTML
$imageSrc = '';

if ($imageData) {
    // Get the image information using getimagesizefromstring
    $imageInfo = getimagesizefromstring($imageData);

    if ($imageInfo) {
        // Determine the appropriate image type based on the image data
        switch ($imageInfo['mime']) {
            case 'image/jpeg':
                $imageType = 'image/jpeg';
                break;
            case 'image/png':
                $imageType = 'image/png';
                break;
            case 'image/gif':
                $imageType = 'image/gif';
                break;
            default:
                $imageType = 'image/jpeg';  // Default to JPEG if type is unknown
                break;
        }

        // Encode the binary data to base64 to embed it in an HTML tag
        $base64Image = base64_encode($imageData);

        // Create a data URL for the image
        $imageSrc = 'data:' . $imageType . ';base64,' . $base64Image;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Questerra</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="..\Front-office\img\favicon.ico">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Jost:wght@500;600;700&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="..\Front-office\lib\animate\animate.min.css" rel="stylesheet">
        <link href="..\Front-office\lib\owlcarousel\assets\owl.carousel.min.css" rel="stylesheet">
        <link href="..\Front-office\lib\lightbox\css\lightbox.min.css" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="..\Front-office\css\bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="..\Front-office\css\style.css" rel="stylesheet">
    </head>

    <body>
        <div id="notification-container" style="position: fixed; top: 20px; left: 50%; transform: translateX(-50%); z-index: 9999; text-align: center;"></div>
        <div class="container-xxl bg-white p-0">
            <!-- Spinner Start -->
            <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
                <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
            <!-- Spinner End -->

            <!-- Navbar & Hero Start -->
            <div class="container-xxl position-relative p-0">
                <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                    <a href="#" class="navbar-brand p-0">
                        <img src="..\Front-office\img\logo.png" alt="Logo" class="logo-img">
                        <h1 class="m-0">Questerra</h1>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto py-0">
                        <a href="..\Front-office\index2.php" class="nav-item nav-link">Home</a>
                        <a href="..\Front-office\blog.php" class="nav-item nav-link">Blog</a>
                        <a href="..\Front-office\Cours.html" class="nav-item nav-link">Courses</a>
                        <a href="..\Front-office\ecahnge.html" class="nav-item nav-link">Questions</a>
                        <a href="..\Front-office\event.html" class="nav-item nav-link">Events</a>
                        <a href="contact.php" class="nav-item nav-link">Complaints</a>
                      
                    </div>
                    </div>
                    
                        
                </nav>
            </div>
            <!-- Navbar End -->

            <!-- Hero Section -->
            <div class="container-xxl py-5 bg-primary hero-header">
                <div class="container my-5 py-5 px-lg-5 text-center">
                    <h1 class="text-white animated slideInDown">Update your profile</h1>
                    <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                </div>
            </div>
            <!-- Hero End -->

            <!-- Main Content -->
            <div class="container py-5">
                <div class="row">
                    <!-- Left Sidebar -->
                    <div class="col-lg-4">
                        <div class="card">
                            
                            <?php if ($imageSrc): ?>
                                <img src="<?php echo $imageSrc; ?>" alt="Profile Photo" class="card-img-top">
                            <?php else: ?>
                                <p>No profile photo available.</p>
                            <?php endif; ?>
                            <div class="card-body">

                                <center><h5 class="card-title"><?php echo $list['prenom']." ".$list['nom']; ?></h5></center>
                                <p>Type: <?php echo $type;?></p>
                                <p class="card-text">Phone: <?php echo $list['tel']; ?></p>
                                <p>Email: <?php echo $list['email']; ?></p>
                                <p>Password: *******</p>
                                <p>Date De Naissance: <?php echo $list['date_nai']; ?></p>

                            </div>
                                
                    
                        </div>
                    </div>

                    <!-- Main Content Area -->
                    <div class="col-lg-8">
                        <form action="update.php" method="POST" class="" onsubmit="return verif2()" enctype="multipart/form-data">

                            <div class="mb-3">
                                <label for="name" class="form-label">Nom</label>
                                <input type="text" class="form-control" id="loglastname" name="loglastname" >
                            </div>
                            <div class="mb-3">
                                <label for="prenom" class="form-label">Prénom</label>
                                <input type="text" class="form-control" id="logname" name="logname">
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Numéro de Téléphone</label>
                                <input type="tel" class="form-control" id="logtel" name="logtel" >
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Mot De Passe</label>
                                <input type="password" class="form-control" id="logpass" name="logpass">
                            </div>
                            <div class="mb-3">
                                <label for="birthdate" class="form-label">Date de Naissance</label>
                                <input type="date" class="form-control" id="logdate" name="logdate" >
                            </div>
                            <div class="mb-3">
                                <label for="pfp" class="form-label">Photo de Profil</label>
                                <input type="file" class="form-control" id="logphoto" name="logphoto" accept="image/*">
                            </div>
                            
                            <center><button type="submit" class="btn btn-primary">Update</button></center>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Main Content End -->

            <!-- Footer Start -->
            <div class="container-fluid bg-primary text-light footer wow fadeIn" data-wow-delay="0.1s">
                <div class="container py-5 px-lg-5">
                    <div class="row g-5">
                        <div class="col-md-6 col-lg-3">
                            <p class="section-title text-white h5 mb-4">Address<span></span></p>
                            <p><i class="fa fa-map-marker-alt me-3"></i>2083 Cité La Gazelle, Ariana, Tunisia</p>
                            <p><i class="fa fa-phone-alt me-3"></i>+016 23 989 000</p>
                            <p><i class="fa fa-envelope me-3"></i>questerra@gmail.com</p>
                            <div class="d-flex pt-2">
                                <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-outline-light btn-social" href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <p class="section-title text-white h5 mb-4">Lien rapide<span></span></p>
                            <a class="btn btn-link" href="..\Front-office\blog.php">Blog</a>
                            <a class="btn btn-link" href="..\Front-office\Cours.php">    Cours</a>
                            <a class="btn btn-link" href="..\Front-office\ecahnge.php">Questions</a>
                            <a class="btn btn-link" href="..\Front-office\event.php">Evénement</a>
                        <!-- <a class="btn btn-link" href="../Front_Office/contact.php" class="nav-item nav-link">Complaint</a>-->
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <p class="section-title text-white h5 mb-4">Founders<span></span></p>
                            <div class="row g-2">
                                <p>Akrem Jouini</p>
                                <p>Firas Ben Hamouda</p>
                                <p>Imen Goutali</p>
                                <p>Maram Bessaoud</p>
                                <p>Mohamed Sadek Dejoui</p>
                                <p>Nader Abdellaoui</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <p class="section-title text-white h5 mb-4">Rapport<span></span></p>
                            <div class="position-relative w-100 mt-3">
                                <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="Votre email" style="height: 48px;">
                                <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i class="fa fa-paper-plane text-primary fs-4"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container px-lg-5">
                    <div class="copyright">
                        <div class="row">
                            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                                
                            </div>
                            <div class="col-md-6 text-center text-md-end">
                                <div class="footer-menu">
                                    <a href="..\Front-office\index2.html">Accueille</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->


            <!-- Back to Top -->
            <a href="#" class="btn btn-lg btn-secondary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
        </div>
            <!-- Footer End -->
        </div>

        <script>
            function showStyledAlert2(message) {
                const container = document.getElementById('notification-container');

                // Create the alert element
                const alertBox = document.createElement('div');
                alertBox.style.padding = '15px 20px';
                alertBox.style.marginBottom = '10px';
                alertBox.style.borderRadius = '8px';
                alertBox.style.backgroundColor = '#ac81f2';
                alertBox.style.color = '#F6F4F9';
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
                }, 3000);
            }

            function verif2() {
                // Input fields
                const nom = document.getElementById("loglastname");
                const prenom = document.getElementById("logname");
                const dateNaissance = document.getElementById("logdate");
                const tel = document.getElementById("logtel");
                const motDePasse = document.getElementById("logpass");
                const photo = document.getElementById("logphoto");

                // Regular expressions
                const nameRegex = /^([A-Z][a-z]{0,29})(\s[A-Z][a-z]{0,29})*$/; // Each word starts with uppercase, followed by lowercase, max 30 chars.
                const telRegex = /^\d{8}$/;
                const passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,30}$/; // Max 30 characters.

                // Arrays to store messages
                let errors = [];
                let updates = [];

                // Validate fields
                if (prenom.value.trim()) {
                    if (!prenom.value.match(nameRegex) || prenom.value.length > 30) {
                        errors.push("Le prénom doit être alphabétique, non vide et avoir une longueur maximale de 30 caractères.");
                    } else {
                        updates.push("Le prénom est valide.");
                    }
                }

                if (nom.value.trim()) {
                    if (!nom.value.match(nameRegex) || nom.value.length > 30) {
                        errors.push("Le nom doit être alphabétique, non vide et avoir une longueur maximale de 30 caractères.");
                    } else {
                        updates.push("Le nom est valide.");
                    }
                }

                if (tel.value.trim()) {
                    if (!tel.value.match(telRegex)) {
                        errors.push("Le numéro de téléphone doit contenir exactement 8 chiffres.");
                    } else {
                        updates.push("Le numéro de téléphone est valide.");
                    }
                }

                if (motDePasse.value.trim()) {
                    if (!motDePasse.value.match(passwordRegex)) {
                        errors.push(
                            "Le mot de passe doit contenir au moins 8 caractères, une lettre majuscule, une lettre minuscule, un chiffre et un symbole."
                        );
                    } else {
                        updates.push("Le mot de passe est valide.");
                    }
                }
                
                if (dateNaissance.value.trim()) {
                    updates.push("La date de naissance est valide.");
                }

                if (photo.value.trim()) {
                    const photoValue = photo.value.toLowerCase();
                    if (!photoValue.endsWith(".png") && !photoValue.endsWith(".jpeg") && !photoValue.endsWith(".jpg")) {
                        errors.push("La photo doit être au format .png ou .jpeg.");
                    } else {
                        updates.push("La photo est valide.");
                    }
                }

                // Display errors or success messages
                if (errors.length > 0) {
                    showStyledAlert2("Erreur(s):\n" + errors.join("\n"));
                    return false;
                }
                
                // Check if no fields were updated
                if (updates.length === 0) {
                    showStyledAlert2("Aucun champ n'a été modifié.");
                    return false;
                }

                return true;
            }

        </script>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="..\Front-office\lib\wow\wow.js"></script>
        <script src="..\Front-office\lib\easing\easing.min.js"></script>
        <script src="..\Front-office\js\main.js"></script>
    </body>

</html>
