function showStyledAlert2(message) {
    const container = document.getElementById('notification-container');

    // Create the alert element
    const alertBox = document.createElement('div');
    alertBox.style.padding = '15px 20px';
    alertBox.style.marginBottom = '10px';
    alertBox.style.borderRadius = '8px';
    alertBox.style.backgroundColor = '#ac81f2';
    alertBox.style.color = 'white'; // Improved visibility
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
    const daten= document.getElementById("logdaten");
    const datee = document.getElementById("logdatee");
    const datei = document.getElementById("logdatei");
    const datem = document.getElementById("logdatem");

    // Regex
    const nameRegex = /^[a-zA-Z]{1,20}$/;
    const telRegex = /^\d{8}$/;
    const emailRegex = /^[a-zA-Z0-9._%+-]+@gmail\.com$/;
    const passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;

    // Validation
    if (!nom.value.match(nameRegex)) {
        showStyledAlert2("Le nom doit être alphabétique, non vide et avoir une longueur maximale de 20 caractères.");
        return;
    }

    if (!prenom.value.match(nameRegex)) {
        showStyledAlert2("Le prénom doit être alphabétique, non vide et avoir une longueur maximale de 20 caractères.");
        return;
    }

    if (!tel.value.match(telRegex)) {
        showStyledAlert2("Le numéro de téléphone doit contenir exactement 8 chiffres.");
        return;
    }

    if (!email.value.match(emailRegex)) {
        showStyledAlert2("L'email doit se terminer par '@gmail.com'.");
        return;
    }

    if (!motDePasse.value.match(passwordRegex)) {
        showStyledAlert2(
            "Le mot de passe doit contenir au moins 8 caractères, une lettre majuscule, une lettre minuscule, un chiffre et un symbole."
        );
        return;
    }

    if (!daten.value) {
        showStyledAlert2("La date de naissance est obligatoire.");
        return;
    }

    if (!datee.value) {
        showStyledAlert2("La date d'entretien est obligatoire.");
        return;
    }

    if (!datei.value) {
        showStyledAlert2("La date d'inscription est obligatoire.");
        return;
    }
    showStyledAlert2("Validation réussie !");
}











function verif2() {
    // Input fields
    const prenom = document.getElementById("loglastname");
    const nom = document.getElementById("logname");
    const tel = document.getElementById("logtel");
    const email = document.getElementById("logemail");
    const motDePasse = document.getElementById("logpass");
    const daten= document.getElementById("logdaten");
    const datee = document.getElementById("logdatee");
    const datei = document.getElementById("logdatei");
    const datem = document.getElementById("logdatem");
    // Validation regex
    const nameRegex = /^[a-zA-Z]{1,20}$/; // Only alphabetical, max length 20
    const telRegex = /^\d{8}$/; // Exactly 8 digits
    const emailRegex = /^[a-zA-Z0-9._%+-]+@gmail\.com$/; // Ends with @gmail.com
    const passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;

    // Arrays to store messages
    let updates = [];
    let errors = [];

    // Validate fields
    if (prenom.value.trim()) {
        if (!prenom.value.match(nameRegex)) {
            showStyledAlert2("Le prénom doit être alphabétique, non vide et avoir une longueur maximale de 20 caractères.");
        } else {
            updates.push("Prénom");
        }
    }

    if (nom.value.trim()) {
        if (!nom.value.match(nameRegex)) {
            showStyledAlert2("Le nom doit être alphabétique, non vide et avoir une longueur maximale de 20 caractères.");
        } else {
            updates.push("Nom");
        }
    }

    if (tel.value.trim()) {
        if (!tel.value.match(telRegex)) {
            showStyledAlert2("Le numéro de téléphone doit contenir exactement 8 chiffres.");
        } else {
            updates.push("Numéro de téléphone");
        }
    }

    if (email.value.trim()) {
        if (!email.value.match(emailRegex)) {
            showStyledAlert2("L'email doit se terminer par '@gmail.com'.");
        } else {
            updates.push("Email");
        }
    }

    if (motDePasse.value.trim()) {
        if (!motDePasse.value.match(passwordRegex)) {
            showStyledAlert2(
                "Le mot de passe doit contenir au moins 8 caractères, une lettre majuscule, une lettre minuscule, un chiffre et un symbole."
            );
        } else {
            updates.push("Mot de passe");
        }
    }

    if (daten.value.trim()) {
        updates.push("Date de naissance");
    }

    if (datee.value.trim()) {
        updates.push("Date d'entretien");
    }

    if (datei.value.trim()) {
        updates.push("Date d'inscription");
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


