<?php
require "C:\\xampp\\htdocs\\akrem web\\Model\\courses.php";
require_once "C:\\xampp\\htdocs\\akrem web\\config.php";
require "C:\\xampp\\htdocs\\akrem web\\Controller\\coursesC.php";

try {
    $db = config::getConnexion();

    // Set the category to English
    $category = "Marketing"; 

    // Base query to fetch courses for the English category
    $queryStr = "SELECT * FROM courses WHERE category = :category";

    // Check if a module is selected in the query string
    $selectedModule = isset($_GET['id_module']) ? $_GET['id_module'] : null;

    // Append module filter if a specific module is selected
    if ($selectedModule) {
        $queryStr .= " AND id_module = :id_module";
    }

    // Prepare the query
    $query = $db->prepare($queryStr);

    // Bind parameters
    $params = ['category' => $category];
    if ($selectedModule) {
        $params['id_module'] = $selectedModule;
    }

    // Execute the query
    $query->execute($params);
    $courses = $query->fetchAll(PDO::FETCH_ASSOC);

} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
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
    <link rel="shortcut icon" type="image/x-icon" href="..\Front_Office\img\favicon.ico">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Jost:wght@500;600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="..\Front_Office\lib\animate\animate.min.css" rel="stylesheet">
    <link href="..\Front_Office\lib\owlcarousel\assets\owl.carousel.min.css" rel="stylesheet">
    <link href="..\Front_Office\lib\lightbox\css\lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="..\Front_Office\css\bootstrap.min.css" rel="stylesheet">
   
    <!-- Template Stylesheet -->
    <link href="..\Front_Office\css\style.css" rel="stylesheet">
    <style>
        .filter-buttons {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
        }
        .filter-buttons button {
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            background-color: #6c63ff;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .filter-buttons button:hover {
            background-color: #ffd891;
            color: #333;
        }
        
    </style>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f6f8;
            color: #333;
        }

        h2 {
            color: #2c3e50;
            text-align: center;
            margin-bottom: 20px;
        }

        .course-details-container {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            margin: 0 auto;
        }

        .course-title {
            font-size: 1.5em;
            color: #34495e;
            margin-bottom: 15px;
        }

        .course-description {
            font-size: 1.1em;
            color: #555;
            margin-bottom: 20px;
        }

        .course-progress {
            margin-bottom: 15px;
        }

        .progress-bar {
            background-color: #ddd;
            border-radius: 5px;
            overflow: hidden;
            height: 10px;
            width: 100%;
        }

        .progress {
            background-color: #ae278e;
            height: 100%;
            width: 50%; /* Adjust dynamically based on the actual progress */
        }

        .back-button {
            background-color: #b929aa;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            font-size: 0.9em;
        }

        .back-button:hover {
            background-color: #3498db;
        }

        .module-container {
        background-color: #fff;
        border-radius: 8px;
        padding: 20px;
        margin-bottom: 20px;
        border: 1px solid #ddd;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        cursor: pointer;
    }

    .module-container:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
    }

    .module-title {
        font-size: 1.4em;
        font-weight: bold;
        color: #2c3e50;
        text-decoration: none;
        display: block;
        margin-bottom: 10px;
        transition: color 0.3s ease;
    }

    .module-title:hover {
        color: #8e44ad; /* Purple color when hovered */
    }

    .module-description {
        font-size: 1.1em;
        color: #555;
        margin: 0;
    }

    .module-container:active {
        background-color: #f9f9f9; /* Light gray background when clicked */
    }
    </style>
     <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f9f9f9;
        }
        h1 {
            text-align: center;
            color: #444;
        }
        .course-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }
        .course-card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 20px;
            width: 280px;
            text-align: center;
        }
        .course-card h2 {
            font-size: 1.5em;
            color: #333;
            margin-bottom: 10px;
        }
        .course-card p {
            color: #666;
            font-size: 0.9em;
            margin: 5px 0;
        }
        .course-card span {
            font-weight: bold;
            color: #6c63ff;
        }
    </style>
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
                        <img src="../Front_Office/img/logo.png" alt="Logo de Questerra">
                        <h1 class="m-0">Questerra</h1>
                    </div>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto py-0">
                        <a href="../Front_Office/index.html" class="nav-item nav-link">Home</a>
                        <a href="../Front_Office/les taches/imen/blog.html" class="nav-item nav-link ">Blog</a>
                        <a href="../Front_Office/Cours.html" class="nav-item nav-link active">Courses</a>
                       <a href="c:\Users\21628\Downloads\wetransfer_projet-web_2024-11-18_2122\Projet Web\view\Front_Office\les taches\firas\ecahnge.html" class="nav-item nav-link">Questions</a>
                        <a href="c:\Users\21628\Downloads\wetransfer_projet-web_2024-11-18_2122\Projet Web\view\Front_Office\les taches\nader\event.html" class="nav-item nav-link">Events</a>
                        <a href="c:\Users\21628\Downloads\wetransfer_projet-web_2024-11-18_2122\Projet Web\view\Front_Office\les taches\maram\contact.html" class="nav-item nav-link">Complaints</a>
                      
                    </div>
                </div>
                    
                    <div class="dropdown">
                        
                        <button class="dropdown-button">Settings</button>
                        <div class="dropdown-content">
                          <a href="c:\Users\21628\Downloads\wetransfer_projet-web_2024-11-18_2122\Projet Web\view\Front_Office\les taches\sadek\account.html">Mon compte</a>
                          <a href="c:\Users\21628\Downloads\wetransfer_projet-web_2024-11-18_2122\Projet Web\view\Front_Office\les taches\sadek\index.html">Se déconnecter</a>
                        </div>
                      </div>
            </nav>

            
            <!-- Hero Section -->
            <div class="container-xxl py-5 bg-primary hero-header">
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5 py-5">
                        <div class="col-12 text-center">
                            <h1 class="text-white animated slideInDown">Marketing Courses</h1>
                            <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
   <!-------------Filtres les modules yebda ----------------->
   <div class="filter-buttons">
            <button onclick="filterCourses('all')">All</button>
            <button onclick="filterCourses('1')">Module 1</button>
            <button onclick="filterCourses('2')">Module 2</button>
            <button onclick="filterCourses('3')">Module 3</button>
            <button onclick="filterCourses('4')">Module 4</button>
            <button onclick="filterCourses('5')">Module 5</button>
        </div>
           <!-- Course Details Start -->
        <div class="container">
            <h1>French Category Courses</h1>
            <div class="course-list">
        <?php if (!empty($courses)) { ?>
            <?php foreach ($courses as $course) { ?>
                <div class="course-card" data-module="<?php echo htmlspecialchars($course['id_module']); ?>">
                    <div class="full-details">
                        <h2><span>Title:</span> <?php echo htmlspecialchars($course['title']); ?></h2>
                        <p><span>Category:</span> <?php echo htmlspecialchars($course['category']); ?></p>
                        <p><span>Price:</span> $<?php echo htmlspecialchars($course['price']); ?></p>
                        <p><span>Duration:</span> <?php echo htmlspecialchars($course['duration']); ?></p>
                        <p><span>Description:</span> <?php echo htmlspecialchars($course['description']); ?></p>
                        <p><span>Module:</span> <?php echo htmlspecialchars($course['id_module']); ?></p>
                    </div>
                    <div class="simple-details" style="display: none;">
                        <h2><span>Title:</span> <?php echo htmlspecialchars($course['title']); ?></h2>
                        <p><span>Description:</span> <?php echo htmlspecialchars($course['description']); ?></p>
                    </div>
                </div>
            <?php } ?>
        <?php } else { ?>
            <p>No courses available for the French category.</p>
        <?php } ?>
    </div>
</div>

<script>
    function filterCourses(moduleId) {
        const courseCards = document.querySelectorAll('.course-card');
        
        // Loop through each course card to apply filtering logic
        courseCards.forEach(card => {
            const fullDetails = card.querySelector('.full-details');
            const simpleDetails = card.querySelector('.simple-details');
            const courseModule = card.getAttribute('data-module'); // Get the module of the course

            if (moduleId === 'all') {
                // If 'All Modules' is selected, show all courses with full details
                card.style.display = 'block';
                fullDetails.style.display = 'block';
                simpleDetails.style.display = 'none';
            } else if (courseModule === moduleId) {
                // Show only the title and description for courses in the selected module
                card.style.display = 'block'; // Show the card
                fullDetails.style.display = 'none'; // Hide full details
                simpleDetails.style.display = 'block'; // Show title and description
            } else {
                // Hide courses that are not in the selected module
                card.style.display = 'none';
            }
        });
    }
</script>
  <!-------------Filtres les modules wfee----------------->
        
        <!-- Course Details End -->
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
                <a class="btn btn-link" href="c:\Users\21628\Downloads\wetransfer_projet-web_2024-11-18_2122\Projet Web\view\Front-office\les taches\imen\blog.html">Blog</a>
                <a class="btn btn-link" href="c:\Users\21628\Downloads\wetransfer_projet-web_2024-11-18_2122\Projet Web\view\Front-office\les taches\akrem\Cours.html">    Cours</a>
                <a class="btn btn-link" href="c:\Users\21628\Downloads\wetransfer_projet-web_2024-11-18_2122\Projet Web\view\Front-office\les taches\firas\ecahnge.html">Questions</a>
                <a class="btn btn-link" href="c:\Users\21628\Downloads\wetransfer_projet-web_2024-11-18_2122\Projet Web\view\Front-office\les taches\nader\event.html">Evénement</a>
                <a class="btn btn-link" href="c:\Users\21628\Downloads\wetransfer_projet-web_2024-11-18_2122\Projet Web\view\Front-office\les taches\maram\contact.html" class="nav-item nav-link">Complaint</a>
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
                        <a href="c:\Users\21628\Downloads\wetransfer_projet-web_2024-11-18_2122\Projet Web\view\Front-office\index.html">Accueille</a>
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

<!-- Template Javascript -->
<script src="../Front_Office/js/main.js"></script>

</body>
</html>