<?php
require '../../config.php';
require_once '../../model/Formulaire.php';
include_once '../../Controller/FormulaireC.php';
session_start();
$id=$_GET['id']; 
$c=new FormulaireC();
$complaints=$c->showComplaintbycomplaint($id) ;

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complaint Management</title>
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
    <link rel="stylesheet" href="../Back_Office/css/responsive.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

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
</head>
<body>
    <!-- Start Left menu area -->
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="../Back_Office/index2.php"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                <strong><a href="../Back_Office/index2.php"><img src="img/logo/logosn.png" alt="" /></a></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
               ```html
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li class="active">
                            <a class="has-arrow" href="../Back_Office/index2.php">
                                <span class="educate-icon educate-home icon-wrap"></span>
                                <span class="mini-click-non">Education</span>
                            </a>
                            <ul class="submenu-angle" aria-expanded="true">
                                <li><a title="Analytics" href="analytics.html"><span class="mini-sub-pro">Analytique</span></a></li>
                                <li><a title="Widgets" href="widgets.html"><span class="mini-sub-pro">Widgets</span></a></li>
                            </ul>
                        </li>
                        
                        <li>
                            <a title="Courses" href="courses.html" aria-expanded="false"><span class="educate-icon educate-course icon-wrap"></span> <span class="mini-click-non">Courses</span></a>
                        </li>
                        <li>
                            <a title="Students" href="students.html" aria-expanded="false"><span class="educate-icon educate-student icon-wrap"></span> <span class="mini-click-non">Students</span></a>
                        </li>
                       
                        <li>
                            <a title="Reclamation" href="../Back_Office/REC_FORMBack_Office.html" aria-expanded="false"><span class="educate-icon educate-interface icon-wrap"></span> <span class="mini-click-non">Complaints</span></a>
                        </li>
                        <li>
                            <a title="Blog" href="gestion_blog.php" aria-expanded="false"><span class="educate-icon educate-interface icon-wrap"></span> <span class="mini-click-non">Blog</span></a>
                        </li>
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
                                <li><a title="Inbox" href="mailbox.html"><span class="mini-sub-pro">Inbox</a></li>
                                </a></li>
                                <li><a title="View Mail" href="mailbox-view.html"><span class="mini-sub-pro">Show All Emails</span></a></li>
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
                        <a href="index2.php"><img class="main-logo" src="../Back_Office/img/logo/logo.png" alt="" /></a>
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
 <!-- Start JS pour le leftmenu de l'acceuil-->
 <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/main.js"></script>
    <script>
        $(document).ready(function() {
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
    <!-- End JS -->
</body>
</html>