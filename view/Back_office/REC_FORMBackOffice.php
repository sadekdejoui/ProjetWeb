<?php
require '../../config.php';
require_once '../../model/Formulaire.php';
include_once '../../Controller/FormulaireC.php';
include_once '../../Controller/NotificationC.php';
session_start();
$c=new FormulaireC();
$complaints=$c->listformulaire();
//$complaintsA=$c->listformulaireA();
//$complaintsD=$c->listformulaireP();
$notif=new NotificationC();
$all_notifs_any=$notif->showNotifAdmin();
$all_notifs=$notif->showNotifAdminUnseen();


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complaints | Questerra Admin</title>
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
        #error-message {
            display: none;
            color: red;
            font-size: 0.9em;
            margin-top: 5px;
        }
    </style>
    <!------------------CSS tableau------------------>
    <style>
        /* Styling the reclamations table */
.reclamations-table {
    display: flex;
    justify-content: center; /* Center the table horizontally */
    align-items: center;     /* Center the table vertically */
    flex-direction: column;
    margin-top: 20px;
}

.reclamations-table table {
    width: 80%; /* Adjust width to fit nicely on the page */
    border-collapse: collapse;
    margin-top: 20px;
    border-radius: 12px; /* Rounded corners for the table */
    overflow: hidden; /* Hide overflow for rounded corners */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Add shadow for a modern look */
}

.reclamations-table th, .reclamations-table td {
    padding: 12px;
    text-align: left;
    border: 1px solid #ddd;
}

.reclamations-table th {
    background-color: #f2f2f2;
    font-weight: bold;
    color: #333;
}

.reclamations-table td {
    background-color: #fff;
    font-size: 1em;
}

.reclamations-table tr:nth-child(even) td {
    background-color: #f9f9f9; /* Zebra striping for better readability */
}

.reclamations-table .openModal {
    padding: 6px 12px;
    font-size: 0.9em;
    border: none;
    border-radius: 4px;
    background-color: #ac81f2;
    color: white;
    cursor: pointer;
    transition: background-color 0.3s;
}

.reclamations-table .openModal:hover {
    background-color: #ffd891; /* Darker blue on hover */
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
                                            <li><span class="bread-blod">Complaint</span>
                                            </li>
                                        </ul>
                                    </div>

        <!-------------------------END------------------>
       <!-------- notifications modal-------------->
                 
<div id="myModal" class="modal" style="display: none;"><!--<div id="NotifModal" class="modal" style="display: none;"></div>-->
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

    <!-- Page 1: Gestion des Réclamations -->
    <div id="page1" class="page active">
        
       
               

    <section class="filters" style="
    display: flex; 
    justify-content: center; 
    align-items: center; 
    gap: 15px; 
    margin: 20px auto; 
    padding: 10px; 
    background-color: #f9f9f9; 
    border: 1px solid #ddd; 
    border-radius: 8px; 
    width: fit-content;
">
    <select id="type-filter" style="
        padding: 8px 12px; 
        border: 1px solid #ccc; 
        border-radius: 6px; 
        font-size: 14px; 
        color: #333; 
        background-color: #fff; 
        cursor: pointer; 
        outline: none; 
        transition: all 0.3s ease;
    ">
        <option value="all">All</option>
        <option value="cours">Course</option>
        <option value="professeur">Professors</option>
        <option value="site_web">Technical Issues</option>
        <option value="Others">Others</option>
    </select>
    <button id="urgent-filter" style="
        padding: 8px 15px; 
        background-color: #5a32a3; 
        color: #fff; 
        border: none; 
        border-radius: 6px; 
        font-size: 14px; 
        cursor: pointer; 
        transition: background 0.3s;
    " 
    onmouseover="this.style.backgroundColor='#452881'" 
    onmouseout="this.style.backgroundColor='#5a32a3'">Urgents</button>
</section>


<section class="reclamations-table">
<header style="
    background-color:rgb(157, 103, 189); 
    color: #fff; 
    padding: 20px; 
    border-radius: 10px; 
    width: fit-content; 
    margin: 20px auto; 
    text-align: center;
">
    <h2 style="margin: 0;">Complaint Management</h2>
    <!-- <p id="total-reclamations">Total Complaints: 0</p>-->
</header>
    <h2>All Complaints</h2>
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Email</th>
                
              
               <!-- <th>Description</th>-->
                <th>Actions</th>
            </tr>
        </thead>
        <tbody id="complaints-table-body">
            <!-- Complaints will be dynamically loaded here -->
            <?php foreach ($complaints as $cc): ?>
                <tr class="complaint-row" data-type="<?php echo htmlspecialchars($cc['type_reclamation']); ?>">
                    <td><?php echo htmlspecialchars($cc['nom']); ?></td>
                    <td><?php echo htmlspecialchars($cc['email']); ?></td>
                    
 
                    <?php if($cc['status'] == '0'): ?>
                        <td><button class="openModal" data-id="<?php echo $cc['id_form']; ?>">Review Complaint</button></td>
                    <?php endif; ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
            <!----------------Dynamic Filter-------------------->
            <script>
   // Function to filter complaints based on selected type when the dropdown value changes
document.getElementById('type-filter').addEventListener('change', function () {
    const filterValue = this.value; // Get selected filter value from dropdown
    const rows = document.querySelectorAll('#complaints-table-body .complaint-row'); // Select all rows in the table

    rows.forEach(row => {
        const type = row.getAttribute('data-type'); // Get the type of the current row
        console.log(type); // Debugging line to log the type

        if (filterValue === 'all' || type === filterValue) {
            row.style.display = ''; // Show row
        } else {
            row.style.display = 'none'; // Hide row
        }
    });
});


    // Optional: To add functionality for urgent filter (if you need to filter based on 'urgent' status)
    document.getElementById('urgent-filter').addEventListener('click', function () {
        const rows = document.querySelectorAll('#complaints-table-body .complaint-row'); // Select all rows in the table

        rows.forEach(row => {
            const isUrgent = row.querySelector('td:nth-child(6)'); // Check if the row has the 'urgent' status (you can adjust this based on how 'urgent' is represented)

            if (isUrgent && isUrgent.textContent.toLowerCase().includes('urgent')) {
                row.style.display = ''; // Show urgent rows
            } else {
                row.style.display = 'none'; // Hide non-urgent rows
            }
        });
    });
</script>
 <!---------------- ENDDynamic Filter-------------------->
               

   
    <!-- Refusal Modal -->
    <div id="refusal-message" class="hidden">
        <div class="refusal-content">
            <p>The complaint has been rejected.</p>
            <button id="close-refusal">close</button>
        </div>
    </div>

    <script src="../Back_Office/js/scriptComp.js"></script>
   
    <script>
        $(document).ready(function() {
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
    
     <!-- start of the window -->
    

<!-- Modal -->
<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h3>Complaint Details</h3>
        <div id="complaintDetails">
            <p>Loading...</p>
        </div>
        <textarea id="remarque" style="
            width: 50%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 1rem;
            color: #333;
            background-color: #f9f9f9;
            box-sizing: border-box;
            transition: border-color 0.3s ease, background-color 0.3s ease;
        "></textarea>
        <p id="error-message" style="color: red; display: none;">Please review this complaint. The solution can't be empty.</p>
        <div>

        <a id="approveLink" href="#">
            
                <button id="verified-button"style="background-color: #28a745; color: white; border: none; padding: 10px 15px; border-radius: 5px; cursor: pointer;">
                    <i class="fa fa-check" style="margin-right: 5px;"></i> Verified
                </button>
                </a>
            <a id="deleteLink" href="#">
                <button style="background-color: #dc3545; color: white; border: none; padding: 10px 15px; border-radius: 5px; cursor: pointer;">
                    <i class="fa fa-trash" style="margin-right: 5px;"></i> Delete
                </button>
            </a>
        </div>
    </div>
</div>


<!-----------------------Control de saisie reponse ------------------------->
<script>
   document.addEventListener("DOMContentLoaded", function() {
    const textarea = document.getElementById("remarque");
    const errorMessage = document.getElementById("error-message");
    const verifiedButton = document.getElementById("verified-button");

    if (verifiedButton) { // Check if the button exists
        verifiedButton.addEventListener("click", function (event) {
            const value = textarea.value.trim();

            event.preventDefault(); // Prevent default behavior

            // Validate input
            if (value === "") {
                errorMessage.style.display = "block"; // Show error message

                // Keep the error message visible for 3 seconds
                setTimeout(() => {
                    errorMessage.style.display = "none"; // Hide error message after 3 seconds
                }, 3000);
            } else {
                errorMessage.style.display = "none"; // Hide error message

                // Proceed with success logic after a delay of 3 seconds
                setTimeout(() => {
                    alert("Complaint verified successfully!");
                    // Close modal or take further actions here
                }, 3000);
            }
        });
    } else {
        console.error("Verified button not found!");
    }
});



    </script>


<!--- code modal detail complaint(chebek)-->

<script>
    document.querySelectorAll('.openModal').forEach(button => {
    button.addEventListener('click', function () {
        const complaintId = this.getAttribute('data-id'); // Get the complaint ID

        // Show the modal
        const modal = document.getElementById('myModal');
        modal.style.display = 'block';

        // Show loading message
        const detailsDiv = document.getElementById('complaintDetails');
        detailsDiv.innerHTML = '<p>Loading...</p>';

        // Fetch complaint details via AJAX
        fetch(`melek.php?id=${complaintId}`)
            .then(response => response.json())
            .then(data => {
                if (data.error) {
                    detailsDiv.innerHTML = `<p style="color:red;">${data.error}</p>`;
                } else {
                    // Populate the modal with data
                    detailsDiv.innerHTML = `
                        <p><strong>Name:</strong> ${data.nom}</p>
                        <p><strong>Email:</strong> ${data.email}</p>
                        <p><strong>Phone:</strong> ${data.telephone}</p>
                        <p><strong>Type:</strong> ${data.type_reclamation}</p>
                        <p><strong>Description:</strong> ${data.description}</p>
                    `;
                }
            })
            .catch(error => {
                detailsDiv.innerHTML = `<p style="color:red;">Error loading details.</p>`;
                console.error('AJAX Error:', error);
            });
    });
});

// Close modal when clicking the close button
document.querySelector('.close').onclick = function () {
    document.getElementById('myModal').style.display = 'none';
};

// Close modal when clicking outside the modal content
window.onclick = function (event) {
    const modal = document.getElementById('myModal');
    if (event.target === modal) {
        modal.style.display = 'none';
    }
};


</script>
    <!--- code modal (chebek)-->

    <!-- End JS -->
<script>
    document.getElementById('approveLink').addEventListener('click', function (e) {
        e.preventDefault();
        const id = <?php echo json_encode($cc['id_form']); ?>;
        const message = document.getElementById('remarque').value;
        window.location.href = `approveContact.php?id=${id}&message=${encodeURIComponent(message)}`;
    });

    document.getElementById('deleteLink').addEventListener('click', function (e) {
        e.preventDefault();
        const id = <?php echo json_encode($cc['id_form']); ?>;
        const message = document.getElementById('remarque').value;
        window.location.href = `DeleteContactAdmin.php?id=${id}&message=${encodeURIComponent(message)}`;
    });
</script>



<!--------------------notif Modal-------------------->
<script>
   // Open Modal on Button Click
document.querySelectorAll('.NotifModal').forEach(button => {
    button.addEventListener('click', function () {
        const modal = document.getElementById('myModal');
        modal.style.display = 'block';

        fetch('fetch_notifications.php')
        .then(response => response.json())
        .then(data => {
            console.log(data);
            const detailsDiv = document.getElementById('complaintDetails');
            if (data.length > 0) {
                detailsDiv.innerHTML = data.map(notification => `
                    <div style="border: 1px solid #ddd; padding: 10px; margin-bottom: 10px;">
                        <p><strong>Complaint:</strong> ${notification.contenu}</p>
                      <a href="PenComp.php?id=${notification.id_notif}" style="text-decoration: none;">
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
            .catch(error => console.error('Error:', error));
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
    document.addEventListener("DOMContentLoaded", () => {
    const urlParams = new URLSearchParams(window.location.search);
    const notificationId = urlParams.get('id_form'); // Get the 'id' parameter from the URL
        console.log(notificationId);
    if (notificationId) {
        // Automatically open the modal
        const modal = document.getElementById('myModal');
        modal.style.display = 'block';
        const detailsDiv = document.getElementById('complaintDetails');

        // Fetch notification details based on the ID
        fetch(`melek.php?id=${notificationId}`)
            .then(response => response.json())
            .then(data => {
                if (data.error) {
                    detailsDiv.innerHTML = `<p style="color:red;">${data.error}</p>`;
                } else {
                    // Populate the modal with data
                    detailsDiv.innerHTML = `
                        <p><strong>Name:</strong> ${data.nom}</p>
                        <p><strong>Email:</strong> ${data.email}</p>
                        <p><strong>Phone:</strong> ${data.telephone}</p>
                        <p><strong>Type:</strong> ${data.type_reclamation}</p>
                        <p><strong>Description:</strong> ${data.description}</p>
                    `;
                }
            })
            .catch(error => {
                console.error('Error:', error);
                const detailsDiv = document.getElementById('complaintDetails');
                detailsDiv.innerHTML = '<p>Error loading notification details.</p>';
            });
    }

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
});

</script>

     <!-- end  of the window -->
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