<?php
session_start();
require '../../controller/user_controller.php';
$utilisateur = new utilisateur_controller();

if(!isset($_SESSION['email'])){
    header("Location: http://localhost/Projet%20Web/view/Front-office/login.html");
    exit();
}

// Update the session values if provided via POST
if (isset($_POST['page'])) {
    $_SESSION['page'] = (int)$_POST['page'];
}
if (isset($_POST['search'])) {
    $_SESSION['search'] = $_POST['search'];
}
if (isset($_POST['sort'])) {
    $_SESSION['sort'] = $_POST['sort'];
}
if (isset($_POST['order'])) {
    $_SESSION['order'] = $_POST['order'];
}

// Retrieve the values from the session, with defaults
$page = isset($_SESSION['page']) ? $_SESSION['page'] : 1;
$search = isset($_SESSION['search']) ? $_SESSION['search'] : '';
$sort = isset($_SESSION['sort']) ? $_SESSION['sort'] : 'nom'; // Default sort column
$order = isset($_SESSION['order']) ? $_SESSION['order'] : 'asc'; // Default sort order

$perPage = 5; // Max users per page

// Fetch users based on search and pagination
$list = $utilisateur->listUsersPaginated($page, $perPage, $search, $sort, $order);


// Get total users for pagination
$totalUsers = $utilisateur->getTotalUsers();
$totalPages = ceil($totalUsers / $perPage);

$utilisateur->deactivateInactiveUsers();  // Call the function to deactivate inactive users
$utilisateur->updateActionsToActiveIfLastActive();  // Updates actions for users whose last action was 'active'
?>



<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Questerra</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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

        .styled-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 14px;
            
            
        }

        .styled-table thead tr {
            background-color: #D8BFD8;
            color: #000;
            text-align: left;
        }

        .styled-table th, .styled-table td {
            padding: 12px 20px;
            border: 1px solid #ddd;
            
        }

        .styled-table tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .status-new {
            background-color: #FFCCCB;
            color: #000;
            padding: 4px 8px;
            border-radius: 4px;
        }

        .status-urgent {
            background-color: #F08080;
            color: #fff;
            padding: 4px 8px;
            border-radius: 4px;
        }

        .status-resolved {
            background-color: #90EE90;
            color: #000;
            padding: 4px 8px;
            border-radius: 4px;
        }

        .action-button {
            background-color: #9370DB;
            color: #fff;
            border: none;
            padding: 5px 10px;
            margin-right: 5px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 12px;
        }

        .action-button:hover {
            background-color: #6A5ACD;
        }

        .pagination a {
            margin: 0 5px;
            padding: 5px 10px;
            text-decoration: none;
            background-color: #007bff;
            color: #fff;
            border-radius: 3px;
        }

        .pagination a.active {
            font-weight: bold;
            background-color: #0056b3;
        }

    </style>


</head>
















































<body>
    <div id="notification-container"></div>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
    <!-- Start Left menu area -->
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="..\Back_office\index.html"><img class="main-logo" src="..\Back_office\img\logo\logo.png" alt="" /></a>
                <strong><a href="..\Back_office\index.html"><img src="..\Back_office\img\logo\logosn.png" alt="" /></a></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li>
                            <a class="has-arrow" href="..\Back_office\index.html">
								   <span class="educate-icon educate-home icon-wrap"></span>
								   <span class="mini-click-non">Education</span>
								</a>
                            <ul class="submenu-angle" aria-expanded="true">
                                <li><a title="Dashboard v.1" href="..\Back_office\index.html"><span class="mini-sub-pro">Dashboard</span></a></li>
                                <li><a title="Analytics" href="..\Back_office\analytics.html"><span class="mini-sub-pro">Analytics</span></a></li>
                                <li><a title="Widgets" href="..\Back_office\widgets.html"><span class="mini-sub-pro">Widgets</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a title="Landing Page" href="..\Back_office\events.html" aria-expanded="false"><span class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Event</span></a>
                        </li>
                        
                        <li class="active">
                            <a class="has-arrow" href="..\Back_office\students.php" aria-expanded="false"><span class="educate-icon educate-professor icon-wrap"></span> <span class="mini-click-non">Utilisateurs</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Students" href="..\Back_office\students.php"><span class="mini-sub-pro">All Utilisateurs</span></a></li>
                                <li><a title="Add Students" href="..\Back_office\add-student.html"><span class="mini-sub-pro">Add Utilisateur</span></a></li>
                               <!-- <li><a title="Students Profile" href="..\Back_office\sprofile.php"><span class="mini-sub-pro">Utilisateur Profile</span></a></li>-->
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="..\Back_office\all-courses.html" aria-expanded="false"><span class="educate-icon educate-course icon-wrap"></span> <span class="mini-click-non">Courses</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Courses" href="..\Back_office\all-courses.html"><span class="mini-sub-pro">All Courses</span></a></li>
                                <li><a title="Add Courses" href="..\Back_office\add-course.html"><span class="mini-sub-pro">Add Course</span></a></li>
                                <li><a title="Edit Courses" href="..\Back_office\edit-course.html"><span class="mini-sub-pro">Edit Course</span></a></li>
                                <li><a title="Courses Profile" href="..\Back_office\course-info.html"><span class="mini-sub-pro">Courses Info</span></a></li>
                                <li><a title="Course Payment" href="..\Back_office\course-payment.html"><span class="mini-sub-pro">Courses Payment</span></a></li>
                            </ul>
                        </li>
                        <!--
                        <li>
                            <a class="has-arrow" href="..\Back_office\all-courses.html" aria-expanded="false"><span class="educate-icon educate-library icon-wrap"></span> <span class="mini-click-non">Library</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Library" href="..\Back_office\library-assets.html"><span class="mini-sub-pro">Library Assets</span></a></li>
                                <li><a title="Add Library" href="..\Back_office\add-library-assets.html"><span class="mini-sub-pro">Add Library Asset</span></a></li>
                                <li><a title="Edit Library" href="..\Back_office\edit-library-assets.html"><span class="mini-sub-pro">Edit Library Asset</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="..\Back_office\all-courses.html" aria-expanded="false"><span class="educate-icon educate-department icon-wrap"></span> <span class="mini-click-non">Departments</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Departments List" href="..\Back_office\departments.html"><span class="mini-sub-pro">Departments List</span></a></li>
                                <li><a title="Add Departments" href="..\Back_office\add-department.html"><span class="mini-sub-pro">Add Departments</span></a></li>
                                <li><a title="Edit Departments" href="..\Back_office\edit-department.html"><span class="mini-sub-pro">Edit Departments</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="..\Back_office\mailbox.html" aria-expanded="false"><span class="educate-icon educate-message icon-wrap"></span> <span class="mini-click-non">Mailbox</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Inbox" href="..\Back_office\mailbox.html"><span class="mini-sub-pro">Inbox</span></a></li>
                                <li><a title="View Mail" href="..\Back_office\mailbox-view.html"><span class="mini-sub-pro">View Mail</span></a></li>
                                <li><a title="Compose Mail" href="..\Back_office\mailbox-compose.html"><span class="mini-sub-pro">Compose Mail</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="..\Back_office\mailbox.html" aria-expanded="false"><span class="educate-icon educate-interface icon-wrap"></span> <span class="mini-click-non">Interface</span></a>
                            <ul class="submenu-angle interface-mini-nb-dp" aria-expanded="false">
                                <li><a title="Google Map" href="..\Back_office\google-map.html"><span class="mini-sub-pro">Google Map</span></a></li>
                                <li><a title="Data Maps" href="..\Back_office\data-maps.html"><span class="mini-sub-pro">Data Maps</span></a></li>
                                <li><a title="Pdf Viewer" href="..\Back_office\pdf-viewer.html"><span class="mini-sub-pro">Pdf Viewer</span></a></li>
                                <li><a title="X-Editable" href="..\Back_office\x-editable.html"><span class="mini-sub-pro">X-Editable</span></a></li>
                                <li><a title="Code Editor" href="..\Back_office\code-editor.html"><span class="mini-sub-pro">Code Editor</span></a></li>
                                <li><a title="Tree View" href="..\Back_office\tree-view.html"><span class="mini-sub-pro">Tree View</span></a></li>
                                <li><a title="Preloader" href="..\Back_office\preloader.html"><span class="mini-sub-pro">Preloader</span></a></li>
                                <li><a title="Images Cropper" href="..\Back_office\images-cropper.html"><span class="mini-sub-pro">Images Cropper</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="..\Back_office\mailbox.html" aria-expanded="false"><span class="educate-icon educate-charts icon-wrap"></span> <span class="mini-click-non">Charts</span></a>
                            <ul class="submenu-angle chart-mini-nb-dp" aria-expanded="false">
                                <li><a title="Bar Charts" href="..\Back_office\bar-charts.html"><span class="mini-sub-pro">Bar Charts</span></a></li>
                                <li><a title="Line Charts" href="..\Back_office\line-charts.html"><span class="mini-sub-pro">Line Charts</span></a></li>
                                <li><a title="Area Charts" href="..\Back_office\area-charts.html"><span class="mini-sub-pro">Area Charts</span></a></li>
                                <li><a title="Rounded Charts" href="..\Back_office\rounded-chart.html"><span class="mini-sub-pro">Rounded Charts</span></a></li>
                                <li><a title="C3 Charts" href="..\Back_office\c3.html"><span class="mini-sub-pro">C3 Charts</span></a></li>
                                <li><a title="Sparkline Charts" href="..\Back_office\sparkline.html"><span class="mini-sub-pro">Sparkline Charts</span></a></li>
                                <li><a title="Peity Charts" href="..\Back_office\peity.html"><span class="mini-sub-pro">Peity Charts</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="..\Back_office\mailbox.html" aria-expanded="false"><span class="educate-icon educate-data-table icon-wrap"></span> <span class="mini-click-non">Data Tables</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Peity Charts" href="..\Back_office\static-table.html"><span class="mini-sub-pro">Static Table</span></a></li>
                                <li><a title="Data Table" href="..\Back_office\data-table.html"><span class="mini-sub-pro">Data Table</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="..\Back_office\mailbox.html" aria-expanded="false"><span class="educate-icon educate-form icon-wrap"></span> <span class="mini-click-non">Forms Elements</span></a>
                            <ul class="submenu-angle form-mini-nb-dp" aria-expanded="false">
                                <li><a title="Basic Form Elements" href="..\Back_office\basic-form-element.html"><span class="mini-sub-pro">Bc Form Elements</span></a></li>
                                <li><a title="Advance Form Elements" href="..\Back_office\advance-form-element.html"><span class="mini-sub-pro">Ad Form Elements</span></a></li>
                                <li><a title="Password Meter" href="..\Back_office\password-meter.html"><span class="mini-sub-pro">Password Meter</span></a></li>
                                <li><a title="Multi Upload" href="..\Back_office\multi-upload.html"><span class="mini-sub-pro">Multi Upload</span></a></li>
                                <li><a title="Text Editor" href="..\Back_office\tinymc.html"><span class="mini-sub-pro">Text Editor</span></a></li>
                                <li><a title="Dual List Box" href="..\Back_office\dual-list-box.html"><span class="mini-sub-pro">Dual List Box</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="..\Back_office\mailbox.html" aria-expanded="false"><span class="educate-icon educate-apps icon-wrap"></span> <span class="mini-click-non">App views</span></a>
                            <ul class="submenu-angle app-mini-nb-dp" aria-expanded="false">
                                <li><a title="Notifications" href="..\Back_office\notifications.html"><span class="mini-sub-pro">Notifications</span></a></li>
                                <li><a title="Alerts" href="..\Back_office\alerts.html"><span class="mini-sub-pro">Alerts</span></a></li>
                                <li><a title="Modals" href="..\Back_office\modals.html"><span class="mini-sub-pro">Modals</span></a></li>
                                <li><a title="Buttons" href="..\Back_office\buttons.html"><span class="mini-sub-pro">Buttons</span></a></li>
                                <li><a title="Tabs" href="..\Back_office\tabs.html"><span class="mini-sub-pro">Tabs</span></a></li>
                                <li><a title="Accordion" href="..\Back_office\accordion.html"><span class="mini-sub-pro">Accordion</span></a></li>
                            </ul>
                        </li>
                        <li id="removable">
                            <a class="has-arrow" href="#" aria-expanded="false"><span class="educate-icon educate-pages icon-wrap"></span> <span class="mini-click-non">Pages</span></a>
                            <ul class="submenu-angle page-mini-nb-dp" aria-expanded="false">
                                <li><a title="Login" href="..\Back_office\login.html"><span class="mini-sub-pro">Login</span></a></li>
                                <li><a title="Register" href="..\Back_office\register.html"><span class="mini-sub-pro">Register</span></a></li>
                                <li><a title="Lock" href="..\Back_office\lock.html"><span class="mini-sub-pro">Lock</span></a></li>
                                <li><a title="Password Recovery" href="..\Back_office\password-recovery.html"><span class="mini-sub-pro">Password Recovery</span></a></li>
                                <li><a title="404 Page" href="..\Back_office\404.html"><span class="mini-sub-pro">404 Page</span></a></li>
                                <li><a title="500 Page" href="..\Back_office\500.html"><span class="mini-sub-pro">500 Page</span></a></li>
                            </ul>
                        </li>-->
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
                        <a href="..\Back_office\index.html"><img class="main-logo" src="..\Back_office\img\logo\logo.png" alt="" /></a>
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
                                           <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn" style="background-color: #ac81f2;">
                                               <i class="educate-icon educate-nav"></i>
                                           </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12" >
                                        <div class="header-right-info" style="margin-right: 49px;" >
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu" >
                                                <li class="nav-item" >
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                            <span class="admin-name" >Admin</span>
                                                            <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                                                        </a>
                                                        
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn" >
                                                        <li ><a href="admin.php"><span class="edu-icon edu-locked author-log-ic"></span>Mon Compte</a></li>
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
                                        <li><a data-toggle="collapse" data-target="#Charts" href="#">Home <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul class="collapse dropdown-header-top">
                                                <li><a href="..\Back_office\index.html">Dashboard</a></li>
                                                <li><a href="..\Back_office\analytics.html">Analytics</a></li>
                                                <li><a href="..\Back_office\widgets.html">Widgets</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="..\Back_office\events.html">Event</a></li>
                                        
                                        <li><a data-toggle="collapse" data-target="#demopro" href="#">Utilisateurs <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demopro" class="collapse dropdown-header-top">
                                                <li><a href="..\Back_office\students.php">All Utilisateurs</a>
                                                </li>
                                                <li><a href="..\Back_office\add-student.html">Add Utilisateur</a>
                                                </li>
                                                <!--<li><a href="..\Back_office\sprofile.php">Student Profile</a>
                                                </li>-->
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


            <div style="padding: 30px 30px 30px 30px;">
                <form method="POST" action="students.php">
                    <input type="text" name="search" placeholder="Search by name or email" 
                        value="<?= isset($_SESSION['search']) ? htmlspecialchars($_SESSION['search']) : '' ?>">
                    <button type="submit">Search</button>
                </form>
            </div>

































            







        <div style="padding: 30px 30px 413px 30px;">
            <table class="styled-table">
                <thead>
                    <tr>
                        <th>
                            <form method="POST" action="students.php" style="display: inline;">
                                <input type="hidden" name="sort" value="id">
                                <input type="hidden" name="order" value="<?= (isset($_POST['order']) && $_POST['order'] === 'asc') ? 'desc' : 'asc' ?>">
                                <button type="submit" class="sort-button">Id</button>
                            </form>
                        </th>
                        <th>
                            <form method="POST" action="students.php" style="display: inline;">
                                <input type="hidden" name="sort" value="nom">
                                <input type="hidden" name="order" value="<?= (isset($_POST['order']) && $_POST['order'] === 'asc') ? 'desc' : 'asc' ?>">
                                <button type="submit" class="sort-button">Nom</button>
                            </form>
                        </th>
                        <th>
                            <form method="POST" action="students.php" style="display: inline;">
                                <input type="hidden" name="sort" value="prenom">
                                <input type="hidden" name="order" value="<?= (isset($_POST['order']) && $_POST['order'] === 'asc') ? 'desc' : 'asc' ?>">
                                <button type="submit" class="sort-button">Prénom</button>
                            </form>
                        </th>
                        <th>
                            <form method="POST" action="students.php" style="display: inline;">
                                <input type="hidden" name="sort" value="email">
                                <input type="hidden" name="order" value="<?= (isset($_POST['order']) && $_POST['order'] === 'asc') ? 'desc' : 'asc' ?>">
                                <button type="submit" class="sort-button">Email</button>
                            </form>
                        </th>
                        <th>
                            <form method="POST" action="students.php" style="display: inline;">
                                <input type="hidden" name="sort" value="tyype">
                                <input type="hidden" name="order" value="<?= (isset($_POST['order']) && $_POST['order'] === 'asc') ? 'desc' : 'asc' ?>">
                                <button type="submit" class="sort-button">Type</button>
                            </form>
                        </th>
                        <th>
                            Status
                        </th>
                        <th>
                            <form method="POST" action="students.php" style="display: inline;">
                                <input type="hidden" name="sort" value="date_mise">
                                <input type="hidden" name="order" value="<?= (isset($_POST['order']) && $_POST['order'] === 'asc') ? 'desc' : 'asc' ?>">
                                <button type="submit" class="sort-button">Date</button>
                            </form>
                        </th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>       
                    <?php foreach ($list as $user): ?>
                        <?php
                        // Fetch user activities
                        $userActivities = $utilisateur->getUserActivityDetailsByUser($user['id']); 
                        ?>
                        <tr>
                            <td><?= htmlspecialchars($user['id']) ?></td>
                            <td><?= htmlspecialchars($user['nom']) ?></td>
                            <td><?= htmlspecialchars($user['prenom']) ?></td>
                            <td><?= htmlspecialchars($user['email']) ?></td>
                            <td><?= htmlspecialchars($user['tyype']) ?></td>
                            <td>
                                <?php 
                                // Display status of activities
                                if (!empty($userActivities)) {
                                    foreach ($userActivities as $activity) {
                                        echo htmlspecialchars($activity['status']) . "<br>";
                                    }
                                } else {
                                    echo "No activities";
                                }
                                ?>
                            </td>
                            <td><?= htmlspecialchars($user['date_mise']) ?></td>
                            <td>
                                <!-- Afficher Button -->
                                <form method="POST" action="sprofile.php">
                                    <input type="hidden" name="email" value="<?= htmlspecialchars($user['email']) ?>">
                                    <button type="submit" class="action-button" style="width: 80px;">Afficher</button>
                                </form>

                                <!-- Block Form -->
                                <form action="delete.php" method="POST" style="display: inline;">
                                    <input type="hidden" name="email" value="<?= htmlspecialchars($user['email']) ?>">
                                    <button type="submit" class="action-button" style="width: 80px;">Delete</button>
                                </form>

                                <form action="show.php" method="POST" style="display: inline;">
                                    <input type="hidden" name="email" value="<?= htmlspecialchars($user['email']) ?>">
                                    <button type="submit" class="action-button" style="width: 80px;">Show</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>

                </tbody>
        </div>

        <div class="pagination">
                            <?php if ($page > 1): ?>
                                <form method="POST" action="students.php" style="display: inline;">
                                    <input type="hidden" name="page" value="<?= $page - 1 ?>">
                                    <input type="hidden" name="sort" value="<?= $sort ?>">
                                    <input type="hidden" name="order" value="<?= $order ?>">
                                    <input type="hidden" name="search" value="<?= htmlspecialchars($search) ?>">
                                    <button type="submit">Previous</button>
                                </form>
                            <?php endif; ?>

                            <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                                <form method="POST" action="students.php" style="display: inline;">
                                    <input type="hidden" name="page" value="<?= $i ?>">
                                    <input type="hidden" name="sort" value="<?= $sort ?>">
                                    <input type="hidden" name="order" value="<?= $order ?>">
                                    <input type="hidden" name="search" value="<?= htmlspecialchars($search) ?>">
                                    <button type="submit" class="<?= $i === $page ? 'active' : '' ?>"><?= $i ?></button>
                                </form>
                            <?php endfor; ?>

                            <?php if ($page < $totalPages): ?>
                            <form method="POST" action="students.php" style="display: inline;">
                                <input type="hidden" name="page" value="<?= $page + 1 ?>">
                                <input type="hidden" name="sort" value="<?= $sort ?>">
                                <input type="hidden" name="order" value="<?= $order ?>">
                                <input type="hidden" name="search" value="<?= htmlspecialchars($search) ?>">
                                <button type="submit">Next</button>
                            </form>
                        <?php endif; ?>
            </div>


























        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right" >
                            <p>Questerra</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <script src="script.js"></script>
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