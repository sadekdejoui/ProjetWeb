<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Questerra</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="http://localhost/Projet%20Web%20-%20Copie%201/View/Front-office/blog/img/favicon.ico">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Jost:wght@500;600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="http://localhost/Projet%20Web%20-%20Copie%201/View/Front-office/lib/animate/animate.min.css" rel="stylesheet">
    <link href="http://localhost/Projet%20Web%20-%20Copie%201/View/Front-office/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="http://localhost/Projet%20Web%20-%20Copie%201/View/Front-office/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="http://localhost/Projet%20Web%20-%20Copie%201/View/Front-office/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="http://localhost/Projet%20Web%20-%20Copie%201/View/Front-office/css/style.css" rel="stylesheet">

    <script>
        // Script de validation au moment de la soumission du formulaire
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("articleForm").addEventListener("submit", function(event) {
                let formIsValid = true;

                // Vérifier le titre
                const title = document.getElementById("title").value;
                if (!/^[a-zA-Z0-9\s]{5,100}$/.test(title)) {
                    alert("Le titre doit comporter entre 5 et 100 caractères.");
                    formIsValid = false;
                }

                // Vérifier le nom de l'auteur
                const author = document.getElementById("author").value;
                if (!/^[a-zA-Z\s]+$/.test(author)) {
                    alert("Le nom de l'auteur doit contenir uniquement des lettres.");
                    formIsValid = false;
                }

                // Vérifier le contenu de l'article
                const content = document.getElementById("content").value;
                if (content.length < 10 || content.length > 2000) {
                    alert("Le contenu doit comporter entre 10 et 2000 caractères.");
                    formIsValid = false;
                }

                // Vérifier l'image (seulement si un fichier est sélectionné)
                const image = document.getElementById("image").files[0];
                if (image && !image.type.startsWith("image/")) {
                    alert("Veuillez sélectionner une image valide.");
                    formIsValid = false;
                }

                // Si la validation échoue, annuler l'envoi du formulaire
                if (!formIsValid) {
                    event.preventDefault();
                }
            });
        });

        // Fonction pour afficher l'aperçu de l'image sélectionnée
        function previewImage(event) {
            var image = document.getElementById('imagePreview');
            image.src= URL.createObjectURL(event.target.files[0]);
            image.style.display = 'block';
        }
    </script>
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
                        <img src="http://localhost/Projet%20Web%20-%20Copie%201/View/Front-office/img/logo.png" alt="Logo de Questerra">
                        <h1 class="m-0">Questerra</h1>
                    </div>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto py-0">
                        <a href="C:\xampp\htdocs\Projet Web\view\Front-office\index.html" class="nav-item nav-link">Accueil</a>
                        <a href="http://localhost/Projet%20Web%20-%20Copie%201/View/Front-office/blog/blog.php" class="nav-item nav-link active">Blog</a>
                        <a href="C:\xampp\htdocs\Projet Web\view\Front-office\les taches\akrem\Cours.html" class="nav-item nav-link">Cours</a>
                        <a href="C:\xampp\htdocs\Projet Web\view\Front-office\les taches\firas\ecahnge.html" class="nav-item nav-link">Questions</a>
                        <a href="C:\xampp\htdocs\Projet Web\view\Front-office\les taches\nader\event.html" class="nav-item nav-link">Evénement</a>
                        <a href="C:\xampp\htdocs\Projet Web\view\Front-office\les taches\maram\contact.html" class="nav-item nav-link">Complaint</a>
                    </div>
                </div>
                <div class="dropdown">
                    <button class="dropdown-button">Settings</button>
                    <div class="dropdown-content">
                        <a href="C:\xampp\htdocs\Projet Web\view\Front-office\les taches\sadek\account.html">Mon compte</a>
                        <a href="C:\xampp\htdocs\Projet Web\view\Front-office\les taches\sadek\index.html">Se déconnecter</a>
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

    <!-- Formulaire d'ajout d'article -->
    <div class="container py-5">
        <h1 class="text-center mb-5">Ajouter un Nouvel Article</h1>
        <form id="articleForm" action="submit_article.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="title" class="form-label">Titre de l'article</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="mb-3">
                <label for="author" class="form-label">Nom de l'auteur</label>
                <input type="text" class="form-control" id="author" name="author" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Adresse e-mail de l'auteur</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Contenu de l'article</label>
                <textarea class="form-control" id="content" name="content" rows="6" required></textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image de l'article</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*" onchange="previewImage(event)" required>
                <img id="imagePreview" src="#" alt="Aperçu de l'image" style="display: none; margin-top: 10px; max-height: 200px;" />
            </div>
            <button type="submit" class="btn btn-lg btn-primary text-white border-0 rounded-pill shadow-sm px-4 py-2 mt-3">Publier l'Article</button>
        </form>
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
                        <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <p class="section-title text-white h5 mb-4">Lien rapide<span></span></p>
                    <a href="http://localhost/Projet%20Web%20-%20Copie%201/View/Front-office/blog/blog.php" class="nav-item nav-link active">Blog</a>
                    <a class="btn btn-link" href="C:\xampp\htdocs\Projet Web\view\Front-office\les taches\akrem\Cours.html">Cours</a>
                    <a class="btn btn-link" href="C:\xampp\htdocs\Projet Web\view\Front-office\les taches\firas\ecahnge.html">Questions</a>
                    <a class="btn btn-link" href="C:\xampp\htdocs\Projet Web\view\Front-office\les taches\nader\event.html">Evénement</a>
                    <a class="btn btn-link" href="C:\xampp\htdocs\Projet Web\view\Front-office\les taches\maram\contact.html" class="nav-item nav-link">Complaint</a>
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
                        <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="Votre email" style="height : 48px;">
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
                            <a href="http://localhost/Projet%20Web%20-%20Copie%201/View/Front-office/index.html">Accueil</a>
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
<script src="http://localhost/Projet%20Web%20-%20Copie%201/View/Front-office/lib/wow/wow.js"></script>
<script src="http://localhost/Projet%20Web%20-%20Copie%201/View/Front-office/lib/easing/easing.min.js"></script>
<script src="http://localhost/Projet%20Web%20-%20Copie%201/View/Front-office/lib/waypoints/waypoints.min.js"></script>
<script src="http://localhost/Projet%20Web%20-%20Copie%201/View/Front-office/lib/counterup/counterup.min.js"></script>
<script src="http://localhost/Projet%20Web%20-%20Copie%201/View/Front-office/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="http://localhost/Projet%20Web%20-%20Copie%201/View/Front-office/lib/isotope/isotope.pkgd.min.js"></script>
<script src="http://localhost/Projet%20Web%20-%20Copie%201/View/Front-office/lib/lightbox/js/lightbox.min.js"></script>

<!-- Template Javascript -->
<script src="http://localhost/Projet%20Web%20-%20Copie%201/View/Front-office/js/main.js"></script>
<script src="formValidation.js"></script>
</body>
</html>