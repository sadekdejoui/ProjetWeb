<?php
// edit_comment.php
$dsn = 'mysql:host=localhost;dbname=questerra;charset=utf8';
$username = 'root'; // Remplacez par votre nom d'utilisateur
$password = ''; // Remplacez par votre mot de passe

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Vérifiez si l'ID du commentaire est passé dans l'URL
    if (isset($_GET['id'])) {
        $id = (int)$_GET['id']; // Convertir en entier pour éviter les injections

        // Préparez la requête pour récupérer le commentaire
        $stmt = $pdo->prepare("SELECT * FROM commentaires WHERE id = ?");
        $stmt->execute([$id]);
        $commentaire = $stmt->fetch(PDO::FETCH_ASSOC);

        // Vérifiez si le commentaire existe
        if ($commentaire) {
            ?>
            <!DOCTYPE html>
            <html lang="fr">
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
                <script>
                    function validateForm(event) {
                        // Annuler la soumission du formulaire par défaut
                        event.preventDefault();

                        // Récupérer les valeurs des champs
                        const auteur = document.getElementById('auteur').value;
                        const contenu = document.getElementById('contenu').value;

                        // Initialiser un tableau pour les messages d'erreur
                        let errors = [];

                        // Vérification de l'auteur
                        if (auteur.trim() === '') {
                            errors.push("L'auteur ne peut pas être vide.");
                        }

                        // Vérification du contenu
                        if (contenu.trim() === '') {
                            errors.push("Le contenu ne peut pas être vide.");
                        }

                        // Afficher les messages d'erreur ou soumettre le formulaire
                        const errorContainer = document.getElementById('error-messages');
                        errorContainer.innerHTML = ''; // Réinitialiser les messages d'erreur

                        if (errors.length > 0) {
                            // Afficher les messages d'erreur
                            errors.forEach(error => {
                                const li = document.createElement('li');
                                li.textContent = error;
                                errorContainer.appendChild(li);
                            });
                        } else {
                            // Si aucune erreur, soumettre le formulaire
                            document.querySelector('form').submit();
                        }
                    }
                </script>
                <style>
                    .dropdowncomplaint-content {
                        display: none;
                        position: absolute;
                        background-color: #fff;
                        min-width: 200px;
                        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
                        border-radius: 6px;
                        overflow: hidden;
                        z-index: 1;
                    }

                    .dropdowncomplaint-content a {
                        color: #333;
                        padding: 10px 15px;
                        text-decoration: none;
                        display: block;
                        font-size: 14px;
                        transition: background-color 0.3s ease, color 0.3s ease;
                    }

                    .dropdowncomplaint-content a:hover {
                        background-color: #b39ddb;
                        color: white;
                    }

                    /* Show Dropdown on Hover */
                    .dropdowncomplaint:hover .dropdowncomplaint-content {
                        display: block;
                    }

                </style>
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
                        <a href="..\Front-office\blog.php" class="nav-item nav-link active">Blog</a>
                        <a href="..\Front-office\Cours.html" class="nav-item nav-link ">Courses</a>
                        <a href="..\Front-office\ecahnge.html" class="nav-item nav-link">Questions</a>
                        <a href="..\Front-office\event.php" class="nav-item nav-link">Events</a>
                        <a href="contact.php" class="nav-item nav-link ">Complaints</a>
                      
                    </div>
                </div>

                <div class="dropdowncomplaint" style="margin-right: 7px;">
                        <button class="dropdowncomplaint-button">Settings</button>
                        <div class="dropdowncomplaint-content">
                          <a href="..\Front-office\account.php">Mon compte</a>
                          <a href="..\Front-office\login.html">Se déconnecter</a>
                        </div>
                    </div>
                    <div class="dropdowncomplaint">

                      <button class="dropdowncomplaint-button">Complaint</button>
                        <div class="dropdowncomplaint-content">
                        <a href="..\Front-office\contact.php">Add Complaint</a>
                          <!--<a href="./history.php">View Complaints</a>-->
                          <a href="./ComplaintResponse.php">Complaint Progress</a>
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
                <div class="container">
                    <h1>Modifier Commentaire</h1>
                    <div>
                        <ul id="error-messages" style="color: red;"></ul> <!-- Conteneur pour les messages d'erreur -->
                    </div>
                    <form action="update_comment.php" method="POST" onsubmit="validateForm(event)">
                        <input type="hidden" name="id" value="<?php echo $commentaire['id']; ?>">
                        <input type="hidden" name="article_id" value="<?php echo $commentaire['article_id']; ?>">
                        <div class="mb-3">
                            <label for="auteur" class="form-label">Votre nom</label>
                            <input type="text" class="form-control" id="auteur" name="auteur" value="<?php echo htmlspecialchars($commentaire['auteur']); ?>">
                        </div>
                        <div class="mb-3">
                            <label for="contenu" class="form-label">Votre commentaire</label>
                            <textarea class="form-control" id="contenu" name="contenu"><?php echo htmlspecialchars($commentaire['contenu']); ?></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Mettre à jour</button>
                    </form>
                </div>
            
            <?php
        } else {
            echo "Commentaire non trouvé.";
        }
    } else {
        echo "Aucun commentaire spécifié.";
    }
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}
?>
<!-- Footer Start -->
<div class="container-fluid bg-primary text-light footer wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5 px-lg-5">
            <div class="row g-5">
                <div class="col-md-6 col-lg-3">
                    <p class="section-title text-white h5 mb-4">Address<span></span></p>
                    <p><i class="fa fa-map-marker-alt me 
php
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
<script src="http://localhost/Projet%20Web/View/Front-office/lib/isotope/isotope.pkgd.min.js"></script>
<script src="http://localhost/Projet%20Web/View/Front-office/lib/lightbox/js/lightbox.min.js"></script>

<!-- Template Javascript -->
<script src="http://localhost/Projet%20Web/View/Front-office/js/main.js"></script>
</body>
</html>