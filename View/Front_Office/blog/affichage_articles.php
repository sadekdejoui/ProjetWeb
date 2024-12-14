<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Questerra</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <style>
    .btn-spacing {
    margin-right: 5px; /* Ajustez la valeur selon vos besoins */
    margin-left: 10px;
    }
    </style>

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
                $updateViewsStmt = $pdo->prepare("UPDATE articles SET nombre_vues = nombre_vues + 1 WHERE id = ?");
                $updateViewsStmt->execute([$id]);

                // Préparez la requête pour récupérer l'article
                $stmt = $pdo->prepare("SELECT * FROM articles WHERE id = ?");
                $stmt->execute([$id]);
                $article = $stmt->fetch(PDO::FETCH_ASSOC);

                // Vérifiez si l'article existe
                if ($article) {
                    // Affichez l'article
                    echo "<h1>" . htmlspecialchars($article['titre']) . "</h1>";
                    echo "<p><strong>Auteur :</strong> " . htmlspecialchars($article['auteur']) . "</p>";
                    if (!empty($article['image'])) {
                        echo "<img src='" . htmlspecialchars($article['image']) . "' alt='Image de l'article' style='max-width: 100%; height: auto;'>";
                    } else {
                        echo '<p><em>Aucune image disponible pour cet article.</em></p>';
                    }
                    echo "<p class='article-content'>" . nl2br(htmlspecialchars($article['contenu'])) . "</p>";                    echo "<p><strong>Publié le :</strong>" . htmlspecialchars($article['date_publication']) . "</p>";
                    echo "<p><strong>Nombre de vues :</strong> " . htmlspecialchars($article['nombre_vues']) . "</p>"; // Afficher le nombre de vues
                    echo '<a href="edit_article.php?id=' . $article['id'] . '" class="btn btn-primary" style="margin-right: 10px;">Modifier</a>';
                    echo '<a href="supprimer_article.php?id=' . $article['id'] . '" class="btn btn-primary" onclick="return confirm(\'Voulez-vous vraiment supprimer cet article ?\')">Supprimer</a>';
                } else {
                    echo "Article non trouvé.";
                }
            } else {
                echo "Aucun article spécifié.";
            }
        } catch (PDOException $e) {
            echo "Erreur de connexion : " . $e->getMessage();
        }
        ?>
    </div>
    <!-- Article Content End -->

    <!-- Comment Section Start -->
<div class="container comment-section">
    <h3>Ajouter un Commentaire</h3>
    <form id="commentForm" action="submit_comment.php" method="POST">
        <input type="hidden" name="article_id" value="<?php echo $article['id']; ?>">
        <div class="mb-3">
            <label for="auteur" class="form-label">Votre nom</label>
            <input type="text" class="form-control" id="auteur" name="auteur">
        </div>
        <div class="mb-3">
            <label for="contenu" class="form-label">Votre commentaire</label>
            <textarea class="form-control" id="contenu" name="contenu" rows="4"></textarea>
        </div>
        <p id="error-message" style="color: red; display: none;"></p> <!-- Message d'erreur -->
        <button type="submit" class="btn btn-primary">Publier</button>
    </form>
</div>
<script>
    document.getElementById('commentForm').addEventListener('submit', function(event) {
        var auteur = document.getElementById('auteur').value.trim();
        var contenu = document.getElementById('contenu').value.trim();
        var errorMessage = document.getElementById('error-message');

        if (auteur === '' || contenu === '') {
            event.preventDefault(); // Empêche l'envoi du formulaire
            errorMessage.textContent = 'Veuillez remplir tous les champs.'; // Affiche le message d'erreur
            errorMessage.style.display = 'block'; // Affiche le message
        } else {
            errorMessage.style.display = 'none'; // Cache le message si tout est rempli
        }
    });
</script>

    <!-- Comment Section End -->
    <?php
// Check if the article exists before trying to fetch comments
if (isset($article) && $article) {
    $stmt = $pdo->prepare("SELECT * FROM commentaires WHERE article_id = ? ORDER BY date_creation DESC");
    $stmt->execute([$article['id']]);
    $commentaires = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
?>
    <div class="container">
        <h3>Commentaires</h3>
        <?php
        if ($commentaires) {
            foreach ($commentaires as $commentaire) {
                echo "<div class='comment'>";
                echo "<p><strong>" . htmlspecialchars($commentaire['auteur']) . "</strong>: " . nl2br(htmlspecialchars($commentaire['contenu'])) . "</p>";
                echo "<small>Posté le " . htmlspecialchars($commentaire['date_creation']) . "</small>";
                echo "<p><strong>" . htmlspecialchars($commentaire['likes']) . " Likes</strong> | <strong>" . htmlspecialchars($commentaire['dislikes']) . " Dislikes</strong></p>";
                echo "<div class='btn-group' role='group' aria-label='Actions' style='margin-left: 20px;'>";
                echo "<button class='btn btn-success me-2 like-button' data-id='" . $commentaire['id'] . "'>Like</button>";
                echo "<button class='btn btn-danger dislike-button' data-id='" . $commentaire['id'] . "'>Dislike</button>";
                echo "<a href='modif_comment.php?id=" . $commentaire['id'] . "' class='btn btn-primary me-2'>Modifier</a>";
                echo "<a href='supprimer_comment.php?id=" . $commentaire['id'] . "' onclick='return confirm(\"Êtes-vous sûr de vouloir supprimer ce commentaire ?\");' class='btn btn-primary'>Supprimer</a>";
                echo "</div>";
                echo "</div><hr>";
            }
        } else {
            echo "<p>Aucun commentaire pour cet article.</p>";
        }
    }
    ?>
    </div>
<!-- CSS Personnalisé (Optionnel) -->
<style>
    .margin-left {
        margin-left: 20px; /* Ajustez la valeur selon vos besoins */
    }
</style>
   
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
<style>
    .article-content p {
        word-wrap: break-word; /* Pour les navigateurs qui supportent cette propriété */
        overflow-wrap: break-word; /* Pour les navigateurs modernes */
    }
</style>

...

echo "<p class='article-content'>" . nl2br(htmlspecialchars($article['contenu'])) . "</p>";
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script>
    $(document).ready(function() {
        // Gestion des clics sur le bouton Like
        $(document).on('click', '.like-button', function() {
            var commentaireId = $(this).data('id');
            $.ajax({
                url: 'update_comment_likes.php',
                type: 'POST',
                data: { id: commentaireId, action: 'like' },
                success: function(response) {
                    var data = JSON.parse(response);
                    if (data.success) {
                        var likesCount = $('#comment-' + commentaireId).find('.likes-count');
                        likesCount.text(parseInt(likesCount.text()) + 1 + ' Likes');
                    }
                }
            });
        });

        // Gestion des clics sur le bouton Dislike
        $(document).on('click', '.dislike-button', function() {
            var commentaireId = $(this).data('id');
            $.ajax({
                url: 'update_comment_likes.php',
                type: 'POST',
                data: { id: commentaireId, action: 'dislike' },
                success: function(response) {
                    var data = JSON.parse(response);
                    if (data.success) {
                        var dislikesCount = $('#comment-' + commentaireId).find('.dislikes-count');
                        dislikesCount.text(parseInt(dislikesCount.text()) + 1 + ' Dislikes');
                    }
                }
            });
        });
    });
</script>

    <!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="http://localhost/ReProjet/View/Front_Office/lib/wow/wow.js"></script>
<script src="http://localhost/ReProjet/View/Front_Office/lib/easing/easing.min.js"></script>
<script src="http://localhost/ReProjet/View/Front_Office/lib/waypoints/waypoints.min.js"></script>
<script src="http://localhost/ReProjet/View/Front_Office/lib/counterup/counterup.min.js"></script>
<script src="http://localhost/ReProjet/View/Front_Office/lib/owlcarousel/owl.carousel.min.js"></script>
<script src
php
="http://localhost/ReProjet/View/Front_Office/lib/isotope/isotope.pkgd.min.js"></script>
<script src="http://localhost/ReProjet/View/Front_Office/lib/lightbox/js/lightbox.min.js"></script>

<!-- Template Javascript -->
<script src="http://localhost/ReProjet/View/Front_Office/js/main.js"></script>
</body>
</html>