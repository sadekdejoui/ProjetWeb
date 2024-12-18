// Fonction de prévisualisation de l'image
function previewImage(event) {
    var image = document.getElementById('imagePreview');
    image.src = URL.createObjectURL(event.target.files[0]);
    image.style.display = 'block';
}

// Fonction de validation du nom et du prénom
function validateName(field) {
    var name = field.value.trim();
    if (name.length < 3) {
        return 'Le nom ou prénom doit comporter au moins 3 caractères.';
    }
    return '';
}

// Fonction de validation de l'email
function validateEmail(field) {
    var email = field.value.trim();
    var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    if (email === '' || !emailPattern.test(email)) {
        return 'Veuillez entrer une adresse e-mail valide.';
    }
    return '';
}

// Fonction de validation du contenu
function validateContent(field) {
    var content = field.value.trim();
    if (content === '') {
        return 'Le contenu de l\'article est obligatoire.';
    }
    return '';
}

// Fonction de validation de l'image
function validateImage(field) {
    var image = field.value;
    if (image) {
        var file = field.files[0];
        var fileType = file.type;
        var validImageTypes = ['image/jpeg', 'image/png', 'image/gif'];

        if (!validImageTypes.includes(fileType)) {
            return 'Veuillez télécharger une image au format JPG, PNG ou GIF.';
        }

        if (file.size > 5 * 1024 * 1024) { // Limite de taille de 5MB
            return 'L\'image ne doit pas dépasser 5 Mo.';
        }
    }
    return '';
}

// Fonction de validation du formulaire au moment de la soumission
function validateForm(event) {
    var errors = [];

    // Validation du titre
    var title = document.getElementById('title');
    if (title.value.trim() === '') {
        alert('Le titre de l\'article est obligatoire.');
        errors.push('Le titre est vide.');
    }

    // Validation de l'auteur (nom ou prénom)
    var author = document.getElementById('author');
    var authorError = validateName(author);
    if (authorError) {
        alert(authorError);
        errors.push('Le nom ou prénom est invalide.');
    }

    // Validation de l'email
    var email = document.getElementById('email');
    var emailError = validateEmail(email);
    if (emailError) {
        alert(emailError);
        errors.push('L\'email est invalide.');
    }

    // Validation du contenu
    var content = document.getElementById('content');
    var contentError = validateContent(content);
    if (contentError) {
        alert(contentError);
        errors.push('Le contenu est vide.');
    }

    // Validation de l'image (optionnelle)
    var image = document.getElementById('image');
    var imageError = validateImage(image);
    if (imageError) {
        alert(imageError);
        errors.push('L\'image est invalide.');
    }

    // Si des erreurs existent, empêche la soumission
    if (errors.length > 0) {
        event.preventDefault();  // Empêche la soumission du formulaire
        return false;
    }

    return true;
}

// Ajouter des écouteurs d'événements pour la validation des champs
document.addEventListener('DOMContentLoaded', function() {
    var form = document.querySelector('form');

    // Validation à la soumission du formulaire (quand on clique sur "Publier")
    form.addEventListener('submit', function(event) {
        // Appel de la fonction de validation
        var formIsValid = validateForm(event);

        // Si la validation échoue, arrête la soumission
        if (!formIsValid) {
            event.preventDefault();
        }
    });
});