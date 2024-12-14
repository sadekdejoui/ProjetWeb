<?php
// edit_article.php
include 'C:\xampp\htdocs\ReProjet\View\Front_Office\get_articles.php'; // Inclure le fichier pour récupérer les articles

// Vérifiez si l'ID de l'article est passé dans l'URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Créer une instance de la connexion à la base de données
    $conn = config::getConnexion();

    // Préparer la requête SQL pour récupérer l'article par son ID
    $query = "SELECT * FROM articles WHERE id = :id";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();

    // Récupérer l'article
    $article = $stmt->fetch(PDO::FETCH_ASSOC);

    // Si l'article n'existe pas
    if (!$article) {
        echo "Article introuvable.";
        exit();
    }
} else {
    echo "ID manquant.";
    exit();
}

// Traitement du formulaire de mise à jour
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $titre = $_POST['titre'];
    $auteur = $_POST['auteur'];
    $contenu = $_POST['contenu'];
    $imagePath = $article['image']; // Conserver l'ancienne image par défaut

    // Vérifiez si un fichier a été téléchargé
    if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES['image']['tmp_name'];
        $fileName = $_FILES['image']['name'];
        $fileSize = $_FILES['image']['size'];
        $fileType = $_FILES['image']['type'];
        $fileNameCmps = explode(".", $fileName);
        $fileExtension = strtolower(end($fileNameCmps));

        // Vérifiez l'extension du fichier
        $allowedfileExtensions = array('jpg', 'gif', 'png', 'jpeg');
        if (in_array($fileExtension, $allowedfileExtensions)) {
            // Déplacez le fichier téléchargé vers le dossier souhaité
            $uploadFileDir = './uploads/';
            $dest_path = $uploadFileDir . $fileName;

            if (move_uploaded_file($fileTmpPath, $dest_path)) {
                $imagePath = $dest_path; // Mettre à jour le chemin de l'image
            } else {
                echo "Erreur lors du téléchargement de l'image.";
            }
        } else {
            echo "Extension de fichier non autorisée.";
        }
    }


    // Préparez la requête pour mettre à jour l'article
    $stmt = $conn->prepare("UPDATE articles SET titre = ?, auteur = ?, contenu = ?, image = ? WHERE id = ?");
    $stmt->execute([$titre, $auteur, $contenu, $imagePath, $id]);

    header("Location: affichage_articles.php?id=" . $id);// Redirigez vers la page du blog après la mise à jour
    exit;
}
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
    <link rel="shortcut icon" type="image/x-icon" href="http://localhost/ReProjet/View/Front_Office/blog/img/favicon.ico">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Jost:wght@500;600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="http://localhost/ReProjet/View/Front_Office/lib/animate/animate.min.css" rel="stylesheet">
    <link href="http://localhost/ReProjet/View/Front_Office/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="http://localhost/ReProjet/View/Front_Office/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="http://localhost/ReProjet/View/Front_Office/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="http://localhost/ReProjet/View/Front_Office/css/style.css" rel="stylesheet">
    <script>
        function validateForm(event) {
            // Annuler la soumission du formulaire par défaut
            event.preventDefault();

            // Récupérer les valeurs des champs
            const titre = document.querySelector('input[name="titre"]').value;
            const auteur = document.querySelector('input[name="auteur"]').value;
            const contenu = document.querySelector('textarea[name="contenu"]').value;

            // Initialiser un tableau pour les messages d'erreur
            let errors = [];

            // Vérification du titre
            if (titre.trim() === '') {
                errors.push("Le titre ne peut pas être vide.");
            } else if (titre.length < 3) {
                errors.push("Le titre doit contenir au moins 3 caractères.");
            }

            // Vérification de l'auteur
            if (auteur.trim() === '') {
                errors.push("L'auteur ne peut pas être vide.");
            } else if (auteur.length < 3) {
                errors.push("Le nom de l'auteur doit contenir au moins 3 caractères.");
            }  
            // Vérification du contenu
            if (contenu.trim() === '') {
                errors.push("Le contenu ne peut pas être vide.");
            } else if (contenu.length < 100) {
                errors.push("Le contenu doit contenir au moins 100 caractères.");
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
                        <img src="http://localhost/ReProjet/View/Front_Office/img/logo.png" alt="Logo de Questerra">
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
    <div class="container">
    <h1>Modifier l'article</h1>
    <div>
        <ul id="error-messages" style="color: red;"></ul> <!-- Conteneur pour les messages d'erreur -->
    </div>
    <form method="POST" action="" onsubmit="return validateForm()">
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($article['id']); ?>">

        <div class="mb-3">
            <label for="titre" class="form-label">Titre :</label>
            <input type="text" class="form-control" id="titre" name="titre" value="<?php echo htmlspecialchars($article['titre']); ?>" maxlength="100">
            <p id="titre-error" style="color: red; display: none;"></p> <!-- Message d'erreur pour le titre -->
        </div>

        <div class="mb-3">
            <label for="auteur" class="form-label">Auteur :</label>
            <input type="text" class="form-control" id="auteur" name="auteur" value="<?php echo htmlspecialchars($article['auteur']); ?>" maxlength="50">
            <p id="auteur-error" style="color: red; display: none;"></p> <!-- Message d'erreur pour l'auteur -->
        </div>

        <div class="mb-3">
            <label for="contenu" class="form-label">Contenu :</label>
            <textarea class="form-control" id="contenu" name="contenu" rows="5"><?php echo htmlspecialchars($article['contenu']); ?></textarea>
            <p id="contenu-error" style="color: red; display: none;"></p> <!-- Message d'erreur pour le contenu -->
        </div>
        <div class="mb-3">
                    <label for="image" class="form-label">Image :</label>
                    <input type="file" class="form-control" id="image" name="image">
                    <p class="text-muted">Laissez vide si vous ne souhaitez pas changer l'image.</p>
                </div>

        <div class="mb-3 text-center">
            <button type="submit" class="btn btn-primary">Mettre à jour</button>
            <input type="reset" class="btn btn-primary" value="Réinitialiser">
        </div>
    </form>
    <a href="ListArticles.php" class="btn btn-link">Retour à la liste</a>
</div>
<!-- Footer Start -->
<div class="container-fluid bg-primary text-light footer wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5 px-lg-5">
            <div class="row g-5">
                <div class="col-md-6 col-lg-3">
                    <p class="section-title text-white h5 mb-4">Address<span></span></p>
                    <p><i class="fa fa-map-marker-alt me php
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
                    <a href="blog.php" class="nav-item nav-link active">Blog</a>
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
<script src="http://localhost/ReProjet/View/Front_Office/lib/wow/wow.js"></script>
<script src="http://localhost/ReProjet/View/Front_Office/lib/easing/easing.min.js"></script>
<script src="http://localhost/ReProjet/View/Front_Office/lib/waypoints/waypoints.min.js"></script>
<script src="http://localhost/ReProjet/View/Front_Office/lib/counterup/counterup.min.js"></script>
<script src="http://localhost/ReProjet/View/Front_Office/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="http://localhost/ReProjet/View/Front_Office/lib/isotope/isotope.pkgd.min.js"></script>
<script src="http://localhost/ReProjet/View/Front_Office/lib/lightbox/js/lightbox.min.js"></script>

<!-- Template Javascript -->
<script src="http://localhost/ReProjet/View/Front_Office/js/main.js"></script>
</body>
</html>