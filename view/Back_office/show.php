<?php
require '../../controller/user_controller.php'; 

    require_once '../../model/Formulaire.php';
    include_once '../../Controller/FormulaireC.php';
    include_once '../../Controller/NotificationC.php';
    //imen
    require_once '../../model/article.php';
    require_once '../../model/commentaire.php';
    include_once '../../Controller/ArticleC.php';
    include_once '../../Controller/CommentaireC.php';


    $c=new FormulaireC();
    $notif=new NotificationC();
    $all_notifs_any=$notif->showNotifAdmin();
    $all_notifs=$notif->showNotifAdminUnseen(); 
session_start();
$utilisateur = new utilisateur_controller();

if(!isset($_SESSION['email'])){
    header("Location: http://localhost/Projet%20Web/view/Front-office/login.html");
    exit();
}


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email'])) {
    $email = $_POST['email'];
    // Use $email to fetch user details or perform actions
} else {
    // Handle cases where the email is not provided
    echo "Error: No email provided.";
}
$list = $utilisateur->showUser($email);
$id = $list['id'];
?>














<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Questerra</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="..\Back_office\img\favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="..\Back_office\css\bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="..\Back_office\css\font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="..\Back_office\css\owl.carousel.css">
    <link rel="stylesheet" href="..\Back_office\css\owl.theme.css">
    <link rel="stylesheet" href="..\Back_office\css\owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="..\Back_office\css\animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="..\Back_office\css\normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="..\Back_office\css\meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="..\Back_office\css\main.css">
    <!-- educate icon CSS
		============================================ -->
    <link rel="stylesheet" href="..\Back_office\css\educate-custon-icon.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="..\Back_office\css\morrisjs\morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="..\Back_office\css\scrollbar\jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="..\Back_office\css\metisMenu\metisMenu.min.css">
    <link rel="stylesheet" href="..\Back_office\css\metisMenu\metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="..\Back_office\css\calendar\fullcalendar.min.css">
    <link rel="stylesheet" href="..\Back_office\css\calendar\fullcalendar.print.min.css">
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="..\Back_office\css\form\all-type-forms.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="..\Back_office\style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="..\Back_office\css\responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="..\Back_office\js\vendor\modernizr-2.8.3.min.js"></script>

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

        #notification-container {
            position: fixed;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 9999;
            text-align: center;
        }

        .btn-primary {
            background-color: #ac81f2;
            border: 1px solid #ac81f2;
        }

        .btn-primary:hover {
            background-color: #925eea;
        }
        
   
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 80%;
            margin: auto;
            padding-top: 20px;
        }
        canvas {
            width: 100%;
            height: 400px;
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
                            <a class="has-arrow" href="#">
                                <span class="educate-icon educate-home icon-wrap"></span>
                                <span class="mini-click-non" >EducationMPLOKI</span>
                            </a>
                            <ul class="submenu-angle" aria-expanded="true">
                            </ul>
                        </li>
                        <li>
                        <a title="Landing Page" class="has-arrow" href="" aria-expanded="false">
                            <span class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span> 
                         <span class="mini-click-non">Event</span>
                        </a>

                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="List of events" href="allevent.php"><span class="mini-sub-pro">All events</span></a></li>
                            <li><a title="Event Registrations" href="eventreg.php"><span class="mini-sub-pro">Event Registrations</span></a></li>
                            <li><a title="Event Availability" href="eventplaces.php"><span class="mini-sub-pro">Event Availability</span></a></li>
                        </ul>

                        </li>
                        <li class>
                            <a class="has-arrow" href="..\Back_office\students.php" aria-expanded="false"><span class="educate-icon educate-professor icon-wrap"></span> <span class="mini-click-non">Utilisateurs</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Students" href="..\Back_office\students.php"><span class="mini-sub-pro">All Utilisateurs</span></a></li>
                                <li><a title="Add Students" href="..\Back_office\add-student.php"><span class="mini-sub-pro">Add Utilisateur</span></a></li>
                               <!-- <li><a title="Students Profile" href="..\Back_office\sprofile.php"><span class="mini-sub-pro">Utilisateur Profile</span></a></li>-->
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="all-courses.html" aria-expanded="false"><span class="educate-icon educate-course icon-wrap"></span> <span class="mini-click-non">Courses</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="All Courses" href="all courses.php"><span class="mini-sub-pro">All Course</span></a></li>
                                <li><a title="Add Courses" href="add.php"><span class="mini-sub-pro">Add Course</span></a></li>
                                <li><a title="Edit Courses" href="edit.php"><span class="mini-sub-pro">Edit Course</span></a></li>
                               
                                <li><a title="Product Payment" href="courses pay.php"><span class="mini-sub-pro">Courses Paiement</span></a></li>
                            </ul>
                        </li>
                        <!-- Réclamation section -->
                        <li>
                            <a title="Reclamation" href="#" aria-expanded="false"><span class="educate-icon educate-interface icon-wrap"></span> <span class="mini-click-non">Complaints</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Forums" href="../Back_Office/REC_FORMBackOffice.php"><span class="mini-sub-pro">All Complaints</span></a></li>
                                <li><a title="Create Forum" href="../Back_Office/AppComp.php"><span class="mini-sub-pro">Approved Complaints</span></a></li>
                                <li><a title="Forum Topics" href="../Back_Office/PenComp.php"><span class="mini-sub-pro">Pending Complaints</span></a></li>
                            </ul>                        
                        </li>
                        <!-- Blog section -->
                        <li>
                            <a title="Blog" href="ListArticles.php" aria-expanded="false"><span class="educate-icon educate-interface icon-wrap"></span> <span class="mini-click-non">Blog</span></a>

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
                        <a href="index.php"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
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
                                                 <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                                                
                                                
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                            <!----------------------------------------START NOTIFICATION REC-------------------------------->
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">

                                             
<!----------------------------------------END notif Rec------------------------------------------------->
                                                <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="educate-icon educate-bell" aria-hidden="true"></i><span class="indicator-nt"></span></a>
                                                    <div role="menu" class="notification-author dropdown-menu animated zoomIn">
                                                        <div class="notification-single-top">
                                                            <h1>Notifications</h1>
                                                        </div>
                                                        <ul class="notification-menu">
                                                            <?php foreach($all_notifs as $notf){ ?>
                                                            <li>
                                                                <a href="seennotif.php?id=<?php echo $notf['id_notif']; ?>">
                                                            
                                                                        <div class="notification-icon">
                                                                            <i class="educate-icon educate-checked edu-checked-pro admin-check-pro" aria-hidden="true"></i>
                                                                        </div>
                                                                    
                                                                        <div class="notification-content">
                                                                            <span class="notification-date">
                                                                                <?php 
                                                                                // Check if the created_at field has a valid date, otherwise use the current date
                                                                                $date = strtotime($notf['created_at']);
                                                                                if ($date === false || $notf['created_at'] == '0000-00-00 00:00:00') {
                                                                                    echo date('j M'); // If invalid, display current date
                                                                                } else {
                                                                                    echo date('j M', $date); // Format the valid date
                                                                                }
                                                                                ?>
                                                                            </span>
                                                                            <h2><?php echo $notf['id_user']; ?><span class="educate-icon educate-interface icon-wrap"></span> </h2>
                                                                            <p><?php echo $notf['contenu']; ?></p>
                                                                        </div>

                                                                </a>  
                                                            </li>
                                                            <?php }?>
                                                        </ul>
                                                        <div class="notification-view">
                                                        <a href="#" id="showNotifications"class="openModal" data-id="<?php echo $notf['id_notif']; ?>">Show all notifications</a>
                                                        </div>
                                                    </div>
                                                </li>

                                                
                                                <li class="nav-item">
                                                        <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                            <span class="admin-name">Admin</span>
                                                            <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                                                        </a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li><a href="admin.php"><span class="edu-icon edu-home-admin author-log-ic"></span>Mon Compte</a>
                                                        
                                                        </li>
                                                        <li><a href="..\Front-office\login.html"><span class="edu-icon edu-locked author-log-ic"></span>Se déconnecter</a></li>
                                                       
                                                        

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
                <!-- Welcome area End -->

            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li><a data-toggle="collapse" data-target="#Charts" href="index.php">Home<span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul class="collapse dropdown-header-top">
                                                <li><a href="index.php">Dashboard</a></li>
                                                
                                            </ul>
                                        </li>
                                        <li><a href="events.html">Event</a></li>
                                        <li><a data-toggle="collapse" data-target="#demopro" href="#">Utilisateurs <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demopro" class="collapse dropdown-header-top">
                                                <li><a href="..\Back_office\students.php">All Utilisateurs</a>
                                                </li>
                                                <li><a href="..\Back_office\add-student.php">Add Utilisateur</a>
                                                </li>
                                                <!--<li><a href="..\Back_office\sprofile.php">Student Profile</a>
                                                </li>-->
                                            </ul>
                                        </li>
                        
                                        
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu end -->
            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li><a data-toggle="collapse" data-target="#Charts" href="#">Home <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul class="collapse dropdown-header-top">
                                                <li><a href="..\Back_office\index2.php">Dashboard</a></li>
                                                <li><a href="..\Back_office\analytics.html">Analytics</a></li>
                                                <li><a href="..\Back_office\widgets.html">Widgets</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="..\Back_office\events.html">Event</a></li>
                                        
                                        <li><a data-toggle="collapse" data-target="#demopro" href="#">Utilisateurs <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demopro" class="collapse dropdown-header-top">
                                                <li><a href="..\Back_office\students.php">All Utilisateurs</a>
                                                </li>
                                                <li><a href="..\Back_office\add-student.php">Add Utilisateur</a>
                                                </li>
                                                
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#democrou" href="#">Courses <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="democrou" class="collapse dropdown-header-top">
                                                <li><a href="..\Back_office\all-courses.html">All Courses</a>
                                                </li>
                                                <li><a href="..\Back_office\add-course.html">Add Course</a>
                                                </li>
                                                <li><a href="..\Back_office\edit-course.html">Edit Course</a>
                                                </li>
                                                <li><a href="..\Back_office\course-profile.html">Courses Info</a>
                                                </li>
                                                <li><a href="..\Back_office\course-payment.html">Courses Payment</a>
                                                </li>
                                            </ul>
                                        </li>



                                        <!--
                                        <li><a data-toggle="collapse" data-target="#demolibra" href="#">Library <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demolibra" class="collapse dropdown-header-top">
                                                <li><a href="library-assets.html">Library Assets</a>
                                                </li>
                                                <li><a href="add-library-assets.html">Add Library Asset</a>
                                                </li>
                                                <li><a href="edit-library-assets.html">Edit Library Asset</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demodepart" href="#">Departments <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demodepart" class="collapse dropdown-header-top">
                                                <li><a href="departments.html">Departments List</a>
                                                </li>
                                                <li><a href="add-department.html">Add Departments</a>
                                                </li>
                                                <li><a href="edit-department.html">Edit Departments</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demo" href="#">Mailbox <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demo" class="collapse dropdown-header-top">
                                                <li><a href="mailbox.html">Inbox</a>
                                                </li>
                                                <li><a href="mailbox-view.html">View Mail</a>
                                                </li>
                                                <li><a href="mailbox-compose.html">Compose Mail</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="#">Interface <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="Miscellaneousmob" class="collapse dropdown-header-top">
                                                <li><a href="google-map.html">Google Map</a>
                                                </li>
                                                <li><a href="data-maps.html">Data Maps</a>
                                                </li>
                                                <li><a href="pdf-viewer.html">Pdf Viewer</a>
                                                </li>
                                                <li><a href="x-editable.html">X-Editable</a>
                                                </li>
                                                <li><a href="code-editor.html">Code Editor</a>
                                                </li>
                                                <li><a href="tree-view.html">Tree View</a>
                                                </li>
                                                <li><a href="preloader.html">Preloader</a>
                                                </li>
                                                <li><a href="images-cropper.html">Images Cropper</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Chartsmob" href="#">Charts <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="Chartsmob" class="collapse dropdown-header-top">
                                                <li><a href="bar-charts.html">Bar Charts</a>
                                                </li>
                                                <li><a href="line-charts.html">Line Charts</a>
                                                </li>
                                                <li><a href="area-charts.html">Area Charts</a>
                                                </li>
                                                <li><a href="rounded-chart.html">Rounded Charts</a>
                                                </li>
                                                <li><a href="c3.html">C3 Charts</a>
                                                </li>
                                                <li><a href="sparkline.html">Sparkline Charts</a>
                                                </li>
                                                <li><a href="peity.html">Peity Charts</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Tablesmob" href="#">Tables <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="Tablesmob" class="collapse dropdown-header-top">
                                                <li><a href="static-table.html">Static Table</a>
                                                </li>
                                                <li><a href="data-table.html">Data Table</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#formsmob" href="#">Forms <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="formsmob" class="collapse dropdown-header-top">
                                                <li><a href="basic-form-element.html">Basic Form Elements</a>
                                                </li>
                                                <li><a href="advance-form-element.html">Advanced Form Elements</a>
                                                </li>
                                                <li><a href="password-meter.html">Password Meter</a>
                                                </li>
                                                <li><a href="multi-upload.html">Multi Upload</a>
                                                </li>
                                                <li><a href="tinymc.html">Text Editor</a>
                                                </li>
                                                <li><a href="dual-list-box.html">Dual List Box</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Appviewsmob" href="#">App views <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="Appviewsmob" class="collapse dropdown-header-top">
                                                <li><a href="basic-form-element.html">Basic Form Elements</a>
                                                </li>
                                                <li><a href="advance-form-element.html">Advanced Form Elements</a>
                                                </li>
                                                <li><a href="password-meter.html">Password Meter</a>
                                                </li>
                                                <li><a href="multi-upload.html">Multi Upload</a>
                                                </li>
                                                <li><a href="tinymc.html">Text Editor</a>
                                                </li>
                                                <li><a href="dual-list-box.html">Dual List Box</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Pagemob" href="#">Pages <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="Pagemob" class="collapse dropdown-header-top">
                                                <li><a href="login.html">Login</a>
                                                </li>
                                                <li><a href="register.html">Register</a>
                                                </li>
                                                <li><a href="lock.html">Lock</a>
                                                </li>
                                                <li><a href="password-recovery.html">Password Recovery</a>
                                                </li>
                                                <li><a href="404.html">404 Page</a></li>
                                                <li><a href="500.html">500 Page</a></li>
                                            </ul>
                                        </li>-->
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <h1 style="text-align: center;text-color: white">User Activity Tracker</h1>
                <canvas id="activityChart"></canvas>
            </div>

            <?php
            // Fetch activity counts (you can set the start and end date dynamically)
            $startDate = '2024-01-01'; // Example: start date
            $endDate = '2024-12-31';   // Example: end date
            $userActivity = new utilisateur_controller();
            $activityData = $userActivity->getUserActivityCountsByUser($id, $startDate, $endDate);

            // Prepare data for the chart
            $labels = [];
            $data = [];

            foreach ($activityData as $activity) {
                $labels[] = $activity['action'];
                $data[] = $activity['count'];
            }
            ?>





















            <div class="footer-copyright-area" style="margin-top: 37px">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right"  >
                            <p>Copyright © 2024. All rights reserved. Template by <a href="#">Questerra</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <script>
        // Prepare the data for Chart.js
        const labels = <?php echo json_encode($labels); ?>;
        const data = <?php echo json_encode($data); ?>;

        // Create the chart
        const ctx = document.getElementById('activityChart').getContext('2d');
        const activityChart = new Chart(ctx, {
            type: 'bar', // Type of chart (bar, line, etc.)
            data: {
                labels: labels,  // The activity names (actions)
                datasets: [{
                    label: 'User Activity',
                    data: data, // The count of each activity
                    backgroundColor: 'rgba(54, 162, 235, 0.2)', // Color of the bars
                    borderColor: 'rgba(54, 162, 235, 1)', // Color of the border
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
    
    <!-- jquery
		============================================ -->
    <script src="..\Back_office\js\vendor\jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="..\Back_office\js\bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="..\Back_office\js\wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="..\Back_office\js\jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="..\Back_office\js\jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="..\Back_office\js\owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="..\Back_office\js\jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="..\Back_office\js\jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="..\Back_office\js\scrollbar\jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="..\Back_office\js\scrollbar\mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="..\Back_office\js\metisMenu\metisMenu.min.js"></script>
    <script src="..\Back_office\js\metisMenu\metisMenu-active.js"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="..\Back_office\js\sparkline\jquery.sparkline.min.js"></script>
    <script src="..\Back_office\js\sparkline\jquery.charts-sparkline.js"></script>
    <!-- calendar JS
		============================================ -->
    <script src="..\Back_office\js\calendar\moment.min.js"></script>
    <script src="..\Back_office\js\calendar\fullcalendar.min.js"></script>
    <script src="..\Back_office\js\calendar\fullcalendar-active.js"></script>
    <!-- tab JS
		============================================ -->
    <script src="..\Back_office\js\tab.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="..\Back_office\js\plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="..\Back_office\js\main.js"></script>
    <!-- tawk chat JS
		============================================ -->
    <script src="..\Back_office\js\tawk-chat.js"></script>
</body>

</html>
