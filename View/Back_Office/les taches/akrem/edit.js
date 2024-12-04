document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");

    // Récupération des champs
    const titleField = document.getElementById("title");
    const descriptionField = document.getElementById("description");
    const priceField = document.getElementById("price");
    const categoryField = document.getElementById("category");
    const durationField = document.getElementById("duration");

    // Gestion de la soumission du formulaire
    form.addEventListener("submit", function (event) {
        event.preventDefault(); // Empêche l'envoi automatique du formulaire

        // Récupérer les valeurs des champs
        const updatedTitle = titleField.value.trim();
        const updatedDescription = descriptionField.value.trim();
        const updatedPrice = parseFloat(priceField.value.trim());
        const updatedCategory = categoryField.value;
        const updatedDuration = parseInt(durationField.value.trim(), 10);

        // Validation des champs
        if (!updatedTitle || !updatedDescription || updatedPrice <= 0 || updatedDuration <= 0) {
            alert("Veuillez remplir correctement tous les champs !");
            return;
        }

        // Affichage d'une confirmation
        const confirmation = confirm(
            `Confirmez-vous les modifications suivantes ?\n\n` +
            `Titre : ${updatedTitle}\n` +
            `Description : ${updatedDescription}\n` +
            `Prix : ${updatedPrice} €\n` +
            `Catégorie : ${updatedCategory}\n` +
            `Durée : ${updatedDuration} heures`
        );

        if (confirmation) {
            // Simulation de l'envoi des données mises à jour
            const updatedCourse = {
                title: updatedTitle,
                description: updatedDescription,
                price: updatedPrice,
                category: updatedCategory,
                duration: updatedDuration,
            };

            console.log("Cours mis à jour :", updatedCourse);

            // Message de succès
            alert("Les modifications ont été enregistrées avec succès !");

            // Réinitialiser les champs (optionnel)
            form.reset();
        }
    });
});
