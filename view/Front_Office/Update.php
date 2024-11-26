<?php

require '../../config.php';
require_once '../../model/Formulaire.php';
include_once '../../Controller/FormulaireC.php';
$c=new FormulaireC();
$id=$_GET['id'];
$complaint=$c->showComplaintbycomplaint($id);

if (($_SERVER['REQUEST_METHOD'] === 'POST') && (isset($_POST['update']))) {
    // Retrieve form inputs
    $nom = htmlspecialchars($_POST['nom']);
    $identifiant = '1';
    $email = htmlspecialchars($_POST['email']);
    $telephone = htmlspecialchars($_POST['telephone']);
    $type_reclamation = htmlspecialchars($_POST['type_reclamation']);
    $prof = isset($_POST['prof']) ? htmlspecialchars($_POST['prof']) : "";
    $service = isset($_POST['service']) ? htmlspecialchars($_POST['service']) : "";
    $description = htmlspecialchars($_POST['description']);
    $urgent = isset($_POST['urgent']) ? 1 : 0;

    // Handle file uploads
    $file_names = [];
   
    // Save the complaint using FormulaireC
    $formulaireC = new FormulaireC();
    $formulaireC->updateComplaint($nom, $id, $email, $telephone, $type_reclamation, $prof, $service, $description, $urgent);

    // Redirect or display a success message
 header("Location: ./history.php");
    exit;
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Questerra</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="../Front_Office/img/favicon.ico">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Jost:wght@500;600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../Front_Office/lib/animate/animate.min.css" rel="stylesheet">
    <link href="../Front_Office/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../Front_Office/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../Front_Office/css/bootstrap.min.css" rel="stylesheet">
    <link href="../Front_Office/css/recform.css" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="../Front_Office/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Chargement...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <div class="logo-container">
                        <img src="../Front_Office/img/logo.png" alt="Logo de Questerra">
                        <h1 class="m-0">Questerra</h1>
                    </div>
                    
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto py-0">
                        <a href="../Front_Office/index.html" class="nav-item nav-link">Accueil</a>
                        <a href="C:\Users\bessa\Downloads\wetransfer_projet-web_2024-11-16_2230\Projet Web\view\Front-office\les taches\imen\blog.html" class="nav-item nav-link ">Blog</a>
                        <a href="C:\Users\bessa\Downloads\wetransfer_projet-web_2024-11-16_2230\Projet Web\view\Front-office\les taches\akrem\Cours.html" class="nav-item nav-link ">Cours</a>
                        <a href="C:\Users\bessa\Downloads\wetransfer_projet-web_2024-11-16_2230\Projet Web\view\Front-office\les taches\firas\ecahnge.html" class="nav-item nav-link ">Questions</a>
                        <a href="C:\Users\bessa\Downloads\wetransfer_projet-web_2024-11-16_2230\Projet Web\view\Front-office\les taches\nader\event.html" class="nav-item nav-link ">Evénement</a>
                        <a href="../Front_Office/contact.html" class="nav-item nav-link active">Complaint</a>
                      
                    </div>
                </div>
                    
                    <div class="dropdown">
                        <button class="dropdown-button">Settings</button>
                            <div class="dropdown-content">
                                <a href="C:\Users\bessa\Downloads\wetransfer_projet-web_2024-11-16_2230\Projet Web\view\Front-office\les taches\sadek\account.html">Mon compte</a>
                                <a href="C:\Users\bessa\Downloads\wetransfer_projet-web_2024-11-16_2230\Projet Web\view\Front-office\les taches\sadek\index.html">Se déconnecter</a>
                            </div>
                    </div>
                    <div class="dropdowncomplaint">
                        <button class="dropdowncomplaint-button">Complaint</button>
                        <div class="dropdowncomplaint-content">
                            <a href="../Front_Office/contact.php">Add Complaint</a>
                            <a href="./history.php">View Complaints</a>
                        </div>
                    </div>
            </nav>

            <!-- ending of header -->   

            
        <!-- Navbar & Hero End -->

        <div class="container-xxl py-5 bg-primary hero-header">
            <div class="container my-5 py-5 px-lg-5">
                <div class="row g-5 py-5">
                    <div class="col-12 text-center">
                        <h1 class="text-white animated slideInDown">Complaint Form :</h1>
                        <p class="text-white pb-3 animated slideInDown">
                            "If you encounter any issues or have any questions, we are here to assist you. Feel free to share your concerns with us."
                        </p>
                        <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
   
     <!------------------Form apres le php------------------>
<div id="form-container" class="form-container">
    <form  method="POST" enctype="multipart/form-data">


        <!-- Informations du Réclamant -->
         <!--
        <div class="form-group">
            <label for="nom">Full Name :</label>
            <input type="text" id="nom" name="nom" value="<?php echo $complaint['nom'];?>" required>
            
        


        </div>

       

        <div class="form-group">
            <label for="email">E-mail Address :</label>
            <input type="email" id="email" name="email" value="<?php echo $complaint['email'];?>" required>
        </div>

        <div class="form-group">
            <label for="telephone">Phone Number:</label>
            <input type="tel" id="telephone" name="telephone" value="<?php echo $complaint['telephone'];?>"required>
        </div>
    
       
<div class="form-group">
    <label for="type_reclamation">Type of Complaint:</label>
    <select id="type_reclamation" name="type_reclamation" required onchange="toggleFields()">
        <option value="">-- Select a type of complaint --</option>
        <option value="professeur" <?php echo ($complaint['type_reclamation'] == 'professeur') ? 'selected' : ''; ?>>Complaint about a professor</option>
        <option value="cours" <?php echo ($complaint['type_reclamation'] == 'cours') ? 'selected' : ''; ?>>Complaint about a course</option>
        <option value="site_web" <?php echo ($complaint['type_reclamation'] == 'site_web') ? 'selected' : ''; ?>>Technical issue with the website</option>
        <option value="service_specifique" <?php echo ($complaint['type_reclamation'] == 'service_specifique') ? 'selected' : ''; ?>>Complaint about a specific service</option>
        <option value="autre" <?php echo ($complaint['type_reclamation'] == 'autre') ? 'selected' : ''; ?>>Other</option>
    </select>
</div>


<div class="form-group" id="prof-container" style="display: <?php echo ($complaint['type_reclamation'] == 'professeur') ? 'block' : 'none'; ?>;">
    <label for="prof">Teacher's Name:</label>
    <input type="text" id="prof" name="prof" value="<?php echo htmlspecialchars($complaint['prof'] ?? ''); ?>">
</div>


<div class="form-group" id="service-container" style="display: <?php echo ($complaint['type_reclamation'] == 'service_specifique' || $complaint['type_reclamation'] == 'cours') ? 'block' : 'none'; ?>;">
    <label for="service">Course or Service Concerned:</label>
    <select id="service" name="service">
        <option value="">-- Select a subject --</option>
        <option value="architecture" <?php echo ($complaint['service'] == 'architecture') ? 'selected' : ''; ?>>Architecture</option>
        <option value="marketing" <?php echo ($complaint['service'] == 'marketing') ? 'selected' : ''; ?>>Marketing</option>
        <option value="francais" <?php echo ($complaint['service'] == 'francais') ? 'selected' : ''; ?>>French</option>
        <option value="anglais" <?php echo ($complaint['service'] == 'anglais') ? 'selected' : ''; ?>>English</option>
        <option value="informatique" <?php echo ($complaint['service'] == 'informatique') ? 'selected' : ''; ?>>Computer Science</option>
        <option value="sciences" <?php echo ($complaint['service'] == 'sciences') ? 'selected' : ''; ?>>Scientific Subjects</option>
    </select>
</div>
-->
        <!-- Description de la Réclamation -->
        <div class="form-group">
    <label for="description">Detailed Description:</label>
    <textarea id="description" name="description" rows="5" required>
        <?php echo htmlspecialchars($complaint['description']); ?>
</textarea>
</div>


        <!-- Pièces Jointes 
        <div class="form-group">
            <label for="pieces_jointes">Download Files:</label>
            <input type="file" id="pieces_jointes" name="pieces_jointes" value="<?php echo $complaint['pieces_jointes'];?>"multiple>
        </div>-->

      <!-- Réclamation urgente -->
<div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="urgent" name="urgent" 
        value="1" <?php echo ($complaint['urgent'] == 1) ? 'checked' : ''; ?>>
    <label class="form-check-label" for="urgent">Marked as URGENT</label>
</div>


        <!-- Soumettre la Réclamation -->
        <button id="submit" name="update" class="submit-btn">Submit Update</button>
    </form>
</div>

     
<div id="message-merci" class="merci-message" style="display: none;">
<h2>Thank you for your input!</h2><br>
<p>Your complaint has been successfully submitted. We will process it as soon as possible.</p>
</div>
        
<!-- Footer Start -->
<div class="container-fluid bg-primary text-light footer wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5 px-lg-5">
        <div class="row g-5">
            <div class="col-md-6 col-lg-3">
                <p class="section-title text-white h5 mb-4">Address<span></span></p>
                <p><i class="fa fa-map-marker-alt me-3"></i>2083 Cité La Gazelle, Ariana, Tunisia</p>
                <p><i class="fa fa-phone-alt me-3"></i>+016 23 989 000</p>
                <p><i class="fa fa-envelope me-3"></i>questerra@gmail.com</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-outline-light btn-social" href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <p class="section-title text-white h5 mb-4">Lien rapide<span></span></p>
                <a class="btn btn-link" href="C:\Users\bessa\Downloads\wetransfer_projet-web_2024-11-16_2230\Projet Web\view\Front-office\les taches\imen\blog.html">Blog</a>
                <a class="btn btn-link" href="C:\Users\bessa\Downloads\wetransfer_projet-web_2024-11-16_2230\Projet Web\view\Front-office\les taches\akrem\Cours.html">    Cours</a>
                <a class="btn btn-link" href="C:\Users\bessa\Downloads\wetransfer_projet-web_2024-11-16_2230\Projet Web\view\Front-office\les taches\firas\ecahnge.html">Questions</a>
                <a class="btn btn-link" href="C:\Users\bessa\Downloads\wetransfer_projet-web_2024-11-16_2230\Projet Web\view\Front-office\les taches\nader\event.html">Evénement</a>
                <a class="btn btn-link" href="C:\Users\bessa\Downloads\wetransfer_projet-web_2024-11-16_2230\Projet Web\view\Front-office\les taches\maram\contact.html" class="nav-item nav-link">Complaint</a>
            </div>
            <div class="col-md-6 col-lg-3">
                <p class="section-title text-white h5 mb-4">Founders<span></span></p>
                <div class="row g-2">
                    <p>Akrem Jouini</p>
                    <p>Firas Ben Hamouda</p>
                    <p>Imen Goutali</p>
                    <p>Maram Bessaoud</p>
                    <p>Mohamed Sadek Dejoui</p>
                    <p>Nader Abdellaoui</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <p class="section-title text-white h5 mb-4">Rapport<span></span></p>
                <div class="position-relative w-100 mt-3">
                    <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="Votre email" style="height: 48px;">
                    <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i class="fa fa-paper-plane text-primary fs-4"></i></button>
                </div>
            </div>
        </div>
    </div>
    <div class="container px-lg-5">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <div class="footer-menu">
                        <a href="../Front_Office/index.html">Accueille</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-secondary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="../Front_Office/lib/wow/wow.js"></script>
<script src="../Front_Office/lib/easing/easing.min.js"></script>
<script src="../Front_Office/lib/waypoints/waypoints.min.js"></script>
<script src="../Front_Office/lib/counterup/counterup.min.js"></script>
<script src="../Front_Office/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="../Front_Office/lib/isotope/isotope.pkgd.min.js"></script>
<script src="../Front_Office/lib/lightbox/js/lightbox.min.js"></script>

<!-- Template Javascript--> 
<script src="../Front_Office/js/main.js"></script>
<script>
    function afficherMessageMerci() {
        document.getElementById("form-container").style.display = "none";
        document.getElementById("message-merci").style.display = "flex";
    }

    function verifierTypeReclamation() {
        const typeReclamation = document.getElementById("type_reclamation").value;
        const champProf = document.getElementById("prof");
        const champService = document.getElementById("service-container");

        if (typeReclamation === "professeur") {
            champProf.required = true;
            champProf.parentNode.style.display = "block"; // Affiche le champ "Nom de l'enseignant"
            champService.style.display = "none"; // Cache "Cours ou Service"
        } else if (typeReclamation === "cours") {
            champService.style.display = "block"; // Affiche "Cours ou Service"
            champProf.parentNode.style.display = "none"; // Cache "Nom de l'enseignant"
            champProf.required = false;
        } else {
            champProf.parentNode.style.display = "none";
            champService.style.display = "none";
            champProf.required = false;
        }
    }
</script>
<script src="../Front_Office/js/contactScript.js"></script>
<script>
    function toggleFields() {
        const complaintType = document.getElementById('type_reclamation').value;
        const profContainer = document.getElementById('prof-container');
        const serviceContainer = document.getElementById('service-container');

        // Show/Hide the appropriate fields based on the selected type
        if (complaintType === 'professeur') {
            profContainer.style.display = 'block';  // Show professor field
            serviceContainer.style.display = 'none'; // Hide service field
        } else if (complaintType === 'cours' || complaintType === 'service_specifique') {
            profContainer.style.display = 'none';  // Hide professor field
            serviceContainer.style.display = 'block'; // Show service field
        } else {
            profContainer.style.display = 'none';  // Hide both fields
            serviceContainer.style.display = 'none';
        }
    }

    // Call toggleFields to set the initial visibility on page load
    window.onload = toggleFields;
</script>
</body>

</html>