<?php
require '../../config.php';

// Check if the event ID is passed
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = (int)$_GET['id'];

    try {
        // Fetch the event details from the database
        $pdo = config::getConnexion();
        $query = "SELECT * FROM evénements WHERE id_evenement = :id";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $event = $stmt->fetch();

        // Check if the event exists
        if (!$event) {
            die("Event not found.");
        }
    } catch (Exception $e) {
        die("Error: " . $e->getMessage());
    }
} else {
    die("Invalid request.");
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
    <link rel="shortcut icon" type="image/x-icon" href="..\Front-office\img\favicon.ico">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Jost:wght@500;600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="..\Front-office\lib\animate\animate.min.css" rel="stylesheet">
    <link href="..\Front-office\lib\owlcarousel\assets\owl.carousel.min.css" rel="stylesheet">
    <link href="..\Front-office\lib\lightbox\css\lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="..\Front-office\css\bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="..\Front-office\css\style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Chargement</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <div class="logo-container">
                        <img src="..\Front-office\img\logo.png" alt="Logo de Questerra">
                        <h1 class="m-0">Questerra</h1>
                    </div>
                    
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto py-0">
                        <a href="..\Front-office\index.php" class="nav-item nav-link">Accueil</a>
                        <a href="..\Front-office\blog.php" class="nav-item nav-link ">Blog</a>
                        <a href="..\Front-office\Cours.html" class="nav-item nav-link ">Cours</a>
                        <a href="..\Front-office\ecahnge.html" class="nav-item nav-link ">Questions</a>
                        <a href="..\Front-office\event.php" class="nav-item nav-link active">Evénement</a>
                        <a href="..\Front-office\contact.php" class="nav-item nav-link">Complaint</a>
                      
                    </div>
                </div>
                    
                    <div class="dropdown">
                        
                        <button class="dropdown-button">Settings</button>
                        <div class="dropdown-content">
                          <a href="..\Front-office\account.php">Mon compte</a>
                          <a href="..\Front-office\login.html">Se déconnecter</a>
                        </div>
                      </div>
            </nav>

            <!-- ending of header -->   

            <div class="container-xxl py-5 bg-primary hero-header">
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5 py-5">
                        <div class="col-12 text-center">
                            <h1 class="text-white animated slideInDown">Evénements</h1>
                            <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <!-- Events Section Start -->
        <div class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                <div class="event-details">
        <h1><?= htmlspecialchars($event['titre']); ?></h1>
        <img src="<?= !empty($event['image_path']) ? htmlspecialchars($event['image_path']) : '1.jpeg'; ?>" 
             alt="<?= htmlspecialchars($event['titre']); ?>">
        <p><strong>Date:</strong> <?= htmlspecialchars($event['date']); ?></p>
        <p><strong>Time:</strong> <?= htmlspecialchars($event['heure']); ?></p>
        <p><strong>Description:</strong> <?= htmlspecialchars($event['description']); ?></p>
        <p><strong>Location:</strong> <?= htmlspecialchars($event['emplacement']); ?></p>
        <p><strong>Capacity:</strong> <?= htmlspecialchars($event['capacité_maximale']); ?></p>

        <!-- Register Button -->
        <form action="register.php" method="GET" style="display: inline;">
            <input type="hidden" name="id_evenement" value="<?= $event['id_evenement']; ?>">
            <button type="submit" class="btn btn-primary">Register</button>
        </form>

        <!-- Cancel Registration Button -->
        <form action="testt.php" method="GET" style="display: inline;">
            <input type="hidden" name="id_evenement" value="<?= $event['id_evenement']; ?>">
            <button type="submit" class="btn btn-danger">Cancel Registration</button>
        </form>

        <a href="event.php" class="btn btn-secondary">Back to Events</a>
    </div>
</div>
<style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f5f5f5;
    color: #333;
}

.event-details {
    max-width: 800px;
    margin: 40px auto;
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.event-details h1 {
    font-size: 2rem;
    margin-bottom: 20px;
    color: #007bff;
}

.event-details img {
    max-width: 100%;
    height: auto;
    border-radius: 8px;
    margin-bottom: 20px;
}

.event-details p {
    font-size: 1rem;
    margin: 10px 0;
    text-align: left;
}

.event-details p strong {
    color: #555;
}

.event-details .btn {
    display: inline-block;
    font-size: 1rem;
    padding: 10px 20px;
    margin: 10px 5px;
    border-radius: 5px;
    text-decoration: none;
    cursor: pointer;
    border: none;
}

.btn-primary {
    background-color: #007bff;
    color: #fff;
    border: 1px solid #007bff;
}

.btn-primary:hover {
    background-color: #0056b3;
    border-color: #0056b3;
}

.btn-danger {
    background-color: #dc3545;
    color: #fff;
    border: 1px solid #dc3545;
}

.btn-danger:hover {
    background-color: #c82333;
    border-color: #bd2130;
}

.btn-secondary {
    background-color: #6c757d;
    color: #fff;
    border: 1px solid #6c757d;
}

.btn-secondary:hover {
    background-color: #5a6268;
    border-color: #545b62;
}

</style>
                
                
            </div>
        </div>
        <!-- Events Section End -->

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
                        <a class="btn btn-link" href="..\Front-office\Cours.html">    Cours</a>
                        <a class="btn btn-link" href="..\Front-office\ecahnge.html">Questions</a>
                        <a class="btn btn-link" href="..\Front-office\event.php">Evénement</a>
                        <a class="btn btn-link" href="..\Front-office\contact.php" class="nav-item nav-link">Complaint</a>
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
                                <a href="..\Front-office\index.php">Accueille</a>
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
    <script src="..\Front-office\lib\wow\wow.js"></script>
    <script src="..\Front-office\lib\easing\easing.min.js"></script>
    <script src="..\Front-office\lib\waypoints\waypoints.min.js"></script>
    <script src="..\Front-office\lib\counterup\counterup.min.js"></script>
    <script src="..\Front-office\lib\owlcarousel\owl.carousel.min.js"></script>
    <script src="..\Front-office\lib\isotope\isotope.pkgd.min.js"></script>
    <script src="..\Front-office\lib\lightbox\js\lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="..\Front-office\js\main.js"></script>
</body>

</html>