<?php
// Inclure les fichiers nécessaires
include 'C:\xampp\htdocs\Projet Web - Copie 1 - Copie\config.php';  // Inclure la configuration de la base de données
require_once 'C:\xampp\htdocs\Projet Web - Copie 1 - Copie\Controller\articleC.php';  // Inclure la classe articleC

// Créer une instance de la connexion
$conn = config::getConnexion();

// Créer une instance de articleC
$articleC = new articleC($conn);

// Récupérer tous les articles
$articles = $articleC->getAllArticles();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Section d'administration de Questerra</title>
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
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <style>
        /* Quelques styles pour rendre la page plus esthétique */
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
        
        table {
            width: 10%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: white;
            margin-left : 250px;
            margin-right : 250px;

        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            
        }

        th {
            background-color: #D3D3D3;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        .action-buttons {
            display: flex;
            justify-content: space-around;
        }

        .action-buttons a {
            padding: 5px 10px;
            text-decoration: none;
            background-color: #2ecc71;
            color: white;
            border-radius: 5px;
        }

        .action-buttons a:hover {
            background-color: #27ae60;
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
        .add-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #2ecc71;
            color: white;
            text-align: center;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s;
            margin-top: 20px;
        }

        .add-button:hover {
            background-color: #27ae60;
        }
    </style>
</head>
<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

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
                        <ul class="submenu-angle" aria-expanded="true"></ul>
                    </li>
                    <li>
                        <a title="Landing Page" href="events.html" aria-expanded="false"><span class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Evénement</span></a>
                    </li>
                    <li>
                        <a class="has-arrow" href="all-professors.html" aria-expanded="false"><span class="educate-icon educate-professor icon-wrap"></span> <span class="mini-click-non">Professeurs</span></a>
                        <ul class="submenu-angle" aria-expanded="false"></ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="all-students.html" aria-expanded="false"><span class="educate-icon educate-student icon-wrap"></span> <span class="mini-click-non">Etudiants</span></a>
                        <ul class="submenu-angle" aria-expanded="false"></ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="all-courses.html" aria-expanded="false"><span class="educate-icon educate-course icon-wrap"></span> <span class="mini-click-non">Cours</span></a>
                        <ul class="submenu-angle" aria-expanded="false"></ul>
                    </li>
                    <!-- Réclamation section -->
                    <li>
                        <a title="Reclamation" href="REC_FORMBackOffice.html" aria-expanded="false"><span class="educate-icon educate-interface icon-wrap"></span> <span class="mini-click-non">Réclamation</span></a>
                    </li>
                    <!-- Blog section -->
                    <li>
                        <a title="Blog" href="gestion_blog.php" aria-expanded="false"><span class="educate-icon educate-interface icon-wrap"></span> <span class="mini-click-non">Blog</span></a>

                    </li>
                    <!-- Forum section -->
                    <li>
                        <a class="has-arrow" href="all-forums.html" aria-expanded="false"><span class="educate-icon educate-interface icon-wrap"></span> <span class="mini-click-non">Forum</span></a>
                        <ul class="submenu-angle" aria-expanded="false"></ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="mailbox.html" aria-expanded="false"><span class="educate-icon educate-message icon-wrap"></span> <span class="mini-click-non">Boîte aux lettres</span></a>
                        <ul class="submenu-angle" aria-expanded="false"> </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </nav>
</div>

<!-- End Left menu area -->
    

            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm ```html
                        <div class="mobile-menu">
                            <nav id="dropdown">
                                <ul class="mobile-menu-nav">
                                    <li><a data-toggle="collapse" data-target="#Charts" href="#">Accueil<span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                        <ul class="collapse dropdown-header-top">
                                            <li><a href="index.html">Tableau de bord</a></li>
                                            <li><a href="analytics.html">Analytics</a></li>
                                            <li><a href="widgets.html">Widgets</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="events.html">Événement</a></li>
                                    <li><a data-toggle="collapse" data-target="#demoevent" href="#">Professeurs <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                        <ul id="demoevent" class="collapse dropdown-header-top">
                                            <li><a href="all-professors.html">Tous les Professeurs</a></li>
                                            <li><a href="add-professor.html">Ajouter un Professeur</a></li>
                                            <li><a href="edit-professor.html">Modifier un Professeur</a></li>
                                            <li><a href="professor-profile.html">Profil du Professeur</a></li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#demopro" href="#">Étudiants <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                        <ul id="demopro" class="collapse dropdown-header-top">
                                            <li><a href="all-students.html">Tous les Étudiants</a></li>
                                            <li><a href="add-student.html">Ajouter un Étudiant</a></li>
                                            <li><a href="edit-student.html">Modifier un Étudiant</a></li>
                                            <li><a href="student-profile.html">Profil de l'Étudiant</a></li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#democrou" href="#">Cours <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                        <ul id="democrou" class="collapse dropdown-header-top">
                                            <li><a href="all-courses.html">Tous les Cours</a></li>
                                            <li><a href="add-course.html">Ajouter un Cours</a></li>
                                            <li><a href="edit-course.html">Modifier un Cours</a></li>
                                            <li><a href="course-profile.html">Informations sur les Cours</a></li>
                                            <li><a href="course-payment.html">Paiement des Cours</a></li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#demolibra" href="#">Bibliothèque <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                        <ul id="demolibra" class="collapse dropdown-header-top">
                                            <li><a href="library-assets.html">Actifs de la Bibliothèque</a></li>
                                            <li><a href="add-library-assets.html">Ajouter un Actif de Bibliothèque</a></li>
                                            <li><a href="edit-library-assets.html">Modifier un Actif de Bibliothèque</a></li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#demodepart" href="#">Départements <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                        <ul id="demodepart" class="collapse dropdown-header-top">
                                            <li><a href="departments.html">Liste des Départements</a></li>
                                            <li><a href="add-department.html">Ajouter des Départements</a></li>
                                            <li><a href="edit-department.html">Modifier des Départements</a></li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#demo" href="#">Boîte aux lettres <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                        <ul id="demo" class="collapse dropdown-header-top">
                                            <li><a href="mailbox.html">Boîte de Réception</a></li>
                                            <li><a href="mailbox-view.html">Voir le Courrier</a></li>
                                            <li><a href="mailbox-compose.html">Rédiger un Courrier</a></li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle ```html
                                    <collapse" data-target="#Miscellaneousmob" href="#">Interface <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                        <ul id="Miscellaneousmob" class="collapse dropdown-header-top">
                                            <li><a href="google-map.html">Google Map</a></li>
                                            <li><a href="data-maps.html">Data Maps</a></li>
                                            <li><a href="pdf-viewer.html">Pdf Viewer</a></li>
                                            <li><a href="x-editable.html">X-Editable</a></li>
                                            <li><a href="code-editor.html">Code Editor</a></li>
                                            <li><a href="tree-view.html">Tree View</a></li>
                                            <li><a href="preloader.html">Preloader</a></li>
                                            <li><a href="images-cropper.html">Images Cropper</a></li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#Chartsmob" href="#">Charts <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                        <ul id="Chartsmob" class="collapse dropdown-header-top">
                                            <li><a href="bar-charts.html">Bar Charts</a></li>
                                            <li><a href="line-charts.html">Line Charts</a></li>
                                            <li><a href="area-charts.html">Area Charts</a></li>
                                            <li><a href="rounded-chart.html">Rounded Charts</a></li>
                                            <li><a href="c3.html">C3 Charts</a></li>
                                            <li><a href="sparkline.html">Sparkline Charts</a></li>
                                            <li><a href="peity.html">Peity Charts</a></li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#Tablesmob" href="#">Tables <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                        <ul id="Tablesmob" class="collapse dropdown-header-top">
                                            <li><a href="static-table.html">Static Table</a></li>
                                            <li><a href="data-table.html">Data Table</a></li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#formsmob" href="#">Forms <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                        <ul id="formsmob" class="collapse dropdown-header-top">
                                            <li><a href="basic-form-element.html">Basic Form Elements</a></li>
                                            <li><a href="advance-form-element.html">Advanced Form Elements</a></li>
                                            <li><a href="password-meter.html">Password Meter</a></li>
                                            <li><a href="multi-upload.html">Multi Upload</a></li>
                                            <li><a href="tinymc.html">Text Editor</a></li>
                                            <li><a href="dual-list-box.html">Dual List Box</a></li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#Appviewsmob" href="#">App views <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                        <ul id="Appviewsmob" class="collapse dropdown-header-top">
                                            <li><a href="basic-form-element.html">Basic Form Elements</a></li>
                                            <li><a href="advance-form-element.html">Advanced Form Elements</a></li>
                                            <li><a href="password-meter.html">Password Meter</a></li>
                                            <li><a href="multi-upload.html">Multi Upload</a></li>
                                            <li><a href="tinymc.html">Text Editor</a></li>
                                            <li><a href="dual-list-box.html">Dual List Box</a></li>
                                        </ul>
                                    </li>
                                    <li><a data-toggle="collapse" data-target="#Pagemob" href="#">Pages <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                        <ul id="Pagemob" class="collapse dropdown-header-top">
                                            <li><a href="login.html">Login</a></li>
                                            <li><a href="register.html">Register</a></li>
                                            <li><a href="lock.html">Lock</a></li>
                                            <li><a href="password-recovery.html">Password Recovery</a></li>
                                            <li><a href="404.html">404 Page</a></li>
                                            <li><a href="500.html">500 ```html
Page</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu end -->
    <h1 align="center">Liste des Articles</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Titre</th>
                <th>Contenu</th>
                <th>Auteur</th>
                <th>Date de Publication</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Vérifier si la variable $articles contient des articles
            if (count($articles) > 0) {
                // Afficher chaque article
                foreach ($articles as $article) {
                    echo "<tr>";
                    echo "<td>" . $article['id'] . "</td>";
            echo "<td><a href='http://localhost/Projet%20Web%20-%20Copie%201%20-%20Copie/View/Front-office/blog/affichage_articles.php?id=" . $article['id'] . "'>" . $article['titre'] . "</a></td>";
                    echo "<td>" . $article['contenu'] . "</td>";
                    echo "<td>" . $article['auteur'] . "</td>";
                    echo "<td>" . $article['date_publication'] . "</td>";
                    echo "<td class='action-buttons'>
                            <a href='delete-article.php?id=" . $article['id'] . "'>Supprimer</a>
                          </td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='6' align='center'>Aucun article trouvé.</td></tr>";
            }
            ?>
        </tbody>
    </table>

    <a href="add-article.php" style="display:block; text-align:center; margin-top:20px;margin-left: 200px; margin-right: 100px;">
    <button class="add-button">Ajouter un article</button>
    </a>
    
</body>
</html>
