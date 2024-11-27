document.addEventListener("DOMContentLoaded", function() {

    // Function to handle conditional field display based on complaint type
    function verifierTypeReclamation() {
        const typeReclamation = document.getElementById("type_reclamation").value;
        const champProf = document.getElementById("prof");
        const champService = document.getElementById("service-container");

        // Reset all fields visibility and requirements
        champProf.required = false;
        champProf.parentNode.style.display = "none";
        champService.style.display = "none";

        if (typeReclamation === "professeur") {
            champProf.required = true;
            champProf.parentNode.style.display = "block";  // Display teacher name field
        } else if (typeReclamation === "cours") {
            champService.style.display = "block";  // Display course/service field
        }
    }

    // Validation function for form submission
    function validateForm(event) {
        // Get all form elements
        const nom = document.getElementById("nom");
        const identifiant = document.getElementById("identifiant");
        const email = document.getElementById("email");
        const telephone = document.getElementById("telephone");
        const typeReclamation = document.getElementById("type_reclamation");
        const description = document.getElementById("description");

        // Regular Expressions
        const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        const phoneRegex = /^[0-9]{8}$/; // Validate exactly 8 digits
        const nameRegex = /^[A-Za-z]+ [A-Za-z]+$/; // Only letters for name and family name

        // Check required fields
        if (!nom.value || !identifiant.value || !email.value || !telephone.value || !typeReclamation.value || !description.value) {
            showAlert("Please fill in all required fields.");
            event.preventDefault(); // Prevent form submission
            return false;
        }

        // Validate Name and Family Name (Only letters allowed)
        if (!nameRegex.test(nom.value)) {
            showAlert("Full Name Required.");
            event.preventDefault(); // Prevent form submission
            return false;
        }

        // Validate Email format
        if (!emailRegex.test(email.value)) {
            showAlert("Please enter a valid email address.");
            event.preventDefault(); // Prevent form submission
            return false;
        }

        // Validate Phone Number (Only 8 digits allowed)
        if (!phoneRegex.test(telephone.value)) {
            showAlert("Please enter a valid phone number (8 digits).");
            event.preventDefault(); // Prevent form submission
            return false;
        }

        // If everything is valid, show the confirmation message and hide the form
        afficherMessageMerci();
        event.preventDefault(); // Prevent form submission to avoid page reload
        return false;
    }

    // Function to show the thank you message
    function afficherMessageMerci() {
        document.getElementById("form-container").style.display = "none";
        document.getElementById("message-merci").style.display = "flex";
    }

    // Event listener for form submission
    const form = document.querySelector("form");
    form.addEventListener("submit", validateForm);

    // Call the verifierTypeReclamation function on page load to initialize visibility
    verifierTypeReclamation();

    // Add event listener to the complaint type dropdown
    const typeReclamationSelect = document.getElementById("type_reclamation");
    typeReclamationSelect.addEventListener("change", verifierTypeReclamation);
});

// Create a custom alert function
function showAlert(message) {
    const alertBox = document.createElement('div');
    alertBox.classList.add('custom-alert');
    alertBox.textContent = message;

    // Add the alert box to the body
    document.body.insertBefore(alertBox, document.body.firstChild);

    // Set a timeout to remove the alert after a few seconds
    setTimeout(() => {
        alertBox.remove();
    }, 5000);
}

// Create alert style (you can add this in your CSS file or in a <style> tag)
const style = document.createElement('style');
style.innerHTML = `
    .custom-alert {
        background-color: #f44336;
        color: white;
        padding: 15px;
        text-align: center;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 1000;
        font-size: 16px;
        font-family: Arial, sans-serif;
    }
`;
document.head.appendChild(style);