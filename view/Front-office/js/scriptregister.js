console.log("Script is loaded and running");

document.getElementById("registerform").addEventListener("submit", function(event) {
    // Get the error message container
    const errorMessages = document.getElementById("errorMessages");
    errorMessages.innerHTML = ""; // Clear previous messages

    // Get form values
    const userId = document.getElementById("id_user").value.trim();
    const password = document.getElementById("password").value.trim();

    // Validation checks
    if (!userId) {
        errorMessages.innerHTML = "L'identifiant utilisateur ne peut pas être vide.";
        event.preventDefault();
        return;
    }
    if (isNaN(userId)) {
        errorMessages.innerHTML = "L'identifiant utilisateur doit contenir uniquement des chiffres.";
        event.preventDefault();
        return;
    }

    if (!password) {
        errorMessages.innerHTML = "Le mot de passe ne peut pas être vide.";
        event.preventDefault();
        return;
    }

    // Continue with form submission if everything is valid
});
