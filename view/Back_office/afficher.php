<?php
require_once '../../model/courses.php';
include_once '../../Controller/coursesC.php';



// Fetch courses from the database
$sql = "SELECT * FROM courses";
$pdo = Config::getConnexion();
$stmt = $pdo->query($sql);
$courses = $stmt->fetchAll(PDO::FETCH_ASSOC);


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses List</title>
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
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #5a2d82;
            color: white;
            padding: 15px 20px;
            text-align: center;
        }

        header h1 {
            margin: 0;
        }

        .container {
            max-width: 900px;
            margin: 30px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .add-course {
            display: inline-block;
            margin-bottom: 20px;
            padding: 10px 20px;
            background-color: #5a2d82;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .add-course:hover {
            background-color: #3498db;
        }

        .course-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .course-item {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            background-color: #fafafa;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .course-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
        }

        .course-item h3 {
            margin-top: 0;
            color: #5a2d82;
        }

        .course-item p {
            margin: 8px 0;
        }

        .course-actions {
            margin-top: 10px;
        }

        .course-actions a {
            display: inline-block;
            margin-right: 10px;
            padding: 8px 12px;
            text-decoration: none;
            color: white;
            background-color: #3498db;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .course-actions a:hover {
            background-color: #2c3e50;
        }

        .delete {
            background-color: #e74c3c;
        }

        .delete:hover {
            background-color: #c0392b;
        }
    </style>
</head>
<body>
    <!-- Start Left menu area -->
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="index.php"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                <strong><a href="index.php"><img src="img/logo/logosn.png" alt="" /></a></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li class="active">
                            <a class="has-arrow" href="index.php">
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
                                <li><a title="Add Students" href="add-student.php"><span class="mini-sub-pro">Ajouter un etudiant</span></a></li>
                                <li><a title="Edit Students" href="edit-student.html"><span class="mini-sub-pro">Modifier etudiant</span></a></li>
                                <li><a title="Students Profile" href="student-profile.html"><span class="mini-sub-pro">Profil du etudiant</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="all-courses.html" aria-expanded="false"><span class="educate-icon educate-course icon-wrap"></span> <span class="mini-click-non">Courses</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Courses" href="all courses.php"><span class="mini-sub-pro">ALL Courses</span></a></li>
                                <li><a title="Add Courses" href="add.php"><span class="mini-sub-pro">Add Course</span></a></li>
                                <li><a title="Edit Courses" href="edit.php"><span class="mini-sub-pro">Edit Course</span></a></li>
                               <!--<li><a title="Courses Profile" href="courses info.html"><span class="mini-sub-pro">Course Infos</span></a></li>-->
                                <li><a title="Product Payment" href="courses pay.php"><span class="mini-sub-pro">Course Paiement</span></a></li>
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
                        <a href="index.php"><img class="main-logo" src="../Back_Office/img/logo/logo.png" alt="" /></a>
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
    <header>
        <h1>Courses List</h1>
    </header>
    <div class="container">
        <a href="add.php" class="add-course">Add a New Course</a>
        <ul class="course-list">
            <?php foreach ($courses as $course): ?>
                <li class="course-item">
                    <h3><?php echo htmlspecialchars($course['title']); ?></h3>
                    <p><strong>Category :</strong> <?php echo htmlspecialchars($course['category']); ?></p>
                    <p><strong>Price :</strong> <?php echo htmlspecialchars($course['price']); ?> €</p>
                    <p><strong>Duration :</strong> <?php echo htmlspecialchars($course['duration']); ?> heures</p>
                    <p><strong>Description :</strong> <?php echo htmlspecialchars($course['description']); ?></p>
                    <p><strong>id_module :</strong> <?php echo htmlspecialchars($course['id_module']); ?> </p>
                    <div class="course-actions">
                        <a href="edit_courses.php?id=<?php echo $course['id']; ?>">Edit</a>
                        <a href="delete.php?id=<?php echo $course['id']; ?>" class="delete">Delete</a>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
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
        </body>
</html>