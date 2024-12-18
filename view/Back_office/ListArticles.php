<?php
// Inclure les fichiers nécessaires
//require '../../config.php'; // Inclure la configuration de la base de données
//require_once 'C:\xampp\htdocs\Projet Web\controller\ArticleC.php'; 
//require_once '../../controller/ArticleC.php';
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
$all_notifs=$notif->showNotifAdminUnseen();// Inclure la classe articleC

// Créer une instance de la connexion
$conn = config::getConnexion();

// Créer une instance de articleC
$articleC = new articleC($conn);

$sort = isset($_GET['sort']) ? $_GET['sort'] : 'id'; // Tri par défaut
$order = isset($_GET['order']) && $_GET['order'] === 'desc' ? 'desc' : 'asc'; // Ordre par défaut

// Récupérer tous les articles
$articles = $articleC->getAllArticles();



// Appliquer le tri
usort($articles, function($a, $b) use ($sort, $order) {
    if ($sort === 'titre') {
        return $order === 'asc' ? strcmp($a['titre'], $b['titre']) : strcmp($b['titre'], $a['titre']);
    } elseif ($sort === 'date_publication') {
        return $order === 'asc' ? strtotime($a['date_publication']) - strtotime($b['date_publication']) : strtotime($b['date_publication']) - strtotime($a['date_publication']);
    }
    return $order === 'asc' ? $a['id'] - $b['id'] : $b['id'] - $a['id']; // Tri par ID par défaut
});
// Vérifier si une recherche est effectuée
$search = isset($_GET['search']) ? $_GET['search'] : '';

// Filtrer les articles en fonction de la recherche
if (!empty($search)) {
    $articles = array_filter($articles, function($article) use ($search) {
        return stripos($article['titre'], $search) !== false; // Recherche insensible à la casse
    });
}
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
   /* General Styles */
body {
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    color: #333;
    margin: 0;
    padding: 0;
}

h1 {
    text-align: center;
    color: #5a32a3;
    font-size: 32px;
    margin: 20px 0;
}

/* Search Form */
.search-form, .sort-form {
    text-align: center;
    margin-bottom: 20px;
}

.search-input, select {
    padding: 10px;
    margin: 5px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 14px;
    width: 200px;
}

.search-button, .sort-form button {
    padding: 10px 15px;
    background-color: #5a32a3;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 14px;
    transition: background-color 0.3s ease;
}

.search-button:hover, .sort-form button:hover {
    background-color: #ffd891;
}

/* Table Styles */
table {
    width: 80%;
    margin: 0 auto;
    border-collapse: collapse;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
    overflow: hidden;
}

th, td {
    padding: 12px 15px;
    text-align: center;
    border-bottom: 1px solid #ddd;
}

th {
    background-color: #5a32a3;
    color: #fff;
    font-size: 16px;
}

td a {
    color: #5a32a3;
    text-decoration: none;
    font-weight: bold;
}

td a:hover {
    text-decoration: underline;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}

tr:hover {
    background-color: #f0e8ff;
    transition: 0.2s ease;
}

/* Action Buttons */
.action-buttons a {
    color: #5a32a3;
    text-decoration: none;
}

.action-buttons a:hover {
    text-decoration: underline;
}

.action-buttons span {
    color: #888;
}

/* Add Article Button */
.add-button {
    padding: 10px 20px;
    background-color: #5a32a3;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s ease;
}

.add-button:hover {
    background-color: #ffd891;
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
                                            <li><span class="bread-blod">Blog</span>
                                            </li>
                                        </ul>
                                    </div>

        <!-------------------------END------------------>
            <h1 align="center">Liste des Articles</h1>

            <form method="GET" action="" class="search-form" style="text-align: center; margin-bottom: 20px;">
        <input type="text" name="search" placeholder="Rechercher un article..." class="search-input" value="<?php echo htmlspecialchars($search); ?>">
        <button type="submit" class="search-button">Rechercher</button>
    </form>

    <form method="GET" action="" class="sort-form">
    <label for="sort">Trier par:</label>
    <select name="sort" id="sort">
        <option value="id" <?php echo $sort === 'id' ? 'selected' : ''; ?>>ID</option>
        <option value="titre" <?php echo $sort === 'titre' ? 'selected' : ''; ?>>Titre</option>
        <option value="date_publication" <?php echo $sort === 'date_publication' ? 'selected' : ''; ?>>Date de Publication</option>
    </select>

    <label for="order">Ordre:</label>
    <select name="order" id="order">
        <option value="asc" <?php echo $order === 'asc' ? 'selected' : ''; ?>>Ascendant</option>
        <option value="desc" <?php echo $order === 'desc' ? 'selected' : ''; ?>>Descendant</option>
    </select>

    <button type="submit">Appliquer</button>
</form>

    <table style="width: 80%; margin: 0 auto; border-collapse: collapse;">
        <thead>
            <tr>
                <th>ID</th>
                <th>Titre</th>
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
                    echo "<td>" . htmlspecialchars($article['id']) . "</td>";
                    echo "<td><a href='read_article.php?id=" . htmlspecialchars($article['id']) . "'>" . htmlspecialchars($article['titre']) . "</a></td>";
                    echo "<td>" . htmlspecialchars($article['auteur']) . "</td>";
                    echo "<td>" . htmlspecialchars($article['date_publication']) . "</td>";
                    echo "<td class='action-buttons'>
                    <a href='delete-article.php?id=" . htmlspecialchars($article['id']) . "' onclick='return confirm(\"Êtes-vous sûr de vouloir supprimer cet article ?\");'>Supprimer</a>
                        <span style='margin: 0 10px;'>|</span>
                        <a href='read_article.php?id=" . htmlspecialchars($article['id']) . "'>Commentaires</a>
                      </td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5' align='center'>Aucun article trouvé.</td></tr>";
            }
            ?>
        </tbody>
    </table>

<a href="add-article.php" style="display:block; text-align:center; margin-top:20px;margin-left: 200px; margin-right: 100px;">
    <button class="add-button">Ajouter un article</button>
</a>
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
</body>
</html>
