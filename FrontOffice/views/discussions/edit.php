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
                            <h1 class="text-white animated slideInDown">Modifier</h1>
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

        <div class="container my-5">
    <div class="card shadow-sm border-light">
        <div class="card-header bg-primary text-white">
            <h2 class="mb-0">Modifier la discussion</h2>
        </div>
        <div class="card-body">
            <form id="editDiscussionForm" method="POST" novalidate>
                <div class="mb-3">
                    <label for="titre" class="form-label">Titre de la discussion</label>
                    <input type="text" id="titre" name="titre" class="form-control" value="<?= htmlspecialchars($discussion['titre']); ?>" required>
                    <p class="error-message" id="titreError"></p>
                </div>
                <div class="mb-3">
                    <label for="contenu" class="form-label">Contenu</label>
                    <textarea id="contenu" name="contenu" class="form-control" rows="6" required><?= htmlspecialchars($discussion['contenu']); ?></textarea>
                    <p class="error-message" id="contenuError"></p>
                </div>
                <div class="mb-3">
                    <label for="id_categorie" class="form-label">Catégorie</label>
                    <select id="id_categorie" name="id_categorie" class="form-select" required>
                        <option value="<?= $discussion['id_categorie']; ?>" selected>
                            <?= htmlspecialchars($discussion['categorie_nom']); ?>
                        </option>
                        <!-- Charger les autres catégories dynamiquement -->
                    </select>
                    <p class="error-message" id="categorieError"></p>
                </div>
                <button type="submit" class="btn btn-primary">Mettre à jour</button>
                <a href="index.php?action=index" class="btn btn-secondary">Annuler</a>
            </form>
        </div>
    </div>
</div>

<style>
    .error-message {
        color: red;
        font-size: 0.9em;
        margin-top: 5px;
    }
</style>

<script>
document.getElementById('editDiscussionForm').addEventListener('submit', function(event) {
    // Récupérer les champs
    const titre = document.getElementById('titre').value.trim();
    const contenu = document.getElementById('contenu').value.trim();
    const categorie = document.getElementById('id_categorie').value;

    // Réinitialiser les messages d'erreur
    document.getElementById('titreError').textContent = '';
    document.getElementById('contenuError').textContent = '';
    document.getElementById('categorieError').textContent = '';

    let isValid = true;

    // Vérifications
    if (titre.length < 5) {
        document.getElementById('titreError').textContent = "Le titre doit contenir au moins 5 caractères.";
        isValid = false;
    }

    if (contenu.length < 20) {
        document.getElementById('contenuError').textContent = "Le contenu doit contenir au moins 20 caractères.";
        isValid = false;
    }

    if (!categorie) {
        document.getElementById('categorieError').textContent = "Veuillez sélectionner une catégorie.";
        isValid = false;
    }

    // Empêcher l'envoi si le formulaire est invalide
    if (!isValid) {
        event.preventDefault();
    }
});
</script>


