<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <link rel="stylesheet" href="css/styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .sidebar {
            width: 220px;
            background-color: #ac81f2;
            color: #fff;
            height: 100vh;
            position: fixed;
            padding-top: 20px;
            padding-left: 20px;
        }

        .sidebar table {
            width: 100%;
            border-spacing: 0;
        }

        .sidebar th,
        .sidebar td {
            text-align: left;
            padding: 12px;
        }

        .sidebar th {
            background-color: #ac81f2;
        }

        .sidebar td {
            background-color: #ac81f2;
            border-bottom: 1px solid #ddd;
        }

        .sidebar a {
            color: #fff;
            text-decoration: none;
        }

        .sidebar a:hover {
            background-color: #ac81f2;
        }

        .content {
            margin-left: 240px;
            padding: 20px;
        }

        .card {
            background-color: white;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .card h2 {
            color: #724ead;
        }

        .card ul {
            list-style: none;
            padding: 0;
        }

        .card ul li {
            margin: 10px 0;
            font-size: 16px;
        }

        .table-dashboard {
            width: 100%;
            border-collapse: collapse;
        }

        .table-dashboard th,
        .table-dashboard td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
        }

        .table-dashboard th {
            background-color: #f1f1f1;
        }

        .button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .button:hover {
            background-color: #45a049;
        }

        .form-control {
            margin-bottom: 15px;
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .stat-box {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .stat-box div {
            background-color: #f1f1f1;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 30%;
        }

        .stat-box div h3 {
            margin: 0;
            color: #724ead;
        }

        .stat-box div p {
            font-size: 18px;
            margin-top: 10px;
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

        .pagination a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
  transition: background-color .3s;
}

.pagination a.active {
  background-color: dodgerblue;
  color: white;
}
.pagination a:hover:not(.active) {background-color: #ddd;}

     /* Bouton pour ouvrir la modale */
.open-modal {
            padding: 10px 20px;
            background-color: #ac81f2;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        /* Styles de la modale */
        .modal {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background: rgba(0, 0, 0, 0.5);
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s ease, visibility 0.3s ease;
        }

        .modal.active {
            opacity: 1;
            visibility: visible;
        }

        /* Contenu de la modale */
        .modal-content {
            background: white;
            padding: 20px;
            border-radius: 10px;
            width: 400px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            position: relative;
        }

        /* Bouton pour fermer la modale */
        .close-modal {
            position: absolute;
            top: 10px;
            right: 10px;
            background: none;
            border: none;
            font-size: 18px;
            cursor: pointer;
        }

        /* Formulaire et autres styles */
        form label {
            display: block;
            margin: 10px 0 5px;
        }

        form input, form select, form textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        form button {
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }

        form button:hover {
            background-color: #218838;
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
                                <li><a title="Analytics" href="analytics.html"><span class="mini-sub-pro">Analytique</span></a></li>
                                <li><a title="Widgets" href="widgets.html"><span class="mini-sub-pro">Widgets</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a title="Landing Page" href="events.html" aria-expanded="false"><span class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Evénement</span></a>
                        </li>
                        <li>
                            <a class="has-arrow" href="all-professors.html" aria-expanded="false"><span class="educate-icon educate-professor icon-wrap"></span> <span class="mini-click-non">Professeurs</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Professors" href="all-professors.html"><span class="mini-sub-pro">Tous les professeurs</span></a></li>
                                <li><a title="Add Professor" href="add-professor.html"><span class="mini-sub-pro">Ajouter un professeur</span></a></li>
                                <li><a title="Edit Professor" href="edit-professor.html"><span class="mini-sub-pro">Modifier Professeur</span></a></li>
                                <li><a title="Professor Profile" href="professor-profile.html"><span class="mini-sub-pro">Profil du professeur</span></a></li>
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
                            <a class="has-arrow" href="all-courses.html" aria-expanded="false"><span class="educate-icon educate-course icon-wrap"></span> <span class="mini-click-non">Cours</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Courses" href="all-courses.html"><span class="mini-sub-pro">Tous les cours</span></a></li>
                                <li><a title="Add Courses" href="add-course.html"><span class="mini-sub-pro">Ajouter un cours</span></a></li>
                                <li><a title="Edit Courses" href="edit-course.html"><span class="mini-sub-pro">Modifier le cours</span></a></li>
                                <li><a title="Courses Profile" href="course-info.html"><span class="mini-sub-pro">Informations sur les cours</span></a></li>
                                <li><a title="Product Payment" href="course-payment.html"><span class="mini-sub-pro">Paiement des cours</span></a></li>
                            </ul>
                        </li>
                        <!-- Réclamation section -->
                        <li>
                            <a title="Reclamation" href="REC_FORMBackOffice.html" aria-expanded="false"><span class="educate-icon educate-interface icon-wrap"></span> <span class="mini-click-non">Réclamation</span></a>
                        </li>
                        <!-- Blog section -->
                        <li>
                            <a title="Blog" href="gestion_blog.html" aria-expanded="false"><span class="educate-icon educate-interface icon-wrap"></span> <span class="mini-click-non">Blog</span></a>

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
                        <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><span class="educate-icon educate-message icon-wrap"></span> <span class="mini-click-non">Boîte aux lettres</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Inbox" href="mailbox.html"><span class="mini-sub-pro">Boîte de réception</span></a></li>
                                <li><a title="View Mail" href="mailbox-view.html"><span class="mini-sub-pro">Voir le courrier</span></a></li>
                                <li><a title="Compose Mail" href="mailbox-compose.html"><span class="mini-sub-pro">Rédiger un courrier</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    
    <!-- End Left menu area -->    

    <div>
        <?= $content ?? ''; ?>
        </div>

        <script>
    function filterColumn(column) {
        // Afficher une boîte de dialogue pour saisir le critère de recherche
        const searchValue = prompt(`Rechercher dans ${column}:`);
        if (searchValue !== null && searchValue !== "") {
            // Rediriger avec le paramètre de recherche
            const urlParams = new URLSearchParams(window.location.search);
            urlParams.set(column, searchValue);
            urlParams.set('action', 'search'); // Assure que l'action est définie pour la recherche
            window.location.search = urlParams.toString();
        }
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
</body>
</html>
