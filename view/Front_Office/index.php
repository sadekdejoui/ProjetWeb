<?php
session_start();
$_SESSION['id']='1';
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
    <link rel="shortcut icon" type="image/x-icon" href="../Front_Office/img/favicon.ico">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https:/fonts.googleapis.com">
    <link rel="preconnect" href="https:/fonts.gstatic.com" crossorigin>
    <link href="https:/fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Jost:wght@500;600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https:/cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https:/cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../Front_Office/lib/animate/animate.min.css" rel="stylesheet">
    <link href="../Front_Office/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../Front_Office/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../Front_Office/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../Front_Office/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Chargement...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <div class="logo-container">
                        <img src="../Front_Office/img/logo.png" alt="Logo de Questerra">
                        <h1 class="m-0">Questerra</h1>
                    </div>
                    
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto py-0">
                        <a href="../Front_Office/index.php" class="nav-item nav-link active">Accueil</a>
                        <a href="../Front_Office/les taches/imen/blog.html" class="nav-item nav-link">Blog</a>
                        <a href="../Front_Office/les taches/akrem/Cours.html" class="nav-item nav-link">Cours</a>
                        <a href="../Front_Office/les taches/firas/ecahnge.html" class="nav-item nav-link">Questions</a>
                        <a href="../Front_Office/les taches/nader/event.html" class="nav-item nav-link">Evénement</a>
                        
                      
                    </div>
                </div>
                        <!--Notification-->
                    <div class="dropdown">
                        
                        <button class="dropdown-button">Settings</button>
                        <div class="dropdown-content">
                          <a href="../Front_Office/les taches/sadek/account.html">Mon compte</a>
                          <a href="../Front_Office/les taches/sadek/index.html">Se déconnecter</a>
                        </div>
                      
                        
                      </div>
                    <div class="dropdowncomplaint">

                      <button class="dropdowncomplaint-button">Complaint</button>
                        <div class="dropdowncomplaint-content">
                        <a href="../Front_Office/contact.php">Add Complaint</a>
                          <a href="./history.php">View Complaints</a>
                          <a href="./ComplaintResponse.php">View Complaint Response</a>
                        </div>
                        </div>
            </nav>

            <!-- ending of header -->
 

















            <div class="container-xxl bg-primary hero-header">
                <div class="container px-lg-5">
                    <div class="row g-5 align-items-end">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="text-white mb-4 animated slideInDown"><br>Montez en compétences.</br>Boostez votre carrière.</h1>
                            <p class="text-white pb-3 animated slideInDown">"Découvrez une plateforme d'apprentissage en ligne qui s'adapte à votre rythme de vie. Apprenez de nouvelles compétences à votre guise et à votre propre cadence, en mettant l'accent sur l'innovation et le développement durable."</p>
                            <a href="../Front_Office/les taches/akrem/Cours.html" class="btn btn-secondary py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">En savoir plus</a>
                        </div>
                        <div class="col-lg-6 text-center text-lg-start">
                            <img class="img-fluid animated zoomIn" src="img/hero.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Feature Start -->
        <div class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <p class="section-title text-secondary justify-content-center"><span></span>Nos services<span></span></p>
                    <!--<h1 class="text-center mb-5">Quelles solutions proposons-nous</h1>-->
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item d-flex flex-column text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-search fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Cours et Formations Personnalisées</h5>
                            <p class="m-0">Des parcours d'apprentissage adaptatifs pour chaque utilisateur, grâce à l'intégration de l'intelligence artificielle.</p>
                            
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item d-flex flex-column text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-laptop-code fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Communauté et Forum d'échanges</h5>
                            <p class="m-0">Un espace collaboratif où les utilisateurs peuvent poser des questions, échanger des idées, et apprendre les uns des autres.</p>
                            
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item d-flex flex-column text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fab fa-facebook-f fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Certification de <br>Compétences</h5>
                            <p class="m-0">Des évaluations en fin de parcours permettant d’obtenir des certifications valorisables dans le milieu professionnel.</p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature End -->


        <!-- About Start -->
        <div class="container-xxl py-5">
            
            <div class="container py-5 px-lg-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <p class="section-title text-secondary">About Us<span></span></p>
                        <h1 class="mb-5">Questerra</h1>
                        <p class="mb-4">Chez Questterra, nous transformons l’apprentissage en ligne grâce à une plateforme interactive et accessible. En offrant un accès illimité à des cours en ligne, nous nous adaptons aux besoins uniques de chaque utilisateur pour soutenir leur développement personnel et professionnel tout au long de leur parcours de formation.                        </p>
                        <div class="skill mb-4">
                            <div class="d-flex justify-content-between">
                                <p class="mb-2">Etudiants et jeunes diplomés</p>
                                <p class="mb-2">30%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="skill mb-4">
                            <div class="d-flex justify-content-between">
                                <p class="mb-2">professionnels en reconversion</p>
                                <p class="mb-2">25%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="skill mb-4">
                            <div class="d-flex justify-content-between">
                                <p class="mb-2">Passionnés d'apprentissage</p>
                                <p class="mb-2">20%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="skill mb-4">
                            <div class="d-flex justify-content-between">
                                <p class="mb-2">Entreprises et Organisations</p>
                                <p class="mb-2">15%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="skill mb-4">
                            <div class="d-flex justify-content-between">
                                <p class="mb-2">Etablissements scolaires et universitaires</p>
                                <p class="mb-2">10%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-lg-6">
                        <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="img/about.png">
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Facts Start -->
        <div class="container-xxl bg-primary fact py-5 wow fadeInUp" data-wow-delay="0.1s">
           <!-- <div class="container py-5 px-lg-5">
                <p class="section-title text-secondary justify-content-center"><span></span>Nos services<span></span></p>
                
            </div>-->
        </div>
        <!-- Facts End -->


        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <p class="section-title text-secondary justify-content-center"><span></span>Nos Cours Les Plus Populaires<span></span></p>
                    <!--<h1 class="text-center mb-5">Quelles solutions proposons-nous</h1>-->
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item d-flex flex-column text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-search fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Langues</h5>
                            <p class="m-0">Développez vos compétences linguistiques à tous niveaux.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item d-flex flex-column text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-laptop-code fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Web Design</h5>
                            <p class="m-0"> Créez des sites web esthétiques et fonctionnels.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item d-flex flex-column text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fab fa-facebook-f fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Marketing</h5>
                            <p class="m-0">Apprenez les stratégies pour réussir dans le marketing moderne.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item d-flex flex-column text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-mail-bulk fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Science</h5>
                            <p class="m-0">Explorez les fondamentaux de la biologie, chimie, et physique.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item d-flex flex-column text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-thumbs-up fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Électronique</h5>
                            <p class="m-0">Initiez-vous à la conception de circuits et systèmes électroniques.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item d-flex flex-column text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fab fa-android fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Développement Informatique</h5>
                            <p class="m-0">Maîtrisez les bases du code et des logiciels.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->


        <!-- Newsletter Start -->
        <div class="container-xxl bg-primary newsletter py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="row justify-content-center">
                    <div class="col-lg-7 text-center">
                        <h1 class="text-center text-white mb-4">Restez toujours en contact</h1>
                        <div class="position-relative w-100 mt-3">
                            <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="Entrez votre email" style="height: 48px;">
                            <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i class="fa fa-paper-plane text-primary fs-4"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter End -->


        <!-- Projects Start -->
        <div class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <p class="section-title text-secondary justify-content-center"><span></span>Nos événements<span></span></p>
                    <!--<h1 class="text-center mb-5">Projets récemment terminés</h1>-->
                </div>
                <div class="row g-4 portfolio-container">
                    <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/portfolio-1.jpg" alt="">
                                
                            </div>
                            <div class="bg-light p-4">
                                <p class="text-primary fw-medium mb-2">Conception de Site Web</p><br>
                                <h5 class="lh-base mb-0">Création d'un site web pour une entreprise fictive de salon de thé.</a><br>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.3s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/portfolio-2.jpg" alt="">
                                
                            </div>
                            <div class="bg-light p-4">
                                <p class="text-primary fw-medium mb-2"> Adobe Illustrator - Création de logo</p><br>
                                <h5 class="lh-base mb-0">Création d'un logo pour une marque de vêtements écologique.</a><br>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.5s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/portfolio-3.jpg" alt="">
                               
                            </div>
                            <div class="bg-light p-4">
                                <p class="text-primary fw-medium mb-2">Analyse des Réseaux Sociaux</p><br>
                                <h5 class="lh-base mb-0">Analyse des performances des réseaux sociaux pour une petite entreprise.</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.1s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/portfolio-4.jpg" alt="">
                                
                            </div>
                            <div class="bg-light p-4">
                                <p class="text-primary fw-medium mb-2">Campagne de Marketing Digital</p><br>
                                <h5 class="lh-base mb-0">Lancement d'une campagne publicitaire pour promouvoir un produit local.       </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.3s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/portfolio-5.jpg" alt="">
                               
                            </div>
                            <div class="bg-light p-4">
                                <p class="text-primary fw-medium mb-2">Application Mobile</p><br>
                                <h5 class="lh-base mb-0">Développement d'une application pour suivre les habitudes de santé.   </a><br>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.5s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/portfolio-6.jpg" alt="">
                                
                            </div>
                            <div class="bg-light p-4">
                                <p class="text-primary fw-medium mb-2">Vidéo de Présentation</p><br>
                                <h5 class="lh-base mb-0">Création d'une vidéo pour présenter les services d'une agence de voyage.</a><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Projects End -->


        <!-- Testimonial Start -->
        <!-- Section Besoin d'aide -->
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
            <h2 class="mb-4">Besoin d'aide ?</h2>
            <p class="mb-4">Si vous rencontrez un problème ou si vous avez une question, nous sommes là pour vous aider. N’hésitez pas à nous faire part de vos préoccupations.</p>
           <!-- <a href="../Front_Office/les taches/maram/contact.html" class="btn btn-custom py-2 px-4 ms-3 d-none d-lg-block">Faire une réclamation</a>-->
        </div>
    </div>
</div>
        
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
                            <a class="btn btn-outline-light btn-social" href="https:/www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https:/www.instagram.com/"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https:/www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <p class="section-title text-white h5 mb-4">Lien rapide<span></span></p>
                        <a class="btn btn-link" href="../Front_Office/les taches/imen/blog.html">Blog</a>
                        <a class="btn btn-link" href="../Front_Office/les taches/akrem/Cours.html">    Cours</a>
                        <a class="btn btn-link" href="../Front_Office/les taches/firas/ecahnge.html">Questions</a>
                        <a class="btn btn-link" href="../Front_Office/les taches/nader/event.html">Evénement</a>
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
                                <a href="../Front_Office/index.php">Accueille</a>
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

    <!-- JavaScript Libraries -->
    <script src="https:/code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https:/cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../Front_Office/lib/wow/wow.js"></script>
    <script src="../Front_Office/lib/easing/easing.min.js"></script>
    <script src="../Front_Office/lib/waypoints/waypoints.min.js"></script>
    <script src="../Front_Office/lib/counterup/counterup.min.js"></script>
    <script src="../Front_Office/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../Front_Office/lib/isotope/isotope.pkgd.min.js"></script>
    <script src="../Front_Office/lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="../Front_Office/js/main.js"></script>
    <script src="les taches/maram/contactScript.js"></script>
</body>

</html>