//zayed doesnt work

    document.addEventListener("DOMContentLoaded", function () {
        function validateForm(event) {
            const nom = document.getElementById("nom");
            const identifiant = document.getElementById("identifiant");
            const email = document.getElementById("email");
            const telephone = document.getElementById("telephone");
            const description = document.getElementById("description");
            const errorContainer = document.getElementById("error-container");

            // Expressions régulières
            const nameRegex = /^[A-Za-zÀ-ÿ]+ [A-Za-zÀ-ÿ]+$/;
            const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
            const phoneRegex = /^[0-9]{8}$/;

            // Efface les erreurs existantes
            errorContainer.innerHTML = "";

            let errors = [];

            // Règles de validation
            if (!nameRegex.test(nom.value)) {
                errors.push("Le nom complet doit être composé de deux parties (lettres uniquement) séparées par un espace.");
            }
            if (!emailRegex.test(email.value)) {
                errors.push("Veuillez entrer une adresse email valide (ex: nom@example.com).");
            }
            if (!phoneRegex.test(telephone.value)) {
                errors.push("Le numéro de téléphone doit contenir exactement 8 chiffres.");
            }
            if (!nom.value || !identifiant.value || !email.value || !telephone.value || !description.value) {
                errors.push("Tous les champs sont requis. Veuillez les remplir.");
            }

            // Affiche les erreurs
            if (errors.length > 0) {
                event.preventDefault();
                errors.forEach((error) => {
                    const errorMessage = document.createElement("div");
                    errorMessage.classList.add("error-message");
                    errorMessage.textContent = error;
                    errorContainer.appendChild(errorMessage);
                });
                console.log("Erreurs de validation : ", errors); // Ajout pour le débogage
                return false;
            }

            return true;
        }

        const form = document.querySelector("form");
        form.addEventListener("submit", validateForm);
    });
