<?php
require '../../config.php';
require_once '../../model/Formulaire.php';
include_once '../../Controller/FormulaireC.php';
session_start();
$c=new FormulaireC();
$id=1;
$complaints=$c->showComplaint($id);

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
    <link rel="shortcut icon" type="image/x-icon" href="../Front-office/img/favicon.ico">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Jost:wght@500;600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../Front-office/lib/animate/animate.min.css" rel="stylesheet">
    <link href="../Front-office/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../Front-office/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../Front-office/css/bootstrap.min.css" rel="stylesheet">
    <link href="../Front-office/css/recform.css" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="../Front-office/css/style.css" rel="stylesheet">
    <!-- our css history link-->
    <link rel="stylesheet" href="./css/csscardshistory.css">
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
                        <img src="../Front-office/img/logo.png" alt="Logo de Questerra">
                        <h1 class="m-0">Questerra</h1>
                    </div>
                    
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto py-0">
                        <a href="..\Front-office\index2.php" class="nav-item nav-link ">Home</a>
                        <a href="..\Front-office\blog.php" class="nav-item nav-link">Blog</a>
                        <a href="..\Front-office\Cours.html" class="nav-item nav-link">Courses</a>
                        <a href="..\Front-office\ecahnge.html" class="nav-item nav-link">Questions</a>
                        <a href="..\Front-office\event.php" class="nav-item nav-link ">Events</a>
                        <a href="contact.php" class="nav-item nav-link active">Complaints</a>
                      
                    </div>
                </div>
                    
                <div class="dropdown">
                        <button class="dropdown-button">Settings</button>
                        <div class="dropdown-content">
                          <a href="../Front-office/account.php">Mon compte</a>
                          <a href="../Front-office/login.html">Se déconnecter</a>
                        </div>
                    </div>
                    <div class="dropdowncomplaint">
                      <button class="dropdowncomplaint-button">Complaint</button>
                        <div class="dropdowncomplaint-content">
                        <a href="../Front-office/contact.php">Add Complaint</a>
                          <a href="./history.php">View Complaints</a>
                          <a href="./ComplaintResponse.php">Complaint Progress</a>
                        </div>
                    </div>
            </nav>

            <!-- ending of header -->   

        
        <!-- Navbar & Hero End -->

        <div class="container-xxl py-5 bg-primary hero-header">
            <div class="container my-5 py-5 px-lg-5">
                <div class="row g-5 py-5">
                    <div class="col-12 text-center">
                        <h1 class="text-white animated slideInDown">Your Complaint Progress:</h1>
                       
                        <hr class="bg-white mx-auto mt-0" style="width: 60px;">
                    </div>
                </div>
            </div>
        </div>
    </div>

   <!--History -->
        

   <div class="complaints-container">
    <?php foreach ($complaints as $cc): ?>
        <div class="complaint-card">
            <div class="card-header">
                <h3>Complaint ID: <?php echo htmlspecialchars($cc['id_form'] ?? 'Unknown'); ?></h3>
            </div>
            <div class="card-body">
                <p><strong>Description:</strong> <?php echo htmlspecialchars($cc['description'] ?? 'No description provided'); ?></p>
                <p><strong>Type:</strong> <?php echo htmlspecialchars($cc['type_reclamation'] ?? 'N/A'); ?></p>
            </div>
            <div class="card-footer">
                <a href="./Update.php?id=<?php echo  htmlspecialchars($cc['id_form']); ?> ">
                    

                <button class="view-details" >View Details</button>

                </a>


                <a href="./DeleteForm.php?id=<?php echo  htmlspecialchars($cc['id_form']); ?> ">

<button class="view-details"style="background-color:red;">Delete</button>
</a>
                
            </div>
        </div>
    <?php endforeach; ?>
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
                            <a class="btn btn-link" href="..\Front-office\blog.php">Blog</a>
                            <a class="btn btn-link" href="..\Front-office\Cours.php">    Cours</a>
                            <a class="btn btn-link" href="..\Front-office\ecahnge.php">Questions</a>
                            <a class="btn btn-link" href="..\Front-office\event.php">Evénement</a>
                        <!-- <a class="btn btn-link" href="../Front-office/contact.php" class="nav-item nav-link">Complaint</a>-->
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
                        <a href="../Front-office/index2.php">Home</a>
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
<script src="../Front-office/lib/wow/wow.js"></script>
<script src="../Front-office/lib/easing/easing.min.js"></script>
<script src="../Front-office/lib/waypoints/waypoints.min.js"></script>
<script src="../Front-office/lib/counterup/counterup.min.js"></script>
<script src="../Front-office/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="../Front-office/lib/isotope/isotope.pkgd.min.js"></script>
<script src="../Front-office/lib/lightbox/js/lightbox.min.js"></script>

<!-- Template Javascript--> 
<script src="../Front-office/js/main.js"></script>
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
<!--<script src="../Front-office/js/contactScript.js"></script>-->

</body>

</html>