console.log("Script is loaded and running");

  document.getElementById("eventForm").addEventListener("submit", function(event) {
    // Get the error message container
    const errorMessages = document.getElementById("errorMessages");
    errorMessages.innerHTML = ""; // Clear previous messages

    // Get form values
    const titre = document.getElementById("titre").value.trim();
    const description = document.getElementById("description").value.trim();
    const date = document.getElementById("date").value;
    const heure = document.getElementById("heure").value;
    const place = document.getElementById("place").value.trim();
    const capacite = document.getElementById("capacite").value;

    // Validation checks
    if (!titre) {
        errorMessages.innerHTML = "Veuillez saisir le titre de l'événement.";
        event.preventDefault();
        return;
    }
    if (!description) {
        errorMessages.innerHTML = "Veuillez saisir la description de l'événement.";
        event.preventDefault();
        return;
    }
    if (!date) {
        errorMessages.innerHTML = "Veuillez sélectionner une date.";
        event.preventDefault();
        return;
    }

    // Get current date and compare with selected date
    const currentDate = new Date();
    const selectedDate = new Date(date);

    if (selectedDate < currentDate) {
        errorMessages.innerHTML = "La date ne peut pas être antérieure à aujourd'hui.";
        event.preventDefault();
        return;
    }

    if (!heure) {
        errorMessages.innerHTML = "Veuillez sélectionner l'heure.";
        event.preventDefault();
        return;
    }
    if (!place) {
        errorMessages.innerHTML = "Veuillez saisir l'emplacement de l'événement.";
        event.preventDefault();
        return;
    }

    // Validate capacite (capacity should be between 100 and 1000)
    if (!capacite || capacite < 100 || capacite > 1000) {
        errorMessages.innerHTML = "La capacité doit être comprise entre 100 et 1000.";
        event.preventDefault();
        return;
    }

    // Continue with form submission if everything is valid
  });