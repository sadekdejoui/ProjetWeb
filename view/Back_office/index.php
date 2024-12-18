<?php

require_once '../../model/Formulaire.php';
include_once '../../Controller/FormulaireC.php';
include_once '../../Controller/NotificationC.php';
//imen
require_once '../../model/article.php';
require_once '../../model/commentaire.php';
include_once '../../Controller/ArticleC.php';
include_once '../../Controller/CommentaireC.php';
require '../../controller/user_controller.php'; 

session_start();
if(!isset($_SESSION['email'])){
    header("Location: http://localhost/Projet%20Web/view/Front-office/login.html");
    exit();
}
$c=new FormulaireC();
$notif=new NotificationC();
$all_notifs_any=$notif->showNotifAdmin();
$all_notifs=$notif->showNotifAdminUnseen();

$utilisateur = new utilisateur_controller();

$students = $utilisateur->countStudents();
$students1 = $utilisateur->countStudents2();
$students2 = $utilisateur->countStudents3();






?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>BackOffice Questerra</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/educate-custon-icon.css">
    <link rel="stylesheet" href="css/morrisjs/morris.css">
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
    <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">


   

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
    </style>
    <style>
        #notificationsModal {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: white;
    padding: 20px;
    border: 1px solid #ccc;
    z-index: 1000;
    display: none; /* Initially hidden */
}

.modal-content {
    max-width: 500px;
    margin: 0 auto;
}

#notificationsModal.active {
    display: block;
}
/* Modal Overlay */
.modal {
    display: none; /* Hidden by default */
    position: fixed;
    z-index: 1000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.5); /* Black background with transparency */
}

/* Modal Content */
.modal-content {
    background-color: #f9f9f9;
    margin: 15% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 50%;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
    border-radius: 10px;
    animation: fadeIn 0.3s;
}

/* Close Button */
.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
    cursor: pointer;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}

/* Animations */
@keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}
        #notification-container {
            position: fixed;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 9999;
            text-align: center;
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
                            <a class="has-arrow" href="index.php">
                                <span class="educate-icon educate-home icon-wrap"></span>
                                <span class="mini-click-non">EducationMPLOKI</span>
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
                            <a class="has-arrow" href="..\Back_office\students.php" aria-expanded="false"><span class="educate-icon educate-professor icon-wrap"></span> <span class="mini-click-non">Users</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Students" href="..\Back_office\students.php"><span class="mini-sub-pro">All Users</span></a></li>
                                <li><a title="Add Students" href="..\Back_office\add-student.php"><span class="mini-sub-pro">Add User</span></a></li>
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
                                <li><a title="All Forums" href="index3.php?action=index"><span class="mini-sub-pro">Tous les forums</span></a></li>
                                <li><a title="Create Forum" href="index3.php?action=create"><span class="mini-sub-pro">Créer un forum</span></a></li>
                                <li><a title="Create Forum" href="index3.php?action=indexr"><span class="mini-sub-pro">tous les reponses</span></a></li>
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
                                                <li><a href="index.php">Events</a></li>
                                                
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
            
        </div>
        <div class="analytics-sparkle-area">
            <div class="container-fluid">
                <div class="row" style="margin-top: 30px">
<!------------------------------------- Cours Actifs Box --------------------------------->
                    <div class="col-md-6 col-lg-4">
                        <div class="stat-card box">
                            <h5>Admin</h5>
                            <p><strong>Total :</strong> <?php echo $students1; ?></p>
                         
                            <a href="students.php" class="btn btn-info w-100">Management</a>
                        </div>
                    </div>
                    <!-- Étudiants Inscrits Box -->
                    <div class="col-md-6 col-lg-4">
                        <div class="stat-card box">
                            <h5>Students</h5>
                            <p><strong>Total :</strong> <?php echo $students; ?></p>
                           
                            <a href="students.php" class="btn btn-info w-100">Management</a>
                        </div>
                    </div>
                    <!-- Professeurs Box -->
                    <div class="col-md-6 col-lg-4">
                        <div class="stat-card box">
                            <h5>Professors</h5>
                            <p><strong>Total :</strong> <?php echo $students2; ?></p>
                            
                            <a href="students.php" class="btn btn-info w-100">Management</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        
        <div class="product-sales-area mg-tb-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <!-------- notifications modal-------------->
                 <!-- Modal -->
<div id="myModal" class="modal" style="display: none;">
    <div class="modal-content" style="width: 80%; margin: auto; padding: 20px; border-radius: 10px; background-color: #fff; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
        <span class="close" style="float: right; font-size: 20px; cursor: pointer;">&times;</span>
        <h3 style="text-align: center;">Notifications</h3>

        <!-- Notification List -->
        <div id="complaintDetails" style="margin-top: 20px; max-height: 400px; overflow-y: auto;">
            <!-- Notifications will be dynamically inserted here -->
            <p>Loading notifications...</p>
        </div>

        <!-- Close Button -->
        <div style="text-align: center; margin-top: 20px;">
            <button id="closeModalBtn" style="background-color: #ac81f2; color: white; border: none; padding: 10px 15px; border-radius: 5px; cursor: pointer;">
                <i class="fa fa-check" style="margin-right: 5px;"></i> Close
            </button>
        </div>
    </div>
</div>

                        <!-------- notifications modal-------------->

<!----------------------------------Complaint Chart----------------------------->
<h2 style="text-align: center;">Complaint Statistics</h2>
<div style="display: flex; justify-content: center; align-items: center; height: 100vh;">
    <!-- Adjusted canvas size -->
    <canvas id="complaintChart" width="500" height="500"></canvas> 
</div>




                  
           
        </div>
        <div class="traffic-analysis-area" style="margin-top: 110px">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="social-media-edu">
                            <i class="fa fa-facebook"></i>
                            <div class="social-edu-ctn">
                                <h3><br>20K Like Mentions</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="social-media-edu twitter-cl res-mg-t-30 table-mg-t-pro-n">
                            <i class="fa fa-twitter"></i>
                            <div class="social-edu-ctn">
                                <h3><br>10k Followers</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="social-media-edu linkedin-cl res-mg-t-30 res-tablet-mg-t-30 dk-res-t-pro-30">
                            <i class="fa fa-linkedin"></i>
                            <div class="social-edu-ctn">
                                <h3><br>7k Relations</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="social-media-edu youtube-cl res-mg-t-30 res-tablet-mg-t-30 dk-res-t-pro-30">
                            <i class="fa fa-youtube"></i>
                            <div class="social-edu-ctn">
                                <h3><br>50k Followers</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="library-book-area mg-t-30" style="margin-left: 200px">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="single-cards-item">
                            <div class="single-product-image">
                                <a href="#"><img src="img/product/profile-bg.jpg" alt=""></a>
                            </div>
                            <div class="single-product-text">
                                <img src="img/imen2.jfif" alt="">
                                <h4><a class="cards-hd-dn" href="#">Imen Goutali</a></h4>
                                <h5>Concepteur et développeur Web</h5>
                                
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                        <div class="cards-dtn">
                                            <h3><span class="counter">199</span></h3>
                                            <p>Articles</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                        <div class="cards-dtn">
                                            <h3><span class="counter">599</span></h3>
                                            <p>Like</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                        <div class="cards-dtn">
                                            <h3><span class="counter">399</span></h3>
                                            <p>Comments</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="single-review-st-item res-mg-t-30 table-mg-t-pro-n">
                            <div class="single-review-st-hd">
                                <h2>Review</h2>
                            </div>
                            <div class="single-review-st-text">
                                <img src="img/imen2.jfif" alt="">
                                <div class="review-ctn-hf">
                                    <h3>Imen Goutali</h3>
                                    <p>Je recommande vivement</p>
                                </div>
                                <div class="review-item-rating">
                                    <i class="educate-icon educate-star"></i>
                                    <i class="educate-icon educate-star"></i>
                                    <i class="educate-icon educate-star"></i>
                                    <i class="educate-icon educate-star"></i>
                                    <i class="educate-icon educate-star-half"></i>
                                </div>
                            </div>
                            <div class="single-review-st-text">
                                <img src="img/sadek.jpg" alt="">
                                <div class="review-ctn-hf">
                                    <h3>Mohamed Sadek Déjoui</h3>
                                    <p>Super pro</p>
                                </div>
                                <div class="review-item-rating">
                                    <i class="educate-icon educate-star"></i>
                                    <i class="educate-icon educate-star"></i>
                                    <i class="educate-icon educate-star"></i>
                                    <i class="educate-icon educate-star"></i>
                                    <i class="educate-icon educate-star-half"></i>
                                </div>
                            </div>
                            <div class="single-review-st-text">
                                <img src="img/malek.jpg" alt="">
                                <div class="review-ctn-hf">
                                    <h3>Malek Ben Rejab</h3>
                                    <p>Excellent site Web</p>
                                </div>
                                <div class="review-item-rating">
                                    <i class="educate-icon educate-star"></i>
                                    <i class="educate-icon educate-star"></i>
                                    <i class="educate-icon educate-star"></i>
                                    <i class="educate-icon educate-star"></i>
                                    <i class="educate-icon educate-star-half"></i>
                                </div>
                            </div>
                            <div class="single-review-st-text">
                                <img src="img/chahed.jpg" alt="">
                                <div class="review-ctn-hf">
                                    <h3>Chahd Bekir</h3>
                                    <p>C'est bien</p>
                                </div>
                                <div class="review-item-rating">
                                    <i class="educate-icon educate-star"></i>
                                    <i class="educate-icon educate-star"></i>
                                    <i class="educate-icon educate-star"></i>
                                    <i class="educate-icon educate-star"></i>
                                    <i class="educate-icon educate-star-half"></i>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="product-sales-area mg-tb-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-sales-chart">
                            <div class="portlet-title">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" sty>
                                    <h1 style="text-align: center;text-color: white">Admission Statistics</h1>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="actions graph-rp actions-graph-rp">
                                             
                                            <a href="#" class="btn btn-dark btn-circle active tip-top" data-toggle="tooltip" title="Refresh">
                                                    <i class="fa fa-reply" aria-hidden="true"></i>
                                                </a>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                               
                                <canvas id="activityChart"></canvas>
                            </div>  
                            
                            
                            <?php
                                // Fetch activity counts (you can set the start and end date dynamically)
                                $startDate = '2024-01-01'; // Example: start date
                                $endDate = '2024-12-31';   // Example: end date
                                $userActivity = new utilisateur_controller();
                                $activityData = $userActivity->getUserActivityCount($startDate, $endDate);

                                // Prepare data for the chart
                                $labels = [];
                                $data = [];
                             
                                foreach ($activityData as $activity) {
                                    $labels[] = $activity['action'];
                                    $data[] = $activity['count'];
                                    
                                }
                               
                            ?>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        
                    </div>
                </div>
            </div>
        </div>
        
         <!---------------Copyright-------------------->
         <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>Copyright © 2024. All rights reserved. Template by <a href="#">Questerra</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        console.log("Hello World");
        // Prepare the data for Chart.js
        const labels = <?php echo json_encode($labels); ?>;
        const data = <?php echo json_encode($data); ?>;
        console.log("Hello World");
        // Create the chart
        console.log("Hello World");
        const ctx = document.getElementById('activityChart').getContext('2d');
        console.log("Hello World");
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
        console.log("Hello World");
        
    

   // Open Modal on Button Click
// Open Modal on Button Click
document.querySelectorAll('.openNotificationPopup').forEach(button => { 
    button.addEventListener('click', function () {
        const modal = document.getElementById('notificationModal');
        modal.style.display = 'block'; // Show the modal

        // Fetch notifications and populate the modal
        fetch('fetch_notifFRONT.php')
            .then(response => response.json())
            .then(data => {
                console.log(data);
                const detailsDiv = document.getElementById('notificationDetails');
                if (data.length > 0) {
                    detailsDiv.innerHTML = data.map(notification => `
                        <div style="border: 1px solid #ddd; padding: 10px; margin-bottom: 10px;">
                            <p><strong>Complaint:</strong> ${notification.contenu}</p>
                            
                            <a href="ComplaintResponse.php?id=${notification.id_notif}" style="text-decoration: none;">
                                <button style="background-color: #ac81f2; color: white; border: none; padding: 5px 10px; border-radius: 5px; cursor: pointer;">
                                    View Details
                                </button>
                            </a>
                        </div>
                    `).join('');
                } else {
                    detailsDiv.innerHTML = '<p>No notifications available.</p>';
                }
            })
            .catch(error => {
                console.error('Error:', error);
                document.getElementById('notificationDetails').innerHTML = '<p>Error fetching notifications.</p>';
            });
    });
});


// Close Modal Functionality
document.querySelector('.close').addEventListener('click', () => {
    document.getElementById('myModal').style.display = 'none';
});

document.getElementById('closeModalBtn').addEventListener('click', () => {
    document.getElementById('myModal').style.display = 'none';
});

// Optional: Close modal when clicking outside the modal content
window.addEventListener('click', (event) => {
    const modal = document.getElementById('myModal');
    if (event.target === modal) {
        modal.style.display = 'none';
    }
});



    </script>

<script>
    const ctx2 = document.getElementById('complaintChart').getContext('2d');

    // Fetch data from the backend
    fetch('getComplaintData.php') // Replace with your PHP script's path
        .then(response => response.json())
        .then(data => {
            // Predefined color palette
            const colorPalette = [
                '#007bff', // Blue
                '#ffc107', // Yellow
                '#dc3545', // Red
                '#28a745', // Green
                '#6f42c1', // Purple
                '#e83e8c', // Pink
                '#fd7e14', // Orange
                '#20c997', // Teal
            ];

            // Map the labels to colors
            const colors = data.labels.map((_, index) => colorPalette[index % colorPalette.length]);

            new Chart(ctx2, {
                type: 'doughnut', // Donut chart
                data: {
                    labels: data.labels, // Dynamic labels from backend
                    datasets: [{
                        data: data.counts, // Dynamic counts from backend
                        backgroundColor: colors, // Dynamic colors based on complaint types
                    }]
                },
                options: {
                    responsive: true, // Makes the chart resize dynamically
                    maintainAspectRatio: false, // Allows it to stretch to fill its container
                    plugins: {
                        legend: { position: 'right' } // Legend position
                    },
                    cutout: '0%' // Adjust donut hole size
                }
            });
        })
        .catch(error => console.error('Error fetching data:', error));
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
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <!-- tawk chat JS
		============================================ -->
    <script src="js/tawk-chat.js"></script>

    <!-------------scipt el modal taa notif----------->
     
    
    
</body>

</html>