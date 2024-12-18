console.log("Script is loaded and running");

document.getElementById("inviteForm").addEventListener("submit", function(event) {
    // Get the error message container (you need to add it to your HTML)
    const errorMessages = document.getElementById("errorMessages");
    errorMessages.innerHTML = ""; // Clear previous messages

    // Get form values
    const idevent = document.getElementById("idevent").value.trim();
    const iduser = document.getElementById("iduser").value.trim();

    // Validation checks
    if (!idevent) {
        errorMessages.innerHTML = "Veuillez saisir l'identifiant de l'événement.";
        event.preventDefault();
        return;
    }
    if (isNaN(idevent)) {
        errorMessages.innerHTML = "L'identifiant de l'événement doit être un nombre.";
        event.preventDefault();
        return;
    }

    if (!iduser) {
        errorMessages.innerHTML = "Veuillez saisir l'identifiant de l'utilisateur.";
        event.preventDefault();
        return;
    }
    if (isNaN(iduser)) {
        errorMessages.innerHTML = "L'identifiant de l'utilisateur doit être un nombre.";
        event.preventDefault();
        return;
    }

    // Continue with form submission if everything is valid
});
