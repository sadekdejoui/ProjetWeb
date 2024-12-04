document.addEventListener("DOMContentLoaded", () => {
    // Charger les informations du cours
    const courseInfo = {
        title: "Développement Web",
        category: "Informatique",
        duration: "20 heures",
        price: "99€"
    };

    // Injecter dynamiquement les informations du cours
    document.querySelector(".course-info").innerHTML = `
        <p><strong>Titre du Cours :</strong> ${courseInfo.title}</p>
        <p><strong>Catégorie :</strong> ${courseInfo.category}</p>
        <p><strong>Durée :</strong> ${courseInfo.duration}</p>
        <p><strong>Prix :</strong> ${courseInfo.price}</p>
    `;

    // Validation du formulaire de paiement
    const form = document.querySelector("form");
    form.addEventListener("submit", (event) => {
        event.preventDefault();

        // Récupérer les valeurs des champs
        const nom = document.getElementById("nom").value.trim();
        const email = document.getElementById("email").value.trim();
        const date = document.getElementById("date").value;
        const paymentMethod = document.querySelector('input[name="payment_method"]:checked');

        // Vérifications simples
        if (!nom || !email || !date || !paymentMethod) {
            alert("Veuillez remplir tous les champs !");
            return;
        }

        if (!validateEmail(email)) {
            alert("Veuillez entrer une adresse e-mail valide !");
            return;
        }

        // Confirmation avant soumission
        const confirmation = confirm(
            `Confirmez-vous votre paiement pour le cours "${courseInfo.title}" ?\n\n` +
            `Nom : ${nom}\n` +
            `E-mail : ${email}\n` +
            `Date d'achat : ${date}\n` +
            `Mode de Paiement : ${paymentMethod.nextElementSibling.textContent}\n` +
            `Montant : ${courseInfo.price}`
        );

        if (confirmation) {
            // Simuler l'envoi au serveur
            console.log("Paiement effectué avec succès !", {
                nom,
                email,
                date,
                paymentMethod: paymentMethod.value,
                course: courseInfo
            });

            alert("Votre paiement a été effectué avec succès !");
            form.reset();
        }
    });

    // Fonction pour valider une adresse e-mail
    function validateEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }
});
