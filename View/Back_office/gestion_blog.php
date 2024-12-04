<?php
// Inclure les fichiers nécessaires
include 'C:\xampp\htdocs\Projet Web - Copie 1 - Copie\config.php';  // Inclure la configuration de la base de données
require_once 'C:\xampp\htdocs\Projet Web - Copie 1 - Copie\Controller\ArticleC.php';  // Inclure la classe articleC
require_once 'C:\xampp\htdocs\Projet Web - Copie 1 - Copie\Controller\CommentaireC.php';  // Inclure la classe articleC

// Créer une instance de la connexion
$conn = config::getConnexion();

// Créer une instance de articleC
$articleC = new articleC($conn);

// Récupérer les 3 derniers articles
$articles = $articleC->getLatestArticles();
$commentaireC = new CommentaireC($conn);

// Récupérer tous les commentaires
$commentaires = $commentaireC->getAllCommentaires();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Blog - Questterra</title>
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
    <link rel="stylesheet" href="styles.css">
    
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
            margin-top: 70px;
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

        .table-dashboard td button {
            display: inline-block;
            padding: 10px 15px;
            margin-right: 10px;
            text-align: center;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            color: white;
            border: none;
            transition: background-color 0.3s ease;
        }

        .table-dashboard td button.edit {
            background-color: #2ecc71;
        }

        .table-dashboard td button.edit:hover {
            background-color: #27ae60;
        }

        .table-dashboard td button.delete {
            background-color: #2ecc71;
        }

        .table-dashboard td button.delete:hover {
            background-color: #27ae60;
        }

        .table-dashboard td button.comments {
            background-color: #2ecc71;
        }

        .table-dashboard td button.comments:hover {
            background-color: #27ae60;
        }

        .table-dashboard td button.add {
            background-color: #2ecc71;
        }

        .table-dashboard td button.add:hover {
            background-color: #27ae60;
        }
        .table-dashboard td button.comments {
            background-color: #2ecc71;
        }
        .table-dashboard td button.comments:hover {
            background-color: #27ae60;
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
        .view-all, .add-article {
            display: inline-block;
            padding: 10px 15px;
            margin-right: 10px;
            text-align: center;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            color: white;
            border: none;
            transition: background-color 0.3s ease;
            margin-top: 20px; /* Ajout de marge */
        
    }

    .view-all {
            background-color:#2ecc71;
        }
    .add-article {
            background-color:#2ecc71;
        }
    .view-all:hover {
        background-color: #27ae60;
    }
    .add-article:hover {
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
                        <a title="Blog" href="gestion_blog.php" aria-expanded="false"><span class="educate-icon educate-interface icon-wrap"></span> <span class="mini-click-non">Blog</span></a>

                    </li>
                    <!-- Forum section -->
                    <li>
                        <a class="has-arrow" href="all-forums.html" aria-expanded="false"><span class="educate-icon educate-interface icon-wrap"></span> <span class="mini-click-non">Forum</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="All Forums" href="all-forum.html"><span class="mini-sub-pro">Tous les forums</span></a></li>
                            <li><a title="Create Forum" href="create-forum.html"><span class="mini-sub-pro">Créer un forum</span></a></li>
                            <li><a title="Forum Topics" href="forum-topics.html"><span class="mini-sub-pro">Sujets du forum</span></a></li>
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

            <script>
                function confirmDelete() {
                    return confirm('Êtes-vous sûr de vouloir supprimer cet article ?');
                }
            </script>

<div class="content">
    <h1>Gestion des Blogs</h1>

    <!-- Tableau de bord -->
    <div class="dashboard">
        <div class="card">
            <h3>Articles publiés</h3>
            <p>10</p>
        </div>
        <div class="card">
            <h3>En attente de validation</h3>
            <p>3</p>
        </div>
        <div class="card">
            <h3>Total des commentaires</h3>
            <p>25</p>
        </div>
    </div>

    <!-- Gestion des blogs -->
    <div class="card">
        <h2>Articles récents</h2>
        <table class="table-dashboard">
            <thead>
                <tr>
                    <th>Auteur</th>
                    <th>Titre</th>
                    <th>Date de publication</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                    <?php foreach ($articles as $article): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($article['auteur']); ?></td>
                        <td><?php echo htmlspecialchars($article['titre']); ?></td>
                        <td><?php echo htmlspecialchars($article['date_publication']); ?></td>
                        <td>
                           
                            <button class="delete" onclick="return confirmDelete()">Supprimer</button>
                            <a href="article_comments.php?id=<?php echo $article['id']; ?>" class="comments">
                            <button class="comments">Commentaires</button>
                             </a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
        </table>

    
 <div class="view-all-articles">
            <a href="listArticles.php">
                <button class="view-all">Afficher tous les articles</button>
            </a>
            <a href="http://localhost/Projet%20Web%20-%20Copie%201%20-%20Copie/View/Back_office/add-article.php">
                    <button class="add-article">Ajouter un article</button>
            </a>
        </div>
        <table class="table-dashboard margin-top">
        <h2>les Commentaires</h2>
                <thead>
                <tr>
            <th>Auteur</th>
            <th>Contenu</th>
            <th>Date de création</th>
            <th>Article</th> <!-- Nouvelle colonne pour l'article -->
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($commentaires as $commentaire): ?>
        <tr>
            <td><?php echo htmlspecialchars($commentaire['auteur']); ?></td>
            <td><?php echo htmlspecialchars($commentaire['contenu']); ?></td>
            <td><?php echo htmlspecialchars($commentaire['date_creation']); ?></td>
            <td><a href="http://localhost/Projet%20Web%20-%20Copie%201%20-%20Copie/View/Front-office/blog/affichage_articles.php?id=<?php echo htmlspecialchars($commentaire['article_id']); ?>"><?php echo htmlspecialchars($commentaire['article_titre']); ?></a></td>            <td>
                <a href="delete_comment.php?id=<?php echo $commentaire['id']; ?>" class="delete" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce commentaire ?');">
                  <button class="delete">Supprimer</button>
                 </a>
            </td>
           
        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

            <div class="footer-copyright-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <p>&copy; 2024 Questterra. Tous droits réservés.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery -->
        <script src="js/vendor/jquery-1.12.4.min.js"></script>
        <!-- Bootstrap JS -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Other JS files -->
        <script src="js/wow.min.js"></script>
        <script src="js/jquery-price-slider.js"></script>
        <script src="js/jquery.meanmenu.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/jquery.scrollUp.min.js"></script>
        <script src="js/counterup/jquery.counterup.min.js"></script>
        <script src="js/counterup/way ```html
points.min.js"></script>
        <script src="js/counterup/counterup-active.js"></script>
        <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
        <script src="js/metisMenu/metisMenu.min.js"></script>
        <script src="js/metisMenu/metisMenu-active.js"></script>
        <script src="js/morrisjs/raphael-min.js"></script>
        <script src="js/morrisjs/morris.js"></script>
        <script src="js/morrisjs/morris-active.js"></script>
        <script src="js/sparkline/jquery.sparkline.min.js"></script>
        <script src="js/sparkline/jquery.charts-sparkline.js"></script>
        <script src="js/sparkline/sparkline-active.js"></script>
        <script src="js/calendar/moment.min.js"></script>
        <script src="js/calendar/fullcalendar.min.js"></script>
        <script src="js/calendar/fullcalendar-active.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <script src="js/tawk-chat.js"></script>
        <script>
            function confirmDelete() {
                return confirm("Êtes-vous sûr de vouloir supprimer cet article ? Cette action est irréversible.");
            }
        </script>
    </body>
</html>