<?php
    session_start();
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
    $utilisateur = new utilisateur_controller(); 
    $email = $_SESSION['email'];
    $list = $utilisateur->showUser($email);
    $imageData = $utilisateur->getUserPhotoByEmail($email);

    if(!isset($_SESSION['email'])){
        header("Location: http://localhost/Projet%20Web/view/Front-office/login.html");
        exit();
    }

    // Initialize the image source (base64-encoded) for displaying in HTML
    $imageSrc = '';

    if ($imageData) {
        // Get the image information using getimagesizefromstring
        $imageInfo = getimagesizefromstring($imageData);

        if ($imageInfo) {
            // Determine the appropriate image type based on the image data
            switch ($imageInfo['mime']) {
                case 'image/jpeg':
                    $imageType = 'image/jpeg';
                    break;
                case 'image/png':
                    $imageType = 'image/png';
                    break;
                case 'image/gif':
                    $imageType = 'image/gif';
                    break;
                default:
                    $imageType = 'image/jpeg';  // Default to JPEG if type is unknown
                    break;
            }

            // Encode the binary data to base64 to embed it in an HTML tag
            $base64Image = base64_encode($imageData);

            // Create a data URL for the image
            $imageSrc = 'data:' . $imageType . ';base64,' . $base64Image;
        }
    }
    
   
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





























        
        <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        
                        <div class="profile-info-inner">
                            <?php if ($imageSrc): ?>
                                <img src="<?php echo $imageSrc; ?>" alt="Profile Photo" class="card-img-top">
                            <?php else: ?>
                                <p>No profile photo available.</p>
                            <?php endif; ?>
                           
                        <div class="card-body">
                            <center>
                                <h5 class="card-title" style="font-family: 'Pacifico', cursive; font-weight: bold; margin-top: 20px; color: #ac81f2;">
                                    <?php echo $list['prenom']." ".$list['nom']; ?>
                                </h5>
                            </center>
                            <p class="card-text">Phone: <?php echo $list['tel']; ?></p>
                            <p>Email: <?php echo $list['email']; ?></p>
                            <p>Password: *********</p>
                            <p>Date De Naissance: <?php echo $list['date_nai']; ?></p>
                            <p>Date De Dernière Mise à Jour: <?php echo $list['date_mise']; ?></p>
                        </div>
                        </div>
                        
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <div class="product-payment-inner-st res-mg-t-30 analysis-progrebar-ctn">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li>
                                    <a href="#description" style="color: #ac81f2 !important; text-decoration: none !important;">Update Details</a>
                                </li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit st-prf-pro">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <form action="update2.php" method="POST" class="" onsubmit="return verif2()" enctype="multipart/form-data">
                                                <div class="review-content-section">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <input id="loglastname" name="loglastname" type="text" class="form-control" placeholder="Nom">
                                                            </div>
                                                            <div class="form-group">
                                                                <input id="logname"  name="logname" type="text" class="form-control" placeholder="Prénom">  
                                                            </div>
                                                            <div class="form-group">
                                                                <input id="logtel"  name="logtel"type="tel" class="form-control" placeholder="Numéro de Téléphone">
                                                            </div>
                                                           
                                                        </div>
                                                        <div class="col-lg-6" >
                                                            <div class="form-group">
                                                                <input id="logpass" name="logpass" type="password" class="form-control" placeholder="Mot De Passe">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="prenom" class="form-label">Date De Naissance</label>
                                                                <input id="logdate1" name="logdate1" type="date" class="form-control">
                                                            </div>
                                                            <div class="file-upload-inner ts-forms">
                                                                <div class="input prepend-big-btn">
                                                                    <label class="icon-right" for="prepend-big-btn" style="margin-top: 4px;">
                                                                            <i class="fa fa-download"></i>
                                                                    </label>
                                                                    <div class="file-button" style="background-color: #ac81f2; border-color: #ac81f2; border: 1px solid #ac81f2;">
                                                                        <input type="file" id="logphoto" name="logphoto" onchange="document.getElementById('prepend-big-btn').value = this.value;" style="background-color: #ac81f2; border-color: #ac81f2; border: 1px solid #ac81f2;">
                                                                        Browse
                                                                    </div>
                                                                    <input type="text" id="prepend-big-btn" placeholder="no file selected">
                                                                </div>
                                                            </div>
                                                            
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="payment-adress mg-t-15">
                                        
                                                            <button type="submit" class="btn btn-primary" style="background-color: #ac81f2; border: 1px solid #ac81f2; margin: 10px;">Update</button>

                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>























        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right" >
                            <p>Copyright © 2024. All rights reserved. Template by <a href="#">Questerra</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <script>
        function showStyledAlert2(message) {
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

        function verif2() {
            // Input fields
            const nom = document.getElementById("loglastname");
            const prenom = document.getElementById("logname");
            const dateNaissance = document.getElementById("logdate1");
            const tel = document.getElementById("logtel");
            const motDePasse = document.getElementById("logpass");
            const email = document.getElementById("logemail");
            const photo = document.getElementById("logphoto");

            // Regular expressions
            const nameRegex = /^([A-Z][a-z]{0,29})(\s[A-Z][a-z]{0,29})*$/; // Each word starts with uppercase, followed by lowercase, max 30 chars.
            const telRegex = /^\d{8}$/;
            const passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,30}$/; // Max 30 characters.

            // Arrays to store messages
            let errors = [];
            let updates = [];

            // Validate fields
            if (prenom.value.trim()) {
                if (!prenom.value.match(nameRegex) || prenom.value.length > 30) {
                    errors.push("Le prénom doit être alphabétique, non vide et avoir une longueur maximale de 30 caractères.");
                } else {
                    updates.push("Le prénom est valide.");
                }
            }

            if (nom.value.trim()) {
                if (!nom.value.match(nameRegex) || nom.value.length > 30) {
                    errors.push("Le nom doit être alphabétique, non vide et avoir une longueur maximale de 30 caractères.");
                } else {
                    updates.push("Le nom est valide.");
                }
            }

            if (tel.value.trim()) {
                if (!tel.value.match(telRegex)) {
                    errors.push("Le numéro de téléphone doit contenir exactement 8 chiffres.");
                } else {
                    updates.push("Le numéro de téléphone est valide.");
                }
            }

            if (motDePasse.value.trim()) {
                if (!motDePasse.value.match(passwordRegex)) {
                    errors.push(
                        "Le mot de passe doit contenir au moins 8 caractères, une lettre majuscule, une lettre minuscule, un chiffre et un symbole."
                    );
                } else {
                    updates.push("Le mot de passe est valide.");
                }
            }
                
            if (dateNaissance.value.trim()) {
                updates.push("La Date de naissance est valide.");
            }

            if (photo.value.trim()) {
                const photoValue = photo.value.toLowerCase();
                if (!photoValue.endsWith(".png") && !photoValue.endsWith(".jpeg") && !photoValue.endsWith(".jpg")) {
                    errors.push("La photo doit être au format .png ou .jpeg.");
                } else {
                    updates.push("La photo est valide.");
                }
            }            

            // Display errors or success messages
            if (errors.length > 0) {
                showStyledAlert2("Erreur(s):\n" + errors.join("\n"));
                return false;
            }
                
            // Check if no fields were updated
            if (updates.length === 0) {
                showStyledAlert2("Aucun champ n'a été modifié.");
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