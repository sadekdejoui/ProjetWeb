<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Questerra</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="http://localhost/Projet%20Web%20-%20Copie%201%20-%20Copie/View/Front-office/blog/img/favicon.ico">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Jost:wght@500;600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="http://localhost/Projet%20Web%20-%20Copie%201%20-%20Copie/View/Front-office/lib/animate/animate.min.css" rel="stylesheet">
    <link href="http://localhost/Projet%20Web%20-%20Copie%201%20-%20Copie/View/Front-office/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="http://localhost/Projet%20Web%20-%20Copie%201%20-%20Copie/View/Front-office/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="http://localhost/Projet%20Web%20-%20Copie%201%20-%20Copie/View/Front-office/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Template Stylesheet -->
    <link href="http://localhost/Projet%20Web%20-%20Copie%201%20-%20Copie/View/Front-office/css/style.css" rel="stylesheet">
</head>
<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Chargement</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <div class="logo-container">
                        <img src="http://localhost/Projet%20Web%20-%20Copie%201%20-%20Copie/View/Front-office/img/logo.png" alt="Logo de Questerra">
                        <h1 class="m-0">Questerra</h1>
                    </div>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto py-0">
                        <a href="index.html" class="nav-item nav-link">Accueil</a>
                        <a href="blog.php" class="nav-item nav-link active">Blog</a>
                        <a href="cours.html" class="nav-item nav-link">Cours</a>
                        <a href="questions.html" class="nav-item nav-link">Questions</a>
                        <a href="evenement.html" class="nav-item nav-link">Evénement</a>
                        <a href="contact.html" class="nav-item nav-link">Complaint</a>
                    </div>
                </div>
                <div class="dropdown">
                    <button class="dropdown-button">Settings</button>
                    <div class="dropdown-content">
                        <a href="account.html">Mon compte</a>
                        <a href="logout.html">Se déconnecter</a>
                    </div>
                </div>
            </nav>
        <!-- Navbar End -->
        <div class="container-xxl py-5 bg-primary hero-header">
            <div class="container my-5 py-5 px-lg-5">
                <div class="row g-5 py-5">
                    <div class="col-12 text-center">
                        <h1 class="text-white animated slideInDown">Blog</h1>
                        <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->

        <!-- Blog Section Start -->
        <div class="container py-5">
            <h1 class="text-center mb-5">Articles de Blog</h1>
            <div class="row">
                <?php
                // Inclure le fichier pour récupérer les articles
                include 'C:\xampp\htdocs\Projet Web - Copie 1 - Copie\View\Front-office\get_articles.php';

                // Vérifier si la variable $articles contient des articles
                if (count($articles) > 0) {
                    // Afficher chaque article
                    foreach ($articles as $article) {
                        echo '<div class="col-lg-4 col-md-6 mb-4">';
                        echo '<div class="card">';
                        echo '<img class="card-img-top" src="' . htmlspecialchars($article['image']) . '" alt="Blog Image">';                        echo '<div class="card-body">';
                        echo '<h5 class="card-title">' . htmlspecialchars($article['titre']) . '</h5>';
                        echo '<p class="card-text">' . htmlspecialchars($article['contenu']) . '</p>';
                        echo '<p class="text-muted">Publié le ' . $article['date_publication'] . '</p>';
                        echo '<a href="http://localhost/Projet%20Web%20-%20Copie%201%20-%20Copie/View/Front-office/blog/affichage_articles.php?id=' . $article['id'] . '" class="btn btn-primary me-2">Lire la suite</a>';
                
                // Afficher l'icône d'œil et le nombre de vues
          
                echo '<i class="fas fa-eye me-2"></i>'; // Ajout d'une marge à droite de l'icône
                echo htmlspecialchars($article['nombre_vues']) . ' vues';
                
                echo '</div>'; // Fin de d-flex
                echo '</div>'; // Fin de card-body
                echo '</div>'; // Fin de card
                    }
                } else {
                    echo '<div class="col-12"><p class="text-center">Aucun article trouvé.</p></div>';
                }
                ?>
            </div>
        </div>
        <!-- Blog Section End -->

        <!-- Ajouter un Article Button Section Start -->
        <div class="container py-5 text-center">
            <a href="ajouter_article.php" class="btn btn-lg btn-primary text-white border-0 rounded-pill shadow-sm px-4 py-2 mt-3">
                Ajouter un Article
            </a>
        </div>
        <!-- Ajouter un Article Button Section End -->

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
                        <a href="blog.php" class=" nav-item nav-link active">Blog</a>
                        <a class="btn btn-link" href="cours.php">Cours</a>
                        <a class="btn btn-link" href="questions.php">Questions</a>
                        <a class="btn btn-link" href="evenement.php">Evénement</a>
                        <a class="btn btn-link" href="contact.php" class="nav-item nav-link">Complaint</a>
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
                                <a href="index.php">Accueil</a>
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
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="http://localhost/Projet%20Web%20-%20Copie%201%20-%20Copie/View/Front-office/lib/wow/wow.js"></script>
<script src="http://localhost/Projet%20Web%20-%20Copie%201%20-%20Copie/View/Front-office/lib/easing/easing.min.js"></script>
<script src="http://localhost/Projet%20Web%20-%20Copie%201%20-%20Copie/View/Front-office/lib/waypoints/waypoints.min.js"></script>
<script src="http://localhost/Projet%20Web%20-%20Copie%201%20-%20Copie/View/Front-office/lib/counterup/counterup.min.js"></script>
<script src="http://localhost/Projet%20Web%20-%20Copie%201%20-%20Copie/View/Front-office/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="http://localhost/Projet%20Web%20-%20Copie%201%20-%20Copie/View/Front-office/lib/isotope/isotope.pkgd.min.js"></script>
<script src="http://localhost/Projet%20Web%20-%20Copie%201%20-%20Copie/View/Front-office/lib/lightbox/js/lightbox.min.js"></script>

   <!-- Template Javascript -->
<script src="http://localhost/Projet%20Web%20-%20Copie%201%20-%20Copie/View/Front-office/js/main.js"></script>
</body>
</html>