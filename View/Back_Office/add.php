
<?php
require "C:\\xampp\\htdocs\\akrem web\\Model\\courses.php";
require_once "C:\\xampp\\htdocs\\akrem web\\config.php";
require "C:\\xampp\\htdocs\\akrem web\\Controller\\coursesC.php";

$error = ""; // Initialize an error variable

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the form fields are set and not empty
    if (
        isset($_POST["title"], $_POST["category"], $_POST["price"], 
              $_POST["duration"], $_POST["description"], $_POST["id_module"]) &&
        !empty($_POST["title"]) && !empty($_POST["category"]) &&
        !empty($_POST["price"]) && !empty($_POST["duration"]) &&
        !empty($_POST["description"]) && !empty($_POST["id_module"])
    ) {
        // Create a new course object
        $course = new Course(
            null,
            $_POST["title"],
            $_POST["category"],
            $_POST["price"],
            $_POST["duration"],
            $_POST["description"],
            $_POST["id_module"]
        );

        // Add course to the database
        $courseC = new courseC();
        try {
            $courseC->add($course);
            echo "Course added successfully.";
            header('Location: afficher.php'); // Redirect after successful addition
            exit;
        } catch (Exception $e) {
            $error = "Error adding course: " . $e->getMessage();
        }
    } else {
        $error = "All fields are required.";
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Course</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="stylesheet" href="../Back_Office/css/styleComp.css">
    <link rel="stylesheet" href="../Back_Office/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Back_Office/css/font-awesome.min.css">
    <link rel="stylesheet" href="../Back_Office/css/owl.carousel.css">
    <link rel="stylesheet" href="../Back_Office/css/owl.theme.css">
    <link rel="stylesheet" href="../Back_Office/css/owl.transitions.css">
    <link rel="stylesheet" href="../Back_Office/css/animate.css">
    <link rel="stylesheet" href="../Back_Office/css/normalize.css">
    <link rel="stylesheet" href="../Back_Office/css/meanmenu.min.css">
    <link rel="stylesheet" href="../Back_Office/css/main.css">
    <link rel="stylesheet" href="../Back_Office/css/educate-custon-icon.css">
    <link rel="stylesheet" href="../Back_Office/css/morrisjs/morris.css">
    <link rel="stylesheet" href="../Back_Office/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="../Back_Office/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="../Back_Office/css/metisMenu/metisMenu-vertical.css">
    <link rel="stylesheet" href="../Back_Office/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="../Back_Office/css/calendar/fullcalendar.print.min.css">
    <link rel="stylesheet" href="../Back_Office/style.css">
    <link rel="stylesheet" href="../Back_Office/css/modal.css">
    <link rel="stylesheet" href="../Back_Office/css/responsive.css">
   

    <style>
        /* Changer la couleur de fond du header */
        .header-top-area {
            background-color: #ac81f2; /* Remplacez par la couleur de votre choix */
        }

        /* Changer la couleur du texte dans la navbar */
        .header-top-wraper .nav-link {
            color: white; /* Assurez-vous que le texte est lisible */
        }

        /* Changer la couleur au survol des liens dans la navbar */
        .header-top-wraper .nav-link:hover {
            color: #ffcc00; /* Couleur au survol */
        }

        /* Changer la couleur d'arrière-plan pour le bouton de menu switcher */
        .menu-switcher-pro .btn {
            background-color: #ac81f2; /* Remplacez par la couleur de votre choix */
        }

        /* Changer la couleur de texte des icônes de notification et de message */
        .header-right-info .nav-link {
            color: white; /* Assurez-vous que le texte est lisible sur le fond */
        }

        /* Styles pour la gestion des réclamations */
        .hidden {
            display: none;
        }
    </style>
  <style>
    /* Container styling */
.form-container {
    width: 60%;
    margin: 0 auto;
    padding: 20px;
    background-color: #f9f9f9;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

/* Title styling */
h1 {
    text-align: center;
    font-family: 'Arial', sans-serif;
    color: #333;
}

/* Label and input styling */
label {
    display: block;
    margin: 10px 0 5px;
    font-size: 16px;
    font-weight: bold;
}

input, select, textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 14px;
}

/* Button styling */
button {
    width: auto; /* Auto width so it shrinks to fit its content */
    padding: 10px 20px; /* Adjusted padding to make it smaller */
    background-color: #ac81f2; /* Purple */
    color: white;
    border: none;
    border-radius: 8px; /* Rounded corners */
    font-size: 14px; /* Smaller font size */
    font-weight: bold;
    cursor: pointer;
    transition: all 0.3s ease; /* Smooth transition for all properties */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Subtle shadow */
    text-transform: uppercase; /* Uppercase text for emphasis */
    display: block; /* Block-level to apply margin auto */
    margin: 20px auto; /* Center the button horizontally */
}

button:hover {
    background-color: #ffd891; /* Yellow on hover */
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15); /* Larger shadow on hover */
    transform: translateY(-2px); /* Slight upward movement */
}

button:focus {
    outline: none; /* Remove the default outline */
    box-shadow: 0 0 8px rgba(0, 0, 255, 0.5); /* Focus shadow */
}


/* Link styling */
.container a {
    display: block;
    text-align: center;
    margin-top: 20px;
    font-size: 16px;
    color: #ac81f2;
    text-decoration: none;
}

.container a:hover {
    color: #ffd891;
}

  </style>
</head>
<body>
    <!-- Start Left menu area -->
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                <strong><a href="index.html"><img src="img/logo/logosn.png" alt="" /></a></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li class="active">
                            <a class="has-arrow" href="index.html">
                                <span class="educate-icon educate-home icon-wrap"></span>
                                <span class="mini-click-non">Education</span>
                            </a>
                            <ul class="submenu-angle" aria-expanded="true">
                                <li><a title="Analytics" href=""><span class="mini-sub-pro">Analytique</span></a></li><!--href="analytics.html"-->
                                <li><a title="Widgets" href=""><span class="mini-sub-pro">Widgets</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a title="Landing Page" href="events.html" aria-expanded="false"><span class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Event</span></a>
                        </li>
                        <li>
                            <a class="has-arrow" href="all-professors.html" aria-expanded="false"><span class="educate-icon educate-professor icon-wrap"></span> <span class="mini-click-non">Professors</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Professors" href="all-professors.html"><span class="mini-sub-pro">All</span></a></li>
                                <li><a title="Add Professor" href="add-professor.html"><span class="mini-sub-pro">Add Professor</span></a></li>
                                <li><a title="Edit Professor" href="edit-professor.html"><span class="mini-sub-pro">Edit Professor</span></a></li>
                                <li><a title="Professor Profile" href="professor-profile.html"><span class="mini-sub-pro">Professor Profile</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="all-students.html" aria-expanded="false"><span class="educate-icon educate-student icon-wrap"></span> <span class="mini-click-non">Etudiants</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Students" href="all-students.html"><span class="mini-sub-pro">Tous les etudiants</span></a></li>
                                <li><a title="Add Students" href="add-student.html"><span class="mini-sub-pro">Ajouter un etudiant</span></a></li>
                                <li><a title="Edit Students" href="edit-student.html"><span class="mini-sub-pro">Modifier etudiant</span></a></li>
                                <li><a title="Students Profile" href="student-profile.html"><span class="mini-sub-pro">Profil du etudiant</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="all-courses.html" aria-expanded="false"><span class="educate-icon educate-course icon-wrap"></span> <span class="mini-click-non">Courses</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Courses" href="all courses.html"><span class="mini-sub-pro">ALL Courses</span></a></li>
                                <li><a title="Add Courses" href="add.php"><span class="mini-sub-pro">Add Course</span></a></li>
                                <li><a title="Edit Courses" href="edit.html"><span class="mini-sub-pro">Edit Course</span></a></li>
                               <!--<li><a title="Courses Profile" href="courses info.html"><span class="mini-sub-pro">Course Infos</span></a></li>-->
                                <li><a title="Product Payment" href="courses pay.html"><span class="mini-sub-pro">Course Paiement</span></a></li>
                            </ul>
                        </li>
                        <!-- Réclamation section -->
                        <li>
                            <a title="Reclamation" href="../Back_Office/REC_FORMBackOffice.php" aria-expanded="false"><span class="educate-icon educate-interface icon-wrap"></span> <span class="mini-click-non">Complaints</span></a>
                        </li>
                        <!-- Blog section -->
                        <li>
                            <a title="Blog" href="gestion_blog.html" aria-expanded="false"><span class="educate-icon educate-interface icon-wrap"></span> <span class="mini-click-non">Blog</span></a>

                        </li>
                        <!-- Forum section -->
                        <li>
                            <a class="has-arrow" href="all-forums.html" aria-expanded="false"><span class="educate-icon educate-interface icon-wrap"></span> <span class="mini-click-non">Forum</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Forums" href="all-forum.html"><span class="mini-sub-pro">All Forums</span></a></li>
                                <li><a title="Create Forum" href="create-forum.html"><span class="mini-sub-pro">Create Forum</span></a></li>
                                <li><a title="Forum Topics" href="forum-topics.html"><span class="mini-sub-pro">Forum Subjects</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><span class="educate-icon educate-message icon-wrap"></span> <span class="mini-click-non">EmailBox</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Inbox" href="mailbox.html"><span class="mini-sub-pro">Inbox</span></a></li>
                                <li><a title="View Mail" href="mailbox-view.html"><span class="mini-sub-pro">Show ALL Emails</span></a></li>
                                <li><a title="Compose Mail" href="mailbox-compose.html"><span class="mini-sub-pro">Write An Email</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a title="Settings" href="settings.html" aria-expanded="false"><span class="educate-icon educate-settings icon-wrap"></span> <span class="mini-click-non">Settings</span></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    
    <!-- End Left menu area -->

    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="../Back_Office/img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                                <i class="educate-icon educate-nav"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">
                                            <ul class="nav navbar-nav mai-top-nav">
                                                <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
                                                <li class="nav-item"><a href="#" class="nav-link">About</a></li>
                                                <li class="nav-item"><a href="#" class="nav-link">Services</a></li>
                                                <li class="nav-item dropdown res-dis-nn">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">Project <span class="angle-down-topmenu"><i class="fa fa-angle-down"></i></span></a>
                                                    <div role="menu" class="dropdown-menu animated zoomIn">
                                                        <a href="#" class="dropdown-item">Documentation</a>
                                                        <a href="#" class="dropdown-item">Expert en back-end</a>
                                                        <a href="#" class="dropdown-item">Expert en front-end</a>
                                                        <a href="#" class="dropdown-item">Contacter le support</a>
                                                    </div>
                                                </li>
                                                <li class="nav-item"><a href="#" class="nav-link">Support</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                <li class="nav-item dropdown">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="educate-icon educate-message edu-chat-pro" aria-hidden="true"></i><span class="indicator-ms"></span></a>
                                                    <div role="menu" class="author-message-top dropdown-menu animated zoomIn">
                                                        <div class="message-single-top">
                                                            <h1>Message</h1>
                                                        </div>
                                                        <ul class="message-menu">
                                                            <li>
                                                                <a href="#">
                                                                    <div class="message-img">
                                                                        <img src="img/malek.jpg" alt="">
                                                                    </div>
                                                                    <div class="message-content">
                                                                        <span class="message-date">5 nov</span>
                                                                        <h2>Malek Ben Rejab</h2>
                                                                        <p>Cristiano Ronaldo is the greatest player of all time.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="message-view">
                                                            <a href="#">Show All Messages</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
 <span class="admin-name">Admin</span>
                                                        <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                                                    </a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li><a href="#"><span class="edu-icon edu-home-admin author-log-ic"></span>My Account</a></li>
                                                        <li><a href="#"><span class="edu-icon edu-user-rounded author-log-ic"></span>My profile</a></li>
                                                        <li><a href="#"><span class="edu-icon edu-money author-log-ic"></span>Facturation des utilisateurs</a></li>
                                                        <li><a href="#"><span class="edu-icon edu-settings author-log-ic"></span>Settings</a></li>
                                                        <li><a href="#"><span class="edu-icon edu-locked author-log-ic"></span>Log Out</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Welcome area End -->

 <!-------------------------- ADD Cours Form ----------------------->
 <div class="form-container">
        <h1>Add a New Course</h1>
        <form method="POST" action="http://localhost/akrem%20web/View/back_office/add.php">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" >

             <!-- Catégorie du Cours -->
            <div class="dropdown">
                <label for="category">Category :</label>
                <select id="category" name="category" >
            <option value="English">English</option>
            <option value="French">French</option>
            <option value="DevWeb">Web Development</option>
            <option value="Marketing">Marketing</option>
            <option value="Science">Sciences</option>
            <option value="Architecture">Architecture</option>
            <!-- Des catégories supplémentaires peuvent être ajoutées ici -->
        </select>
        </div>

            <label for="price">Price:</label>
            <input type="number" id="price" name="price" step="0.01" >

            <label for="duration">Duration:</label>
            <input type="text" id="duration" name="duration" >

            <label for="description">Description:</label>
            <textarea id="description" name="description" rows="4" cols="50" ></textarea>

            <label for="id_module">Module ID:</label>
            <input type="number" id="id_module" name="id_module" >

            <button type="submit">Add Course</button>
        </form>
        
    </div>
<div class="container">
    <a href="afficher.php">Back To Courses List.</a>
</div>
<script>
    document.querySelector('form').addEventListener('submit', function (e) {
        // Get form fields
        const title = document.getElementById('title');
        const description = document.getElementById('description');
        const price = document.getElementById('price');
        const category = document.getElementById('category');
        const duration = document.getElementById('duration');

        // Clear previous errors
        document.querySelectorAll('.error').forEach(el => el.remove());

        let isValid = true;

        // Validate Title
        if (title.value.trim() === '') {
            showError(title, 'Le titre est obligatoire.');
            isValid = false;
        }

        // Validate Description
        if (description.value.trim().length < 10) {
            showError(description, 'La description doit contenir au moins 10 caractères.');
            isValid = false;
        }

        // Validate Price
        if (!price.value || price.value <= 0) {
            showError(price, 'Le prix doit être supérieur à 0.');
            isValid = false;
        }

        // Validate Category
        if (category.value.trim() === '') {
            showError(category, 'Veuillez sélectionner une catégorie.');
            isValid = false;
        }

        // Validate Duration
        if (!duration.value || duration.value <= 0) {
            showError(duration, 'La durée doit être supérieure à 0.');
            isValid = false;
        }

        // Prevent form submission if invalid
        if (!isValid) {
            e.preventDefault();
        }
    });

    // Function to display error message
    function showError(input, message) {
        const error = document.createElement('span');
        error.className = 'error';
        error.textContent = message;
        error.style.color = 'red';
        error.style.fontSize = '0.9rem';
        error.style.display = 'block';
        error.style.marginTop = '5px';
        input.insertAdjacentElement('afterend', error);
    }
</script>










     <!-- jquery
		============================================ -->
        <script src="js/vendor/jquery-1.12.4.min.js"></script>
        <!-- bootstrap JS
            ============================================ -->
        <script src="js/bootstrap.min.js"></script>
        <!-- wow JS
            ============================================ -->
        <script src="js/wow.min.js"></script>
        <!-- price-slider JS
            ============================================ -->
        <script src="js/jquery-price-slider.js"></script>
        <!-- meanmenu JS
            ============================================ -->
        <script src="js/jquery.meanmenu.js"></script>
        <!-- owl.carousel JS
            ============================================ -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- sticky JS
            ============================================ -->
        <script src="js/jquery.sticky.js"></script>
        <!-- scrollUp JS
            ============================================ -->
        <script src="js/jquery.scrollUp.min.js"></script>
        <!-- counterup JS
            ============================================ -->
        <script src="js/counterup/jquery.counterup.min.js"></script>
        <script src="js/counterup/waypoints.min.js"></script>
        <script src="js/counterup/counterup-active.js"></script>
        <!-- mCustomScrollbar JS
            ============================================ -->
        <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
        <!-- metisMenu JS
            ============================================ -->
        <script src="js/metisMenu/metisMenu.min.js"></script>
        <script src="js/metisMenu/metisMenu-active.js"></script>
        <!-- morrisjs JS
            ============================================ -->
        <script src="js/morrisjs/raphael-min.js"></script>
        <script src="js/morrisjs/morris.js"></script>
        <script src="js/morrisjs/morris-active.js"></script>
        <!-- morrisjs JS
            ============================================ -->
        <script src="js/sparkline/jquery.sparkline.min.js"></script>
        <script src="js/sparkline/jquery.charts-sparkline.js"></script>
        <script src="js/sparkline/sparkline-active.js"></script>
        <!-- calendar JS
            ============================================ -->
        <script src="js/calendar/moment.min.js"></script>
        <script src="js/calendar/fullcalendar.min.js"></script>
        <script src="js/calendar/fullcalendar-active.js"></script>
        <!-- plugins JS
            ============================================ -->
        <script src="js/plugins.js"></script>
        <!-- main JS
            ============================================ -->
        <script src="js/main.js"></script>
        <!-- tawk chat JS
            ============================================ -->
        <script src="js/tawk-chat.js"></script>
        <!-------------Control de saisie Form-------------->
        <script>
            function validateForm() {
    // Validate Title - only letters, numbers, and spaces allowed
    var title = document.getElementById('title').value;
    var titlePattern = /^[a-zA-Z0-9\s]+$/;
    if (!title.match(titlePattern)) {
        alert("Please enter a valid title with only letters, numbers, and spaces.");
        return false;
    }

    // Validate Price - must be a positive number
    var price = parseFloat(document.getElementById('price').value);
    if (isNaN(price) || price <= 0) {
        alert("Please enter a valid price greater than zero.");
        return false;
    }

    // Validate Duration - must be a positive number
    var duration = parseInt(document.getElementById('duration').value);
    if (isNaN(duration) || duration <= 0) {
        alert("Please enter a valid duration in hours.");
        return false;
    }

    // Additional validations can be added here if needed
    return true; // Form is valid
}

        </script>
</body>
</html>