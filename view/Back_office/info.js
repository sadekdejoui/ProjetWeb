document.addEventListener("DOMContentLoaded", () => {
    // Informations dynamiques sur le cours
    const courseInfo = {
        title: "Introduction au Anglais",
        category: "Anglais",
        price: "99 €",
        duration: "20 heures",
        description: `Ce cours propose une introduction complète à l'anglais, couvrant la grammaire de base, le vocabulaire essentiel et des techniques modernes pour améliorer vos compétences linguistiques. À la fin, vous serez capable de tenir une conversation simple en anglais.`,
        instructor: {
            name: "John Doe",
            bio: "Enseignant expérimenté en anglais, avec plus de 15 ans d'expérience dans l'enseignement et la formation linguistique.",
            photo: "" // Ajoutez l'URL de la photo ici si nécessaire
        }
    };

    // Injecter dynamiquement les informations dans la page
    document.querySelector(".course-title").textContent = courseInfo.title;
    document.querySelector(".course-details").innerHTML = `
        <p><strong>Catégorie :</strong> ${courseInfo.category}</p>
        <p><strong>Prix :</strong> ${courseInfo.price}</p>
        <p><strong>Durée :</strong> ${courseInfo.duration}</p>
    `;
    document.querySelector(".course-description").innerHTML = `
        <p>${courseInfo.description}</p>
    `;

    const instructorInfo = document.querySelector(".instructor-info");
    if (courseInfo.instructor.photo) {
        instructorInfo.querySelector(".instructor-photo").style.backgroundImage = `url(${courseInfo.instructor.photo})`;
        instructorInfo.querySelector(".instructor-photo").style.backgroundSize = "cover";
    }
    instructorInfo.querySelector(".instructor-name").textContent = courseInfo.instructor.name;
    instructorInfo.querySelector("p").textContent = courseInfo.instructor.bio;

    // Gestion du clic sur le bouton "S'inscrire Maintenant"
    const enrollButton = document.querySelector(".enroll-button");
    enrollButton.addEventListener("click", () => {
        // Simuler une action, comme une redirection ou une confirmation
        alert(`Vous êtes inscrit au cours : "${courseInfo.title}" !`);
        console.log("Inscription réussie :", courseInfo);
    });
});
