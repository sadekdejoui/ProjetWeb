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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses | Questerra Admin</title>
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
    <style>
        /* Global styles */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f4f8;  /* Light pastel blue */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #ffffff;
            padding: 30px;
            width: 100%;
            max-width: 800px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            background-color: #fffafc; /* Soft pastel lavender */
        }

        h1 {
            text-align: center;
            color: #4c1972;
            margin-bottom: 20px;
        }

        .course-info {
            margin-bottom: 30px;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .course-info p {
            margin: 5px 0;
            color: #333;
        }

        .payment-section {
            display: flex;
            flex-direction: column;
        }

        .payment-section label {
            margin-top: 15px;
            font-size: 14px;
            font-weight: bold;
            color: #333;
        }

        .payment-section input[type="text"], 
        .payment-section input[type="date"] {
            padding: 12px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            width: 100%;
        }

        .payment-method {
            display: flex;
            gap: 20px;
            margin-top: 15px;
        }

        .payment-method input {
            margin-right: 10px;
        }

        .payment-method label {
            font-size: 14px;
            color: #333;
        }

        .payment-summary {
            margin-top: 30px;
            padding: 15px;
            background-color: #f4f7fc;
            border-radius: 8px;
            font-size: 16px;
            font-weight: bold;
            color: #333;
        }

        .total {
            color: #4c1972;
        }

        .button-container {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        button {
            background-color: #4c1972;
            color: white;
            font-size: 16px;
            padding: 12px 25px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #69268d;
        }
    </style>
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
                                                   <!-- <li><a href="login.html"><span class="edu-icon edu-user-rounded author-log-ic"></span>Se déconnecter</a>
                                                    </li>-->

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
                                        <li><span class="bread-blod">Courses</span>
                                        </li>
                                    </ul>
                                </div>

    <!-------------------------END------------------>
    <!--------------------------Start pay cours------------------------------------------>
    <div class="container">
    <h1 style="text-align: center; margin-top: 20px; font-size: 28px; color: #5a32a3;">Gestion du Paiement du Cours</h1>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    
        <!-- Informations du Cours -->
        <div class="course-info">
            <p><strong>Titre du Cours :</strong> Développement Web</p>
            <p><strong>Catégorie :</strong> Informatique</p>
            <p><strong>Durée :</strong> 20 heures</p>
            <p><strong>Prix :</strong> 99€</p>
        </div>
    
        <!-- Formulaire de Paiement -->
        <form action="process_payment.php" method="post" class="payment-section">
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" placeholder="Entrez votre nom" required>
    
            <label for="email">E-mail :</label>
            <input type="email" id="email" name="email" placeholder="Entrez votre e-mail" required>
    
            <label for="date">Date d'achat :</label>
            <input type="date" id="date" name="date" required>
    
            <div class="payment-method">
                <!-- Carte de Crédit -->
                <label for="credit_card">
                    <input type="radio" id="credit_card" name="payment_method" value="credit_card" required>
                    <img src="téléchargement.png" alt="Carte de Crédit">
                    Carte de Crédit
                </label>
    
                <!-- PayPal -->
                <label for="paypal">
                    <input type="radio" id="paypal" name="payment_method" value="paypal" required>
                    <img src="téléchargement (1).png" alt="PayPal">
                    PayPal
                </label>
            </div>
    
            <!-- Résumé du Paiement -->
            <div class="payment-summary">
                <p><strong>Total à Payer :</strong> <span class="total">99€</span></p>
            </div>
    
            <!-- Bouton de Paiement -->
            <div class="button-container">
                <button type="submit">Effectuer le Paiement</button>
            </div>
        </form>
    
        <!-- Bouton pour Télécharger et Envoyer la Facture -->
        <div class="button-container">
            <button id="download-and-send-btn" type="button">Télécharger et Envoyer la Facture</button>
        </div>
    </div>
    
    <script>
        document.getElementById('download-and-send-btn').addEventListener('click', async function () {
            const { jsPDF } = window.jspdf;
            const doc = new jsPDF();
    
            // Informations de la facture
            const courseTitle = "Développement Web";
            const studentName = document.getElementById('nom').value || 'Non renseigné';
            const studentEmail = document.getElementById('email').value || 'Non renseigné';
            const paymentMethod = document.querySelector('input[name=\"payment_method\"]:checked')?.value || 'Non sélectionné';
            const totalAmount = '99€';
            const date = document.getElementById('date').value || new Date().toLocaleDateString();
    
            // Générer le contenu du PDF
            doc.setFont('helvetica', 'normal');
            doc.setFontSize(28);
            doc.text("Facture", 105, 40, null, null, 'center');
            doc.setFontSize(18);
            doc.text("Cours : " + courseTitle, 105, 60, null, null, 'center');
            doc.text("Nom de l'étudiant : " + studentName, 105, 80, null, null, 'center');
            doc.text("E-mail : " + studentEmail, 105, 100, null, null, 'center');
            doc.text("Méthode de Paiement : " + paymentMethod, 105, 120, null, null, 'center');
            doc.text("Total à Payer : " + totalAmount, 105, 140, null, null, 'center');
            doc.text("Date : " + date, 105, 160, null, null, 'center');
            doc.setFontSize(14);
            doc.text("Merci pour votre paiement !", 105, 180, null, null, 'center');
    
            // Convertir le PDF en base64
            const pdfBase64 = doc.output('datauristring');
    
            // Envoi des données au serveur
            try {
                const response = await fetch('process_payment.php', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({
                        email: studentEmail,
                        pdf: pdfBase64,
                        courseTitle: courseTitle,
                        studentName: studentName
                    })
                });
                const result = await response.json();
                if (result.success) {
                    alert('Facture envoyée par email avec succès.');
                } else {
                    alert('Erreur lors de l\'envoi de la facture.');
                }
            } catch (error) {
                alert('Une erreur s\'est produite lors de la communication avec le serveur.');
                console.error(error);
            }
    
            // Télécharger la facture localement
            doc.save('facture.pdf');
        });
    </script>
    
















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