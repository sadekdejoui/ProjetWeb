function verif() {
    // Input fields
    const prenom = document.getElementById("loglastname");
    const nom = document.getElementById("logname");
    const dateNaissance = document.getElementById("logdate");
    const tel = document.getElementById("logtel");
    const email = document.getElementById("logemail");
    const motDePasse = document.getElementById("logpass");
    const confirmMotDePasse = document.getElementById("logpass2");

    // Radio buttons
    const isProfesseur = document.getElementById("btn-check-outlined").checked;
    const isEtudiant = document.getElementById("btn-check-2-outlined").checked;

    // Validation regex
    const nameRegex = /^[a-zA-Z]{1,20}$/; // Only alphabetical, max length 20
    const telRegex = /^\d{8}$/; // Exactly 8 digits
    const emailRegex = /^[a-zA-Z0-9._%+-]+@gmail\.com$/; // Ends with @gmail.com
    const passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;

    // Validation messages
    let errors = [];

    // Check prenom (firstname)
    if (!prenom.value.match(nameRegex)) {
        errors.push("Le prénom doit être alphabétique, non vide et avoir une longueur maximale de 20 caractères.");
        alert(errors.join("\n"));
        return; // Stop further validation
    }

    // Check nom (lastname)
    if (!nom.value.match(nameRegex)) {
        errors.push("Le nom doit être alphabétique, non vide et avoir une longueur maximale de 20 caractères.");
        alert(errors.join("\n"));
        return; // Stop further validation
    }

    // Check dateNaissance (date of birth)
    if (!dateNaissance.value) {
        errors.push("La date de naissance est obligatoire.");
        alert(errors.join("\n"));
        return; // Stop further validation
    }

    // Check tel (telephone)
    if (!tel.value.match(telRegex)) {
        errors.push("Le numéro de téléphone doit contenir exactement 8 chiffres.");
        alert(errors.join("\n"));
        return; // Stop further validation
    }

    // Check email
    if (!email.value.match(emailRegex)) {
        errors.push("L'email doit se terminer par '@gmail.com'.");
        alert(errors.join("\n"));
        return; // Stop further validation
    }

    // Check motDePasse (password)
    if (!motDePasse.value.match(passwordRegex)) {
        errors.push(
            "Le mot de passe doit contenir au moins 8 caractères, une lettre majuscule, une lettre minuscule, un chiffre et un symbole."
        );
        alert(errors.join("\n"));
        return; // Stop further validation
    }

    // Check motDePasse confirmation
    if (motDePasse.value !== confirmMotDePasse.value) {
        errors.push("La confirmation du mot de passe doit être identique au mot de passe.");
        alert(errors.join("\n"));
        return; // Stop further validation
    }

    // Check if either professeur or etudiant is selected
    if (!isProfesseur && !isEtudiant) {
        errors.push("Vous devez sélectionner si vous êtes professeur ou étudiant.");
        alert(errors.join("\n"));
        return; // Stop further validation
    }

    // If there are no errors, show a success message
    alert("Inscription réussie!");
}
