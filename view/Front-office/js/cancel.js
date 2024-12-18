console.log("Script is loaded and running");

document.addEventListener("DOMContentLoaded", function () {
    // Ensure the script runs after the DOM has fully loaded
    const cancelForm = document.getElementById("cancel");
    if (cancelForm) {
        cancelForm.addEventListener("submit", function (event) {
            // Get the error message container
            let errorMessages = document.getElementById("errorMessages");

            // Create the container if it doesn't exist
            if (!errorMessages) {
                errorMessages = document.createElement("div");
                errorMessages.id = "errorMessages";
                errorMessages.style.color = "red";
                errorMessages.style.marginBottom = "10px";
                cancelForm.parentNode.insertBefore(errorMessages, cancelForm);
            }

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

            // If all checks pass, the form submission proceeds
            console.log("Form validation passed. Submitting form.");
        });
    } else {
        console.error("Form with ID 'cancel' not found.");
    }
});
