<?php require_once 'views/layout.php'; ?>



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
                        <img src="img/logo.png" alt="Logo de Questerra">
                        <h1 class="m-0">Questerra</h1>
                    </div>
                    
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto py-0">
                        <a href="C:\Users\sadekk\Desktop\Projet Web\view\Front-office\index.html" class="nav-item nav-link">Accueil</a>
                        <a href="C:\Users\sadekk\Desktop\Projet Web\view\Front-office\les taches\imen\blog.html" class="nav-item nav-link ">Blog</a>
                        <a href="C:\Users\sadekk\Desktop\Projet Web\view\Front-office\les taches\akrem\Cours.html" class="nav-item nav-link ">Cours</a>
                        <a href="C:\Users\sadekk\Desktop\Projet Web\view\Front-office\les taches\firas\ecahnge.html" class="nav-item nav-link active">Questions</a>
                        <a href="C:\Users\sadekk\Desktop\Projet Web\view\Front-office\les taches\nader\event.html" class="nav-item nav-link">Evénement</a>
                        <a href="C:\Users\sadekk\Desktop\Projet Web\view\Front-office\les taches\maram\contact.html" class="nav-item nav-link">Complaint</a>
                      
                    </div>
                </div>
                    
                    <div class="dropdown">
                        
                        <button class="dropdown-button">Settings</button>
                        <div class="dropdown-content">
                          <a href="C:\Users\sadekk\Desktop\Projet Web\view\Front-office\les taches\sadek\account.html">Mon compte</a>
                          <a href="C:\Users\sadekk\Desktop\Projet Web\view\Front-office\les taches\sadek\index.html">Se déconnecter</a>
                        </div>
                      </div>
            </nav>

            <!-- ending of header -->   
            <div class="container-xxl py-5 bg-primary hero-header">
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5 py-5">
                        <div class="col-12 text-center">
                            <h1 class="text-white animated slideInDown">Questions</h1>
                            <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Posts 2 Section -->
<section id="blog-posts-2" class="blog-posts-2 section">
    <div class="container">
        <div class="row gy-5">
            <?php foreach ($discussions as $discussion): ?>
                <div class="col-lg-4 col-md-6">
                    <article class="card mauve-card p-3 shadow-sm">
                        <!-- Titre de la discussion -->
                        <h2 class="title">
                            <p><?= htmlspecialchars($discussion['user']); ?></p>
                        </h2>

                        <!-- Métadonnées de la discussion -->
                        <div class="meta-top">
                            <ul>
                                <li class="d-flex align-items-center">
                                    <a href="#"><?= htmlspecialchars($discussion['categorie_nom']); ?></a>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="bi bi-dot"></i> 
                                    <a href="#">
                                        <time datetime="<?= $discussion['date_creation']; ?>">
                                            <?= date("d M Y", strtotime($discussion['date_creation'])); ?>
                                        </time>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <!-- Contenu de la discussion -->
                        <h2 class="title">
                            <a href="#"><?= htmlspecialchars($discussion['titre']); ?></a>
                        </h2>
                        <p><?= htmlspecialchars($discussion['contenu']); ?></p>
                        <!-- Afficher la photo ou vidéo -->
<?php if (!empty($discussion['media'])): ?>
    <?php 
    $mediaPath = 'uploads/' . $discussion['media']; 
    $mediaType = strtolower(pathinfo($mediaPath, PATHINFO_EXTENSION));
    if (in_array($mediaType, ['jpg', 'jpeg', 'png', 'gif'])): ?>
        <img src="<?= $mediaPath; ?>" alt="Média de la discussion" class="img-fluid mt-3">
    <?php elseif (in_array($mediaType, ['mp4', 'webm'])): ?>
        <video controls class="mt-3">
            <source src="<?= $mediaPath; ?>" type="video/<?= $mediaType; ?>">
            Votre navigateur ne prend pas en charge la vidéo.
        </video>
    <?php endif; ?>
<?php endif; ?>


                        <!-- Actions pour la discussion -->
                        <div class="mt-3">
                            <a href="index.php?action=edit&id=<?= $discussion['id_thread']; ?>" class="btn btn-primary btn-sm">Modifier</a>
                            <a href="index.php?action=delete&id=<?= $discussion['id_thread']; ?>" 
                               class="btn btn-danger btn-sm"
                               onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette discussion ?');">Supprimer</a>
                        </div>

                        <!-- Bouton pour voir les réponses -->
                        <button class="btn btn-info btn-sm mt-3" data-bs-toggle="modal" data-bs-target="#modalReponses<?= $discussion['id_thread']; ?>">
                            Voir réponses
                        </button>

                        <!-- Modal pour afficher les réponses -->
<div class="modal fade" id="modalReponses<?= $discussion['id_thread']; ?>" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel">Réponses pour <?= htmlspecialchars($discussion['titre']); ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php if (!empty($discussion['reponses'])): ?>
                    <ul>
                        <?php foreach ($discussion['reponses'] as $reponse): ?>
                            <li id="response-<?= $reponse['id_reponse']; ?>">
                                <p><?= htmlspecialchars($reponse['contenu']); ?></p>
                                <small>Posté par <?= htmlspecialchars($reponse['user']); ?> le <?= $reponse['date_creation']; ?></small>
                                <button class="button" onclick="href='index.php?action=deleteReponse&id=<?= $reponse['id_reponse']; ?>'">
                                <i class="fa fa-trash"></i>
                                <a href="index.php?action=editReponse&id=<?= $reponse['id_reponse']; ?>" class="btn btn-primary btn-sm">Modifier</a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php else: ?>
                    <p>Aucune réponse pour cette discussion.</p>
                <?php endif; ?>

                <!-- Formulaire pour ajouter une réponse -->
                <h4 class="mt-4">Ajouter une réponse :</h4>
                <form method="POST" action="index.php?action=createReponse&id_thread=<?= $discussion['id_thread']; ?>">
                    <div class="mb-3">
                        <input class="form-control" type="text" name="contenu" placeholder="Entrez votre réponse" required>
                        <input type="hidden" name="user" value="Utilisateur" />
                    </div>
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>

                    </article>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- /Blog Posts 2 Section -->
<div class="pagination-container text-center mt-4">
    <nav aria-label="Page navigation">
        <ul class="pagination justify-content-center">
            <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                <li class="page-item <?= ($i == $page) ? 'active' : ''; ?>">
                    <a class="page-link" href="index.php?page=<?= $i; ?>"><?= $i; ?></a>
                </li>
            <?php endfor; ?>
        </ul>
    </nav>
</div>


<center>
<div class="container text-center my-4">
    <a href="index.php?action=create" class="btn btn-primary btn-lg">Ajouter une discussion</a>
                </div>
                

</center>

        

       
        

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
                        <a class="btn btn-link" href="C:\Users\sadekk\Desktop\Projet Web\view\Front-office\les taches\imen\blog.html">Blog</a>
                        <a class="btn btn-link" href="C:\Users\sadekk\Desktop\Projet Web\view\Front-office\les taches\akrem\Cours.html">    Cours</a>
                        <a class="btn btn-link" href="C:\Users\sadekk\Desktop\Projet Web\view\Front-office\les taches\firas\ecahnge.html">Questions</a>
                        <a class="btn btn-link" href="C:\Users\sadekk\Desktop\Projet Web\view\Front-office\les taches\nader\event.html">Evénement</a>
                        <a class="btn btn-link" href="C:\Users\sadekk\Desktop\Projet Web\view\Front-office\les taches\maram\contact.html" class="nav-item nav-link">Complaint</a>
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
                                <a href="C:\Users\sadekk\Desktop\Projet Web\view\Front-office\index.html">Accueille</a>
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





    
