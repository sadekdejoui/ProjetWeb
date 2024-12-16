<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Questerra</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="http://localhost/Projet%20Web/View/Front-office/img/favicon.ico">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Jost:wght@500;600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="http://localhost/Projet%20Web/View/Front-office/lib/animate/animate.min.css" rel="stylesheet">
    <link href="http://localhost/Projet%20Web/View/Front-office/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="http://localhost/Projet%20Web/View/Front-office/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="http://localhost/Projet%20Web/View/Front-office/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="http://localhost/Projet%20Web/View/Front-office/css/style.css" rel="stylesheet">
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
                        <img src="http://localhost/Projet%20Web/View/Front-office/img/logo.png" alt="Logo de Questerra">
                        <h1 class="m-0">Questerra</h1>
                    </div>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto py-0">
                        <a href="..\Front-office\index2.php" class="nav-item nav-link ">Home</a>
                        <a href="..\Front-office\blog.php" class="nav-item nav-link active" >Blog</a>
                        <a href="..\Front-office\Cours.html" class="nav-item nav-link">Courses</a>
                        <a href="..\Front-office\ecahnge.html" class="nav-item nav-link">Questions</a>
                        <a href="..\Front-office\event.html" class="nav-item nav-link ">Events</a>
                        <a href="contact.php" class="nav-item nav-link ">Complaints</a>
                      
                    </div>
                </div>
                    <div class="dropdown">
                        <button class="dropdown-button">Settings</button>
                        <div class="dropdown-content">
                            <a href="account.php">Mon compte</a>
                            <a href="login.html">Se déconnecter</a>
                        </div>
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

    <!-- Article Content Start -->
    <div class="container py-5 article-content">
        <?php
        // Connexion à la base de données
        $dsn = 'mysql:host=localhost;dbname=questerra;charset=utf8';
        $username = 'root'; // Remplacez par votre nom d'utilisateur
        $password = ''; // Remplacez par votre mot de passe

        try {
            $pdo = new PDO($dsn, $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Vérifiez si l'ID de l'article est passé dans l'URL
            if (isset($_GET['id'])) {
                $id = (int)$_GET['id']; // Convertir en entier pour éviter les injections

                // Préparez la requête pour récupérer l'article
                $stmt = $pdo->prepare("SELECT * FROM articles WHERE id = ?");
                $stmt->execute([$id]);
                $article = $stmt->fetch(PDO::FETCH_ASSOC);

                
            }
        } catch (PDOException $e) {
            echo "Erreur de connexion : " . $e->getMessage();
        }
        ?>
    </div>
    <!-- Article Content End -->
     <!-- Formulaire d'ajout d'article -->
<div class="container py-5">
    <h1 class="text-center mb-5">Ajouter un Nouvel Article</h1>
    <form id="articleForm" action="submit_article.php" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="title" class="form-label">Titre de l'article</label>
            <input type="text" class="form-control" id="title" name="title">
            <p id="title-error" style="color: red; display: none;"></p>
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">Nom de l'auteur</label>
            <input type="text" class="form-control" id="author" name="author">
            <p id="author-error" style="color: red; display: none;"></p>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Adresse e-mail de l'auteur</label>
            <input type="text" class="form-control" id="email" name="email">
            <p id="email-error" style="color: red; display: none;"></p>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Contenu de l'article</label>
            <textarea class="form-control" id="content" name="content" rows="6"></textarea>
            <p id="content-error" style="color: red; display: none;"></p>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image de l'article</label>
            <input type="file" class="form-control" id="image" name="image" onchange="previewImage(event)">
            <img id="imagePreview" src="#" alt="Aperçu de l'image" style="display: none; margin-top: 10px; max-height: 200px;" />
            <p id="image-error" style="color: red; display: none;"></p>
        </div>
        <button type="submit" class="btn btn-lg btn-primary text-white border-0 rounded-pill shadow-sm px-4 py-2 mt-3">Publier l'Article</button>
    </form>
</div>

<script>
    document.getElementById('articleForm').addEventListener('submit', function(event) {
        var title = document.getElementById('title').value.trim();
        var author = document.getElementById('author').value.trim();
        var email = document.getElementById('email').value.trim();
        var content = document.getElementById('content').value.trim();
        var image = document.getElementById('image').files[0];
        
        // Réinitialiser les messages d'erreur
        document.getElementById('title-error').style.display = 'none';
        document.getElementById('author-error').style.display = 'none';
        document.getElementById('email-error').style.display = 'none';
        document.getElementById('content-error').style.display = 'none';
        document.getElementById('image-error').style.display = 'none';

        var hasError = false;

        // Vérifier le titre
        if (title.length < 3) {
            document.getElementById('title-error').textContent = 'Le titre doit contenir au moins 3 caractères.';
            document.getElementById('title-error').style.display = 'block';
            hasError = true;
        }

        // Vérifier l'auteur
        if (author.length < 3) {
            document.getElementById('author-error').textContent = 'Le nom de l\'auteur doit contenir au moins 3 caractères.';
            document.getElementById('author-error').style.display = 'block';
            hasError = true;
        }

        // Vérifier l'email (simple validation de format)
        if (email === '' || !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
            document.getElementById('email-error').textContent = 'L\'adresse e-mail est requise et doit être valide.';
            document.getElementById('email-error').style.display = 'block';
            hasError = true;
        }

        // Vérifier le contenu
        if (content.length < 100) {
            document.getElementById('content-error').textContent = 'Le contenu de l\'article doit contenir au moins 100 caractères.';
            document.getElementById('content-error').style.display = 'block';
            hasError = true;
        }

        // Vérifier l'image
        if (!image) {
            document.getElementById('image-error').textContent = 'Une image est requise.';
            document.getElementById('image-error').style.display = 'block';
            hasError = true;
        } else if (!['image/jpeg', 'image/png', 'image/gif'].includes(image.type)) {
            document.getElementById('image-error').textContent = 'Le fichier doit être une image (JPG, PNG, GIF).';
            document.getElementById('image-error').style.display = 'block';
            hasError = true;
        } else if (image.size > 2 * 1024 * 1024) { // Limite de 2 Mo
            document.getElementById('image-error').textContent = 'L\'image ne doit pas dépasser 2 Mo.';
            document.getElementById('image-error').style.display = 'block';
            hasError = true;
        }

        // Si des erreurs sont présentes, empêcher l'envoi du formulaire
        if (hasError) {
            event.preventDefault();
        }
    });

    function previewImage(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var output = document.getElementById('imagePreview');
            output.src = reader.result;
            output.style.display = 'block';
        };
        reader.readAsDataURL(event.target.files[0]);
    }
</script>

   

   

    <!-- Footer Start -->
    <div class="container-fluid bg-primary text-light footer wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5 px-lg-5">
            <div class="row g-5">
                <div class="col-md-6 col-lg-3">
                    <p class="section-title text-white h5 mb-4">Address<span></span></p>
                    <p><i class="fa fa-map-marker-alt me ```php
                    <i class="fa fa-map-marker-alt me-3"></i>2083 Cité La Gazelle, Ariana, Tunisia</p>
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
                        <!-- <a class="btn btn-link" href="../Front-office/contact.php" class="nav-item nav-link">Complaint</a>-->
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
                            <a href="index2.php">Accueil</a>
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
<script src="http://localhost/Projet%20Web/View/Front-office/lib/wow/wow.js"></script>
<script src="http://localhost/Projet%20Web/View/Front-office/lib/easing/easing.min.js"></script>
<script src="http://localhost/Projet%20Web/View/Front-office/lib/waypoints/waypoints.min.js"></script>
<script src="http://localhost/Projet%20Web/View/Front-office/lib/counterup/counterup.min.js"></script>
<script src="http://localhost/Projet%20Web/View/Front-office/lib/owlcarousel/owl.carousel.min.js"></script>
<script src ```php
="http://localhost/Projet%20Web/View/Front-office/lib/isotope/isotope.pkgd.min.js"></script>
<script src="http://localhost/Projet%20Web/View/Front-office/lib/lightbox/js/lightbox.min.js"></script>

<!-- Template Javascript -->
<script src="http://localhost/Projet%20Web/View/Front-office/js/main.js"></script>
</body>
</html>