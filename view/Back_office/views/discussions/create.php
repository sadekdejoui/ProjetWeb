<?php require_once 'views/layout.php'; ?>

<div class="content">
    <h1>Forums</h1>

    <!-- Ajouter un nouvel article -->
    <div class="card" id="addArticle">
        <h2>Ajouter un nouvel article</h2>
        <form id="articleForm" action="index3.php?action=create" method="POST" novalidate>
            <label for="titre">Titre de la Discussion</label>
            <input class="form-control" type="text" name="titre" id="titre" required>
            <p class="error-message" id="titreError"></p>

            <label for="contenu">Contenu de la Discussion</label>
            <textarea class="form-control" name="contenu" id="contenu" rows="6" required></textarea>
            <p class="error-message" id="contenuError"></p>

            <label for="id_categorie">Catégorie</label>
            <select class="form-control" name="id_categorie" id="id_categorie" required>
                <option value="">-- Sélectionnez une catégorie --</option>
                <option value="1">Actualités</option>
                <option value="2">Tutoriels</option>
                <option value="3">Réflexions pédagogiques</option>
            </select>
            <p class="error-message" id="categorieError"></p>

            <label for="user">Nom de l'utilisateur</label>
            <input type="text" name="user" id="user" required>
            <p class="error-message" id="userError"></p>

            <button class="button" type="submit">Publier</button>
        </form>
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
    document.getElementById('articleForm').addEventListener('submit', function(event) {
        // Récupérer les champs
        const titre = document.getElementById('titre').value.trim();
        const contenu = document.getElementById('contenu').value.trim();
        const user = document.getElementById('user').value.trim();
        const categorie = document.getElementById('id_categorie').value;

        // Réinitialiser les messages d'erreur
        document.getElementById('titreError').textContent = '';
        document.getElementById('contenuError').textContent = '';
        document.getElementById('categorieError').textContent = '';
        document.getElementById('userError').textContent = '';

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

        if (user.length < 3) {
            document.getElementById('userError').textContent = "Le nom d'utilisateur doit contenir au moins 3 caractères.";
            isValid = false;
        }

        // Empêcher l'envoi si le formulaire est invalide
        if (!isValid) {
            event.preventDefault();
        }
    });
</script>



