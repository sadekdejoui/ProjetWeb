// Attacher un écouteur d'événements au formulaire
document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");

    // Gestion de la soumission du formulaire
    form.addEventListener("submit", function (event) {
        event.preventDefault(); // Empêche le comportement par défaut

        // Récupération des valeurs des champs
        const title = document.getElementById("title").value.trim();
        const description = document.getElementById("description").value.trim();
        const price = document.getElementById("price").value.trim();
        const category = document.getElementById("category").value;
        const duration = document.getElementById("duration").value.trim();

        // Vérifier que tous les champs obligatoires sont remplis
        if (!title || !description || price <= 0 || duration <= 0) {
            alert("Veuillez remplir correctement tous les champs !");
            return;
        }

        // Afficher une boîte de confirmation
        const confirmation = confirm(
            `Confirmez-vous l'ajout du cours suivant ?\n\n` +
            `Titre: ${title}\nDescription: ${description}\nPrix: ${price} €\n` +
            `Catégorie: ${category}\nDurée: ${duration} heures`
        );

        if (confirmation) {
            // Simuler un envoi ou manipuler les données
            const courseData = {
                title,
                description,
                price: parseFloat(price),
                category,
                duration: parseInt(duration, 10),
            };

            // Afficher les données en console pour test
            console.log("Données du cours soumis :", courseData);

            // Réinitialiser le formulaire après soumission
            form.reset();

            // Message de succès
            alert("Le cours a été ajouté avec succès !");
        }
    });
});
