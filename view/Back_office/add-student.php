<?php
require '..\..\config.php';
require_once '../../model/Formulaire.php';
include_once '../../Controller/FormulaireC.php';
include_once '../../Controller/NotificationC.php';
//imen
require_once '../../model/article.php';
require_once '../../model/commentaire.php';
include_once '../../Controller/ArticleC.php';
include_once '../../Controller/CommentaireC.php';

session_start();
$c=new FormulaireC();
$notif=new NotificationC();
$all_notifs_any=$notif->showNotifAdmin();
$all_notifs=$notif->showNotifAdminUnseen();

?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Student | Questerra Admin</title>
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
            color: #ffd891; /* Couleur au survol */
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
            background-color: #ffd891;
        }
       
        .single-pro-review-area {
            padding: 10px 10px 20px 170px;
            
           
            
            
        }

        .product-payment-inner-st {
            align-items: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 120px;
            background-color: #fff;
            border-radius: 8px;
        }

        .btn {
            margin: 10px;
        }
        


    </style>
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
            color: #ffd891; /* Couleur au survol */
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

    </style>

    <!--------------Css l page ------------------>
    <style>
        /* General Container and Section */
.single-pro-review-area {
    margin-top: 30px;
    margin-bottom: 15px;
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
}

.product-payment-inner-st {
    background-color: #fff;
    border-radius: 12px;
    padding: 30px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

h3 {
    font-size: 28px;
    color: #ac81f2;
    margin-bottom: 20px;
    text-align: center;
    font-weight: bold;
}

/* Form Group Styling */
.form-group {
    margin-bottom: 20px;
}

.form-group input[type="text"],
.form-group input[type="email"],
.form-group input[type="tel"],
.form-group input[type="password"],
.form-group input[type="date"] {
    width: 100%;
    padding: 12px;
    font-size: 16px;
    color: #333;
    background-color: #f3f3f3;
    border: 1px solid #ccc;
    border-radius: 8px;
    transition: border-color 0.3s ease, box-shadow 0.3s ease;
}

.form-group input:focus {
    outline: none;
    border-color: #ac81f2;
    box-shadow: 0 0 5px rgba(172, 129, 242, 0.5);
}

/* Radio Buttons */
.form-group label {
    font-size: 16px;
    font-weight: bold;
    color: #5a32a3;
}

.form-group input[type="radio"] {
    margin-left: 10px;
    transform: scale(1.2);
    vertical-align: middle;
}

/* Buttons */
button[type="submit"] {
    background-color: #ac81f2;
    color: white;
    border: none;
    padding: 12px 25px;
    font-size: 18px;
    font-weight: bold;
    border-radius: 8px;
    cursor: pointer;
    transition: all 0.3s ease;
}

button[type="submit"]:hover {
    background-color: #ffd891;
    color: #5a32a3;
    transform: translateY(-2px);
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.15);
}

/* Form Layout Spacing */
.row {
    margin-right: 0;
    margin-left: 0;
}

.col-md-6 {
    padding: 0 15px;
}

.mt-3 {
    margin-top: 30px;
}

/* Responsive Behavior */
@media (max-width: 768px) {
    .product-payment-inner-st {
        padding: 20px;
    }

    h3 {
        font-size: 24px;
    }

    button[type="submit"] {
        font-size: 16px;
        padding: 10px 20px;
    }
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
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                            <form role="search" class="sr-input-func">
                                                <input type="text" placeholder="Search..." class="search-int form-control">
                                                <a href="#"><i class="fa fa-search"></i></a>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="index.php">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">User</span>
                                            </li>
                                        </ul>
                                    </div>

            <div class="single-pro-review-area mt-t-30 mg-b-15">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-lg-10 col-md-12">
                            <div class="product-payment-inner-st res-mg-t-30 analysis-progrebar-ctn">
                                <h3 style="color: #ac81f2; padding-bottom: 30px; text-align: center;">Add Utilisateur</h3>
                                <div class="review-content-section">
                                    <form action="add1.php" method="POST" enctype="multipart/form-data" onsubmit="return verif77()">
                                        <div class="row">
                                            <div class="col-md-6" style="padding-bottom: 10px; padding-top: 7px;">
                                                <!-- Last Name -->
                                                <div class="form-group">
                                                    <input id="loglastname" name="loglastname" type="text" class="form-control" placeholder="Nom" >
                                                </div>
                                                <!-- First Name -->
                                                <div class="form-group">
                                                    <input id="logname" name="logname" type="text" class="form-control" placeholder="Prénom" >
                                                </div>
                                                <!-- Phone Number -->
                                                <div class="form-group">
                                                    <input id="logtel" name="logtel" type="tel" class="form-control" placeholder="Numéro de Téléphone" >
                                                </div>
                                                <!-- Email -->
                                                <div class="form-group">
                                                    <input id="logemail" name="logemail" type="email" class="form-control" placeholder="Email" >
                                                </div>
                                                <!-- Password -->
                                                <div class="form-group">
                                                    <input id="logpass" name="logpass" type="password" class="form-control" placeholder="Mot De Passe" >
                                                </div>
                                                <!-- File Upload -->
                                                
                                            </div>
                                            
                                            <div class="col-md-6" style="padding-bottom: 10px;">
                                                
                                                <div class="form-group" style="padding-left: 5  0px;">
                                                    <label>Etudiant</label>
                                                    <input id="etu" name="logtype" type="radio" class=""  value="Etudiant">
                                                    <label style="padding-left: 20px;">Professor</label>
                                                    <input id="pro" name="logtype" type="radio" class="" value="Professeur">
                                                    <label style="padding-left: 20px;">Admin</label>
                                                    <input id="admin" name="logtype" type="radio" class=""  value="Admin">
                                                </div>
                                                <!-- Date of Birth -->
                                                <div class="form-group">
                                                    <label>Date De Naissance</label>
                                                    <input id="logdate1" name="logdate1" type="date" class="form-control" >
                                                </div>
                                                <!-- Interview Date -->
                                                <div class="form-group">
                                                    <label>Date d'Entretien</label>
                                                    <input id="logdate2" name="logdate2" type="date" class="form-control" >
                                                </div>
                                                <!-- Enrollment Date -->
                                                <div class="form-group">
                                                    <label>Date D'Inscription</label>
                                                    <input id="logdate3" name="logdate3" type="date" class="form-control" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col text-center">
                                                <button type="submit" class="btn btn-primary" style="background-color: #ac81f2;">Add</button>
                                            </div>
                                        </div>
                                    </form>    
                                </div>
                            </div>
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
        console.log("hellodsq")
        function showStyledAlert(message) {
            const container = document.getElementById('notification-container');
            
            // Create the alert element
            const alertBox = document.createElement('div');
            alertBox.style.padding = '15px 20px';
            alertBox.style.marginBottom = '10px';
            alertBox.style.borderRadius = '8px';
            alertBox.style.backgroundColor = '#ac81f2';
            alertBox.style.color = '#F6F4F9';
            alertBox.style.boxShadow = '0 4px 8px rgba(0, 0, 0, 0.2)';
            alertBox.style.fontWeight = '600';
            alertBox.style.fontSize = '14px';
            alertBox.style.transition = 'opacity 0.5s ease';
            alertBox.textContent = message;

            // Add the alert to the container
            container.appendChild(alertBox);

            // Auto-dismiss the alert after 3 seconds
            setTimeout(() => {
                alertBox.style.opacity = '0';
                setTimeout(() => container.removeChild(alertBox), 500); // Wait for the fade-out transition
            }, 3000);
        }
        function verif77(){
            // Input fields
            const prenom = document.getElementById("logname");
            const nom = document.getElementById("loglastname");
            const dateNaissance = document.getElementById("logdate1");
            const dateEntretien = document.getElementById("logdate2");
            const dateInscription = document.getElementById("logdate3");
            const tel = document.getElementById("logtel");
            const email = document.getElementById("logemail");
            const motDePasse = document.getElementById("logpass");
            const logtypeRadios = document.getElementsByName("logtype");

            // Regex
            const nameRegex = /^([A-Z][a-z]{0,29})(\s[A-Z][a-z]{0,29})*$/; // Each word starts with uppercase, followed by lowercase, max 30 chars.
            const telRegex = /^\d{8}$/;
            const emailRegex = /^[a-z0-9]+@gmail\.com$/; // Only lowercase letters and numbers allowed.
            const passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,30}$/; // Max 30 characters.

            // Validation
            if (!nom.value.match(nameRegex) || nom.value.length > 30) {
                showStyledAlert("Le nom doit commencer par une majuscule, suivi de lettres minuscules, peut contenir des noms multiples séparés par des espaces, et avoir une longueur maximale de 30 caractères.");
                return false;
            }

            if (!prenom.value.match(nameRegex) || prenom.value.length > 30) {
                showStyledAlert("Le prénom doit commencer par une majuscule, suivi de lettres minuscules, peut contenir des noms multiples séparés par des espaces, et avoir une longueur maximale de 30 caractères.");
                return false;
            }

            if (!tel.value.match(telRegex)) {
                showStyledAlert("Le numéro de téléphone doit contenir exactement 8 chiffres.");
                return false;
            }

            if (!email.value.match(emailRegex) || email.value.length > 30) {
                showStyledAlert("L'email doit contenir uniquement des lettres minuscules et des chiffres, se terminer par '@gmail.com', et avoir une longueur maximale de 30 caractères.");
                return false;
            }

            if (!motDePasse.value.match(passwordRegex)) {
                showStyledAlert("Le mot de passe doit contenir au moins 8 caractères, une lettre majuscule, une lettre minuscule, un chiffre, un symbole, et avoir une longueur maximale de 30 caractères.");
                return false;
            }

            // Check if one of the radio buttons (logtype) is selected
            let selectedType = null;
            logtypeRadios.forEach((radio) => {
                if (radio.checked) {
                    selectedType = radio.value;
                }
            });

            if (!selectedType) {
                showStyledAlert("Vous devez sélectionner un type (Professeur ou Étudiant ou Admin).");
                return false;
            }

            if (!dateNaissance.value) {
                showStyledAlert("La date de naissance est obligatoire.");
                return false;
            }

            if (!dateEntretien.value) {
                showStyledAlert("La date de entretien est obligatoire.");
                return false;
            }

            if (!dateInscription.value) {
                showStyledAlert("La date d'inscription est obligatoire.");
                return false;
            }

            return true;
        }
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