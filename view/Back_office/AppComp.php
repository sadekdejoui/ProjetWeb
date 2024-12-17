<?php
require '../../config.php';
require_once '../../model/Formulaire.php';
include_once '../../Controller/FormulaireC.php';
include_once '../../Controller/NotificationC.php';
session_start();
$c=new FormulaireC();
//$complaints=$c->listformulaire();
$complaintsA=$c->listformulaireA();
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
    <title>Approved Complaints</title>
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
   /* Style the modal - hidden by default */
.modal {
    display: none; /* Hidden by default */
    position: fixed;
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent black */
    animation: fadeIn 0.3s ease-in-out; /* Fade-in animation */
}

/* Fade-in animation for modal */
@keyframes fadeIn {
    0% {
        opacity: 0;
    }
    100% {
        opacity: 1;
    }
}

/* Modal content */
.modal-content {
    position: absolute;
    top: 50%; /* Center it vertically */
    left: 50%; /* Center it horizontally */
    transform: translate(-50%, -50%); /* Offset by half its own height and width */
    background-color: #fff;
    padding: 30px;
    max-width: 600px;
    width: 80%;
    border-radius: 10px; /* Rounded corners */
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); /* Soft shadow */
    font-family: 'Arial', sans-serif;
    animation: slideIn 0.5s ease-out; /* Slide-in animation */
}

/* Slide-in animation for modal content */
@keyframes slideIn {
    0% {
        transform: translate(-50%, -50%) translateY(-50px);
        opacity: 0;
    }
    100% {
        transform: translate(-50%, -50%) translateY(0);
        opacity: 1;
    }
}

/* Close button (X) */
.close {
    color: #aaa;
    font-size: 30px;
    font-weight: bold;
    position: absolute;
    top: 10px;
    right: 20px;
    cursor: pointer;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
}

/* Modal Header */
h2 {
    font-size: 24px;
    margin-bottom: 15px;
    color: #333;
    text-align: center;
}

/* Modal content text */
#modalContent {
    font-size: 16px;
    color: #555;
    line-height: 1.5;
    text-align: left;
}

/* Add smooth transition for modal */
.modal-content {
    transition: all 0.3s ease;
}

/* When hovering over the close button */
.close:hover {
    color: red;
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
    /* Modal Overlay */
    .notification-modal {
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
    .notification-modal-content {
        background-color: #f9f9f9;
        margin: 25% auto; /* Adjusted the top margin for a smaller position */
        padding: 15px; /* Reduced padding */
        border: 1px solid #888;
        width: 40%; /* Reduced width */
        max-width: 400px; /* Added max-width to control the size on larger screens */
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
        border-radius: 10px;
        animation: fadeIn 0.3s;
    }

    /* Close Button */
    .closeNotificationModal {
        color: #aaa;
        float: right;
        font-size: 24px; /* Reduced font size */
        font-weight: bold;
        cursor: pointer;
    }

    .closeNotificationModal:hover,
    .closeNotificationModal:focus {
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

    /* Notification Modal Active */
    .notification-modal.active {
        display: block;
    }
</style>


</head>
<body>
    <!-- Start Left menu area -->
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="../Back_Office/index2.php"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                <strong><a href="../Back_Office/index2.php"><img src="img/logo/logosn.png" alt="" /></a></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
               ```html
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li class="active">
                            <a class="has-arrow" href="../Back_Office/index2.php">
                                <span class="educate-icon educate-home icon-wrap"></span>
                                <span class="mini-click-non">Education</span>
                            </a>
                            <ul class="submenu-angle" aria-expanded="true">
                                <li><a title="Analytics" href="analytics.html"><span class="mini-sub-pro">Analytique</span></a></li>
                                <li><a title="Widgets" href="widgets.html"><span class="mini-sub-pro">Widgets</span></a></li>
                            </ul>
                        </li>
                        
                        <li>
                            <a title="Courses" href="courses.html" aria-expanded="false"><span class="educate-icon educate-course icon-wrap"></span> <span class="mini-click-non">Courses</span></a>
                        </li>
                        <li>
                            <a title="Students" href="students.html" aria-expanded="false"><span class="educate-icon educate-student icon-wrap"></span> <span class="mini-click-non">Students</span></a>
                        </li>
                       
                        <li>
                            <a title="Reclamation" href="#" aria-expanded="false"><span class="educate-icon educate-interface icon-wrap"></span> <span class="mini-click-non">Complaints</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Forums" href="../Back_Office/REC_FORMBackOffice.php"><span class="mini-sub-pro">All Complaints</span></a></li>
                                <li><a title="Create Forum" href="../Back_Office/AppComp.php"><span class="mini-sub-pro">Approved Complaints</span></a></li>
                                <li><a title="Forum Topics" href="../Back_Office/PenComp.php"><span class="mini-sub-pro">Pending Complaints</span></a></li>
                            </ul>                        
                        </li>
                        <li>
                            <a title="Blog" href="gestion_blog.php" aria-expanded="false"><span class="educate-icon educate-interface icon-wrap"></span> <span class="mini-click-non">Blog</span></a>
                        </li>
                        <li>
                            <a class="has-arrow" href="all-forums.html" aria-expanded="false"><span class="educate-icon educate-interface icon-wrap"></span> <span class="mini-click-non">Forum</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Forums" href="all-forum.html"><span class="mini-sub-pro">All Forums</span></a></li>
                                <li><a title="Create Forum" href="create-forum.html"><span class="mini-sub-pro">Create Forum</span></a></li>
                                <li><a title="Forum Topics" href="forum-topics.html"><span class="mini-sub-pro">Forum Subjects</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><span class="educate-icon educate-message icon-wrap"></span> <span class="mini-click-non">EmailBox</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Inbox" href="mailbox.html"><span class="mini-sub-pro">Inbox</a></li>
                                </a></li>
                                <li><a title="View Mail" href="mailbox-view.html"><span class="mini-sub-pro">Show All Emails</span></a></li>
                                <li><a title="Compose Mail" href="mailbox-compose.html"><span class="mini-sub-pro">Write An Email</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a title="Settings" href="settings.html" aria-expanded="false"><span class="educate-icon educate-settings icon-wrap"></span> <span class="mini-click-non">Settings</span></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- End Left menu area -->
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

    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index2.php"><img class="main-logo" src="../Back_Office/img/logo/logo.png" alt="" /></a>
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
                                                <li class="nav-item"><a href="index2.php" class="nav-link">Home</a></li>
                                                <li class="nav-item"><a href="#" class="nav-link">About</a></li>
                                                <li class="nav-item"><a href="#" class="nav-link">Services</a></li>
                                                <li class="nav-item dropdown res-dis-nn">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">Project <span class="angle-down-topmenu"><i class="fa fa-angle-down"></i></span></a>
                                                    <div role="menu" class="dropdown-menu animated zoomIn">
                                                        <a href="#" class="dropdown-item">Documentation</a>
                                                        <a href="#" class="dropdown-item">Expert en back-end</a>
                                                        <a href="#" class="dropdown-item">Expert en front-end</a>
                                                        <a href="#" class="dropdown-item">Contacter le support</a>
                                                    </div>
                                                </li>
                                                <li class="nav-item"><a href="#" class="nav-link">Support</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                            <!----------------------------------------START NOTIFICATION REC-------------------------------->
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                            <li class="nav-item">
    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
        <i class="educate-icon educate-bell" aria-hidden="true"></i>
        <span class="indicator-nt"></span>
    </a>
    <div role="menu" class="notification-author dropdown-menu animated zoomIn">
        <div class="notification-single-top">
            <h1>Notifications</h1>
        </div>
        <ul class="notification-menu">
            <?php foreach($all_notifs as $notf) { ?>
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
            <?php } ?>
        </ul>
        <div class="notification-view">
            <a href="#" id="showNotifications" class="openNotificationPopup" data-id="<?php echo $notf['id_notif']; ?>">Show all notifications</a>
        </div>
    </div>
</li>
        <!----------------------------------------END notif Rec------------------------------------------------->
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
 <span class="admin-name">Admin</span>
                                                        <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                                                    </a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li><a href="#"><span class="edu-icon edu-home-admin author-log-ic"></span>My Account</a></li>
                                                        <li><a href="#"><span class="edu-icon edu-user-rounded author-log-ic"></span>My profile</a></li>
                                                        <li><a href="#"><span class="edu-icon edu-money author-log-ic"></span>Facturation des utilisateurs</a></li>
                                                        <li><a href="#"><span class="edu-icon edu-settings author-log-ic"></span>Settings</a></li>
                                                        <li><a href="#"><span class="edu-icon edu-locked author-log-ic"></span>Log Out</a></li>
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
        </div>
    </div>
    <!-- Welcome area End -->
     <!-- Modal -->
<div id="notificationModal" class="notification-modal" style="display: none;">
    <div class="notification-modal-content" style="width: 80%; margin: auto; padding: 20px; border-radius: 10px; background-color: #fff; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
        <span class="closeNotificationModal" style="float: right; font-size: 20px; cursor: pointer;">&times;</span>
        <h3 style="text-align: center;">Notifications</h3>

        <!-- Notification List -->
        <div id="notificationDetails" style="margin-top: 20px; max-height: 400px; overflow-y: auto;">
            <!-- Notifications will be dynamically inserted here -->
            <p>Loading notifications...</p>
        </div>

        <!-- Close Button -->
        <div style="text-align: center; margin-top: 20px;">
            <button id="closeNotificationModalBtn" style="background-color: #ac81f2; color: white; border: none; padding: 10px 15px; border-radius: 5px; cursor: pointer;">
                <i class="fa fa-check" style="margin-right: 5px;"></i> Close
            </button>
        </div>
    </div>
</div>

    <!-- Page 1: Gestion des Réclamations -->
    <div id="page1" class="page active">
        <header>
            <h1>Complaint Management</h1>
           <!-- <p id="total-reclamations">Total Complaints: 0</p>-->
        </header>
        <main>
            <section class="stats">

               


            

<section class="reclamations-table">
    
                <!------- tableau theni --------------->
                <h2>Approved Complaints</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Email</th>
                           
                            <th>Details</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($complaintsA as $cc): ?>
    <tr>
        <td>
            <?php echo htmlspecialchars($cc['nom']); ?>
        </td>  
        <td>
            <?php echo htmlspecialchars($cc['email']); ?>
        </td>  
         
        <td>
            <!-- Link to trigger the modal for this specific row -->
            <a href="#" class="seeMoreBtn" data-id="<?php echo $cc['id_form']; ?>" data-description="<?php echo htmlspecialchars($cc['description']); ?>">SEEMOOREEE</a>

            <!-- Modal Structure -->
            <div id="myModal_<?php echo $cc['id_form']; ?>" class="modal">
                 <div class="modal-content">
                    <span class="close">&times;</span>
                    <h2>Complaint Details</h2>
                    <div id="modalEmail_<?php echo $cc['id_form']; ?>">
                    <p><strong>Email:</strong> <?php echo htmlspecialchars($cc['email']); ?></p>
             </div>
                    <div id="modalContent_<?php echo $cc['id_form']; ?>">
                         <!-- Insert Complaint Description and Responses here dynamically -->
                     </div>
             
    </div>
</div>

        </td>  
         
    </tr>
<?php endforeach; ?>






                        <!---- contenuuuuuuuuuuuuuuu--->
                    </tbody>
                </table>
                <!----- wfe el tableauu el theni-------->
                
    </section>
        </main>
    </div>

  


     <!-- end  of the window -->




<!-- JavaScript for Modal -->
<script>
    // Get all buttons that open the modal
    var btns = document.querySelectorAll('.seeMoreBtn');

    btns.forEach(function(btn) {
        btn.onclick = function(event) {
            event.preventDefault();  // Prevent default action of the link

            // Get data attributes from the clicked button
            var complaintId = btn.getAttribute("data-id");
            var description = btn.getAttribute("data-description");

            // Find the specific modal and content elements
            var modal = document.getElementById("myModal_" + complaintId);
            var modalContent = document.getElementById("modalContent_" + complaintId);

            // AJAX to fetch responses dynamically for the complaint
            fetch("getComplaintRes.php?id=" + complaintId)
                .then(response => response.json())
                .then(data => {
                    // Update modal content with complaint details
                    modalContent.innerHTML = `
                        <p><strong>Complaint ID:</strong> ${complaintId}</p>
                        <p><strong>Description:</strong> ${description}</p>
                        <p><strong>Responses:</strong> ${data.responses}</p>
                    `;
                    // Show modal
                    modal.style.display = "block";
                })
                .catch(error => console.log("Error fetching responses:", error));
        };
    });

    // Close the modal when the user clicks on <span> (x)
    var closes = document.querySelectorAll('.close');
    closes.forEach(function(span) {
        span.onclick = function() {
            var modal = span.closest('.modal');
            modal.style.display = "none";
        };
    });

    // Close the modal if the user clicks anywhere outside of it
    window.onclick = function(event) {
        var modals = document.querySelectorAll('.modal');
        modals.forEach(function(modal) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        });
    };
</script>


<script>
    // Open Modal on Button Click
    document.querySelectorAll('.openNotificationPopup').forEach(button => {  // Change the class to openNotificationPopup
        button.addEventListener('click', function () {
            const modal = document.getElementById('notificationModal');
            modal.style.display = 'block'; // Show the modal

            // Fetch notifications and populate the modal
            fetch('fetch_notifications.php')
                .then(response => response.json())
                .then(data => {
                    console.log(data);
                    const detailsDiv = document.getElementById('notificationDetails');
                    if (data.length > 0) {
                        detailsDiv.innerHTML = data.map(notification => `
                            <div style="border: 1px solid #ddd; padding: 10px; margin-bottom: 10px;">
                                <p><strong>Complaint:</strong> ${notification.contenu}</p>
                                <a href="REC_FORMBackOffice.php?id=${notification.id_notif}" style="text-decoration: none;">
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
    document.querySelectorAll('.closeNotificationModal').forEach(closeButton => {
        closeButton.addEventListener('click', () => {
            const modal = document.getElementById('notificationModal');
            modal.style.display = 'none'; // Close the modal
        });
    });

    document.getElementById('closeNotificationModalBtn').addEventListener('click', () => {
        const modal = document.getElementById('notificationModal');
        modal.style.display = 'none'; // Close the modal when close button is clicked
    });

    // Optional: Close modal when clicking outside the modal content
    window.addEventListener('click', (event) => {
        const modal = document.getElementById('notificationModal');
        if (event.target === modal) {
            modal.style.display = 'none'; // Close the modal if clicked outside
        }
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
                      <a href="REC_FORMBackOffice.php?id=${notification.id_notif}" style="text-decoration: none;">
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

</body>
</html>