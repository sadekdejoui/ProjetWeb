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
                        <a href="..\Front-office\index2.php" class="nav-item nav-link">Home</a>
                        <a href="..\Front-office\blog.php" class="nav-item nav-link ">Blog</a>
                        <a href="..\Front-office\Cours.html" class="nav-item nav-link">Courses</a>
                        <a href="..\Front-office\ecahnge.html" class="nav-item nav-link active">Questions</a>
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

            <!-- ending of header -->   
            <div class="container-xxl py-5 bg-primary hero-header">
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5 py-5">
                        <div class="col-12 text-center">
                            <h1 class="text-white animated slideInDown">Mettre a jour la reponse</h1>
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

        <div class="container mt-5">
    <h1 class="mb-4">Modifier la réponse</h1>
    <form id="editR" method="POST">
        <div class="form-group">
            <label for="contenu">Contenu de la réponse</label>
            <textarea class="form-control" id="contenu" name="contenu" rows="5" required><?= htmlspecialchars($reponse['contenu']); ?></textarea>
            <p class="error-message" id="contenuError"></p>
        </div>
        <button type="submit" class="btn btn-primary">Mettre à jour</button>
        <a href="index.php?action=index&id=<?= $id_thread; ?>" class="btn btn-secondary">Annuler</a>
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

<style>
    .error-message {
        color: red;
        font-size: 0.9em;
        margin-top: 5px;
    }
</style>

<script>
document.getElementById('editR').addEventListener('submit', function(event) {
    
    const contenu = document.getElementById('contenu').value.trim();

    
    const contenuError = document.getElementById('contenuError');
    contenuError.textContent = '';

    let isValid = true;

    
    if (contenu.length < 20) {
        contenuError.textContent = "Le contenu doit contenir au moins 20 caractères.";
        isValid = false;
    }

    
    if (!isValid) {
        event.preventDefault();
    }
});
</script>


