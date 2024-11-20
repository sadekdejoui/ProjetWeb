<?php
require '../../controller/user_controller.php'; 
$utilisateur = new utilisateur_controller(); 
$list = $utilisateur->listUsers2();



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
                        <a href="..\Front-office\index.html" class="nav-item nav-link">Accueil</a>
                        <a href="..\Front-office\blog.html" class="nav-item nav-link">Blog</a>
                        <a href="..\Front-office\Cours.html" class="nav-item nav-link">Cours</a>
                        <a href="..\Front-office\ecahnge.html" class="nav-item nav-link">Questions</a>
                        <a href="..\Front-office\event.html" class="nav-item nav-link">Evénement</a>
                        <a href="..\Front-office\contact.html" class="nav-item nav-link">Complaint</a>
                    </div>
                </div>
                <button class="dropdown-button"><a href="..\Front-office\index.html"><p style="color: black; margin-top: 12px;">Back</p></a></button>  
                    
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
                    <?php
                        foreach ($list as $prof) {
                            $type=$prof['tyype'];
                            if ($type == 0) {
                                $ch="Etudiant";

                            }else{
                                $ch="Professeur";
                            }
                    ?> 
                        <img src="..\Front-office\img\sadek.jpg" class="card-img-top" alt="Profile Picture">
                        <div class="card-body">

                            <center><h5 class="card-title"><?php echo $prof['prenom']." ".$prof['nom']; ?></h5></center>
                            <p>Type: <?php echo $ch; ?></p>
                            <p class="card-text">Phone: <?php echo $prof['tel']; ?></p>
                            <p>Email: <?php echo $prof['email']; ?></p>
                            <p>Password: <?php echo $prof['psw']; ?></p>
                            <p>Date De Naissance: <?php echo $prof['date_nai']; ?></p>

                        </div>
                              
                    <?php
                        }
                    ?>
                    </div>
                </div>
                <!-- Main Content Area -->
                <div class="col-lg-8">
                    <form action="update.php" method="POST" class="">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nom</label>
                            <input type="text" class="form-control" id="loglastname" name="loglastname" placeholder="Nom">
                        </div>
                        <div class="mb-3">
                            <label for="prenom" class="form-label">Prénom</label>
                            <input type="text" class="form-control" id="logname" name="logname" placeholder="Prénom">
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Numéro de Téléphone</label>
                            <input type="tel" class="form-control" id="logtel" name="logtel" placeholder="Numéro de Téléphone">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="logemail" name="logemail" placeholder="Email">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Mot De Passe</label>
                            <input type="password" class="form-control" id="logpass" name="logpass" placeholder="Mot De Passe">
                        </div>
                        <div class="mb-3">
                            <label for="birthdate" class="form-label">Date de Naissance</label>
                            <input type="date" class="form-control" id="logdate" name="logdate" placeholder="Date de Naissance">
                        </div>
                        <div class="mb-3">
                            <label for="pfp" class="form-label">Photo de Profil</label>
                            <input type="file" class="form-control" id="pfp" accept="image/*">
                        </div>
                        <center><button type="button" class="btn btn-primary" onclick="verif2()">Update</button></center>
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
                        <a class="btn btn-link" href="..\Front-office\blog.html">Blog</a>
                        <a class="btn btn-link" href="..\Front-office\Cours.html">    Cours</a>
                        <a class="btn btn-link" href="..\Front-office\ecahnge.html">Questions</a>
                        <a class="btn btn-link" href="..\Front-office\event.html">Evénement</a>
                        <a class="btn btn-link" href="..\Front-office\contact.html" class="nav-item nav-link">Complaint</a>
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
                                <a href="..\Front-office\index.html">Accueille</a>
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

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="..\Front-office\lib\wow\wow.js"></script>
    <script src="..\Front-office\lib\easing\easing.min.js"></script>
    <script src="..\Front-office\js\main.js"></script>
    <script src="..\Front-office\js\script.js"></script>
</body>

</html>
