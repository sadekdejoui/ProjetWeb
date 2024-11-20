function showStyledAlert(message) {
    const container = document.getElementById('notification-container');

    // Create the alert element
    const alertBox = document.createElement('div');
    alertBox.style.padding = '15px 20px';
    alertBox.style.marginBottom = '10px';
    alertBox.style.borderRadius = '8px';
    alertBox.style.backgroundColor = '#ffd891';
    alertBox.style.color = '#102770';
    alertBox.style.boxShadow = '0 4px 8px rgba(0, 0, 0, 0.2)';
    alertBox.style.fontWeight = '600';
    alertBox.style.fontSize = '14px';
    alertBox.style.transition = 'opacity 0.5s ease';
    alertBox.textContent = message;

    // Add the alert to the container
    container.appendChild(alertBox);

    // Auto-dismiss the alert after 3 seconds
    setTimeout(() => {
        alertBox.style.opacity = '0';
        setTimeout(() => container.removeChild(alertBox), 500); // Wait for the fade-out transition
    }, 3000);
}

function verif() {
    // Input fields
    const prenom = document.getElementById("loglastname");
    const nom = document.getElementById("logname");
    const dateNaissance = document.getElementById("logdate");
    const tel = document.getElementById("logtel");
    const email = document.getElementById("logemail");
    const motDePasse = document.getElementById("logpass");
    const confirmMotDePasse = document.getElementById("logpass2");

    // Regex
    const nameRegex = /^[a-zA-Z]{1,20}$/;
    const telRegex = /^\d{8}$/;
    const emailRegex = /^[a-zA-Z0-9._%+-]+@gmail\.com$/;
    const passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;

    // Validation
    if (!prenom.value.match(nameRegex)) {
        showStyledAlert("Le prénom doit être alphabétique, non vide et avoir une longueur maximale de 20 caractères.");
        return;
    }

    if (!nom.value.match(nameRegex)) {
        showStyledAlert("Le nom doit être alphabétique, non vide et avoir une longueur maximale de 20 caractères.");
        return;
    }

    if (!dateNaissance.value) {
        showStyledAlert("La date de naissance est obligatoire.");
        return;
    }

    if (!tel.value.match(telRegex)) {
        showStyledAlert("Le numéro de téléphone doit contenir exactement 8 chiffres.");
        return;
    }

    if (!email.value.match(emailRegex)) {
        showStyledAlert("L'email doit se terminer par '@gmail.com'.");
        return;
    }

    if (!motDePasse.value.match(passwordRegex)) {
        showStyledAlert(
            "Le mot de passe doit contenir au moins 8 caractères, une lettre majuscule, une lettre minuscule, un chiffre et un symbole."
        );
        return;
    }

    if (motDePasse.value !== confirmMotDePasse.value) {
        showStyledAlert("La confirmation du mot de passe doit être identique au mot de passe.");
        return;
    }

    showStyledAlert("Validation réussie !");
}



function showStyledAlert2(message) {
    const container = document.getElementById('notification-container');

    // Create the alert element
    const alertBox = document.createElement('div');
    alertBox.style.padding = '15px 20px';
    alertBox.style.marginBottom = '10px';
    alertBox.style.borderRadius = '8px';
    alertBox.style.backgroundColor = '#ac81f2';
    alertBox.style.color = '#F6F4F9';
    alertBox.style.boxShadow = '0 4px 8px rgba(0, 0, 0, 0.2)';
    alertBox.style.fontWeight = '600';
    alertBox.style.fontSize = '14px';
    alertBox.style.transition = 'opacity 0.5s ease';
    alertBox.textContent = message;

    // Add the alert to the container
    container.appendChild(alertBox);

    // Auto-dismiss the alert after 3 seconds
    setTimeout(() => {
        alertBox.style.opacity = '0';
        setTimeout(() => container.removeChild(alertBox), 500); // Wait for the fade-out transition
    }, 3000);
}

function verif2() {
    // Input fields
    const nom = document.getElementById("loglastname");
    const prenom = document.getElementById("logname");
    const dateNaissance = document.getElementById("logdate");
    const tel = document.getElementById("logtel");
    const email = document.getElementById("logemail");
    const motDePasse = document.getElementById("logpass");
    
    // Validation regex
    const nameRegex = /^[a-zA-Z]{1,20}$/; // Only alphabetical, max length 20
    const telRegex = /^\d{8}$/; // Exactly 8 digits
    const emailRegex = /^[a-zA-Z0-9._%+-]+@gmail\.com$/; // Ends with @gmail.com
    const passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;

    // Arrays to store messages
    let errors = [];
    let updates = [];

    // Validate fields
    if (prenom.value.trim()) {
        if (!prenom.value.match(nameRegex)) {
            errors.push("Le prénom doit être alphabétique, non vide et avoir une longueur maximale de 20 caractères.");
        } else {
            updates.push("Prénom");
        }
    }

    if (nom.value.trim()) {
        if (!nom.value.match(nameRegex)) {
            errors.push("Le nom doit être alphabétique, non vide et avoir une longueur maximale de 20 caractères.");
        } else {
            updates.push("Nom");
        }
    }

    if (tel.value.trim()) {
        if (!tel.value.match(telRegex)) {
            errors.push("Le numéro de téléphone doit contenir exactement 8 chiffres.");
        } else {
            updates.push("Numéro de téléphone");
        }
    }

    if (email.value.trim()) {
        if (!email.value.match(emailRegex)) {
            errors.push("L'email doit se terminer par '@gmail.com'.");
        } else {
            updates.push("Email");
        }
    }

    if (motDePasse.value.trim()) {
        if (!motDePasse.value.match(passwordRegex)) {
            errors.push(
                "Le mot de passe doit contenir au moins 8 caractères, une lettre majuscule, une lettre minuscule, un chiffre et un symbole."
            );
        } else {
            updates.push("Mot de passe");
        }
    }

    if (dateNaissance.value.trim()) {
        updates.push("Date de naissance");
    }

    // Display errors or success messages
    if (errors.length > 0) {
        showStyledAlert2("Erreur(s):\n" + errors.join("\n"));
    } else if (updates.length > 0) {
        showStyledAlert2("Les champs suivants ont été mis à jour avec succès:\n" + updates.join(", "));
        // Here you can add code to process the updates or redirect
    } else {
        showStyledAlert2("Aucun champ n'a été modifié.");
    }
}


function verif() {
    // Input fields
    
    const email = document.getElementById("logemail1");
    const motDePasse = document.getElementById("logpass1");

    // Regex
    const emailRegex = /^[a-zA-Z0-9._%+-]+@gmail\.com$/;
    const passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;

    // Validation

    if (!email.value.match(emailRegex)) {
        showStyledAlert("L'email doit se terminer par '@gmail.com'.");
        return;
    }

    if (!motDePasse.value.match(passwordRegex)) {
        showStyledAlert(
            "Le mot de passe doit contenir au moins 8 caractères, une lettre majuscule, une lettre minuscule, un chiffre et un symbole."
        );
        return;
    }

    showStyledAlert("Validation réussie !");
}

function onlyOne(checkbox) {
    const checkboxes = document.getElementsByName('logtype');
    checkboxes.forEach((item) => {
        if (item !== checkbox) item.checked = false;
    });
}