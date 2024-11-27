<?php
// Inclure les fichiers nécessaires
include 'C:\xampp\htdocs\Projet Web - Copie 1 - Copie\config.php'; // Inclure la configuration de la base de données
include 'C:\xampp\htdocs\Projet Web - Copie 1 - Copie\Model\article.php'; // Inclure la classe Article
include 'C:\xampp\htdocs\Projet Web - Copie 1 - Copie\Controller\articleC.php'; // Inclure la classe articleC

// Vérifier si l'ID est passé dans l'URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Créer une instance de la connexion à la base de données
    $conn = config::getConnexion();

    // Préparer la requête SQL pour récupérer l'article par son ID
    $query = "SELECT * FROM articles WHERE id = :id";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();

    // Récupérer l'article
    $article = $stmt->fetch(PDO::FETCH_ASSOC);

    // Si l'article n'existe pas
    if (!$article) {
        echo "Article introuvable.";
        exit();
    }
} else {
    echo "ID manquant.";
    exit();
}

// Vérifier si le formulaire a été soumis pour mettre à jour l'article
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titre = $_POST['titre'];
    $contenu = $_POST['contenu'];
    $auteur = $_POST['auteur'];

    // Vérifier si les champs ne sont pas vides
    if (!empty($titre) && !empty($contenu) && !empty($auteur)) {
        // Créer une instance du contrôleur pour mettre à jour l'article
        $articleC = new articleC($conn);
        $articleC->updateArticle($id, $titre, $contenu);

        // Rediriger vers la liste des articles après la mise à jour
        header('Location: ListArticles.php');
        exit();
    } else {
        $error = "Tous les champs sont requis.";
    }
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
        table {
            width: 60%;
            margin: 20px auto;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
            background-color: white;
        }

        th {
            background-color: white;
            color: white;
        }

        tr:nth-child(even) {
            background-color: white;
        }

        .btn {
            background-color: #4CAF50;
            color: white;
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #45a049;
        }

        .btn-cancel {
            background-color: #f44336;
        }

        .btn-cancel:hover {
            background-color: #e53935;
        }

        .error {
            color: red;
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
    <h1 align="center">Modifier l'Article</h1>

    <!-- Affichage des erreurs -->
    <?php if (isset($error)): ?>
        <div class="error"><?php echo $error; ?></div>
    <?php endif; ?>

    <!-- Formulaire de modification -->
    <form action="" method="POST">
        <table>
            <tr>
                <td><label for="titre">Titre :</label></td>
                <td><input type="text" name="titre" id="titre" value="<?php echo htmlspecialchars($article['titre']); ?>" maxlength="100"></td>
            </tr>
            <tr>
                <td><label for="contenu">Contenu :</label></td>
                <td><textarea name="contenu" id="contenu" rows="5" cols="30"><?php echo htmlspecialchars($article['contenu']); ?></textarea></td>
            </tr>
            <tr>
                <td><label for="auteur">Auteur :</label></td>
                <td><input type="text" name="auteur" id="auteur" value="<?php echo htmlspecialchars($article['auteur']); ?>" maxlength="50"></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" class="btn" value="Mettre à jour">
                    <a href="ListArticles.php" class="btn btn-cancel">Annuler</a>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
