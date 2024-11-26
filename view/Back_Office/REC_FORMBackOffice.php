<?php
require '../../config.php';
require_once '../../model/Formulaire.php';
include_once '../../Controller/FormulaireC.php';
session_start();
$c=new FormulaireC();
$complaints=$c->listformulaire();
$complaintsA=$c->listformulaireA();
$complaintsD=$c->listformulaireP();


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complaint Management</title>
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
</head>
<body>
    <!-- Start Left menu area -->
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="../Back_Office/index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                <strong><a href="../Back_Office/index.html"><img src="img/logo/logosn.png" alt="" /></a></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
               ```html
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li class="active">
                            <a class="has-arrow" href="../Back_Office/index.html">
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
                            <a title="Reclamation" href="../Back_Office/REC_FORMBackOffice.php" aria-expanded="false"><span class="educate-icon educate-interface icon-wrap"></span> <span class="mini-click-non">Complaints</span></a>
                        </li>
                        <li>
                            <a title="Blog" href="gestion_blog.html" aria-expanded="false"><span class="educate-icon educate-interface icon-wrap"></span> <span class="mini-click-non">Blog</span></a>
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

    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="../Back_Office/img/logo/logo.png" alt="" /></a>
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
                                                <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
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
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                <li class="nav-item dropdown">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="educate-icon educate-message edu-chat-pro" aria-hidden="true"></i><span class="indicator-ms"></span></a>
                                                    <div role="menu" class="author-message-top dropdown-menu animated zoomIn">
                                                        <div class="message-single-top">
                                                            <h1>Message</h1>
                                                        </div>
                                                        <ul class="message-menu">
                                                            <li>
                                                                <a href="#">
                                                                    <div class="message-img">
                                                                        <img src="img/malek.jpg" alt="">
                                                                    </div>
                                                                    <div class="message-content">
                                                                        <span class="message-date">5 nov</span>
                                                                        <h2>Malek Ben Rejab</h2>
                                                                        <p>Cristiano Ronaldo is the greatest player of all time.</p>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="message-view">
                                                            <a href="#">Show All Messages</a>
                                                        </div>
                                                    </div>
                                                </li>
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

    <!-- Page 1: Gestion des Réclamations -->
    <div id="page1" class="page active">
        <header>
            <h1>Complaint Management</h1>
            <p id="total-reclamations">Total Complaints: 0</p>
        </header>
        <main>
            <section class="stats">

               <!--Complaint Chart-->
                <h2>Complaint Statistics</h2>
                <canvas id="complaintChart" width="250" height="250"></canvas>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('complaintChart').getContext('2d');

    // Fetch data from the backend
    fetch('getComplaintData.php') // Replace with your PHP script's path
        .then(response => response.json())
        .then(data => {
            new Chart(ctx, {
                type: 'doughnut', // Donut chart
                data: {
                    labels: data.labels, // Dynamic labels from backend
                    datasets: [{
                        data: data.counts, // Dynamic counts from backend
                        backgroundColor: ['#007bff', '#ffc107', '#dc3545', '#28a745'], // Colors
                    }]
                },
                options: {
                    responsive: false, // Fixed size
                    plugins: {
                        legend: { position: 'right' } // Legend position
                    },
                    cutout: '70%' // Adjust donut hole size
                }
            });
        })
        .catch(error => console.error('Error fetching data:', error));
</script>
  
            </section>
            <!--END Complaint Chart-->


            <section class="filters">
    <h2>Filtres</h2>
    <select id="type-filter">
        <option value="all">All</option>
        <option value="cours">Course</option>
        <option value="professeur">Professors</option>
        <option value="site_web">Technical Issues</option>
        <option value="Others">Others</option>
    </select>
    <button id="urgent-filter">Urgents</button>
</section>

<section class="reclamations-table">
    <h2>All Complaints</h2>
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Email</th>
                <th>Telephone</th>
                <th>Type</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody id="complaints-table-body">
            <!-- Complaints will be dynamically loaded here -->
            <?php foreach ($complaints as $cc): ?>
                <tr class="complaint-row" data-type="<?php echo htmlspecialchars($cc['type_reclamation']); ?>">
                    <td><?php echo htmlspecialchars($cc['nom']); ?></td>
                    <td><?php echo htmlspecialchars($cc['email']); ?></td>
                    <td><?php echo htmlspecialchars($cc['telephone']); ?></td>
                    <td><?php echo htmlspecialchars($cc['type_reclamation']); ?></td>
                    <td><?php echo htmlspecialchars($cc['description']); ?></td>
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
                <!------- tableau theni --------------->
                <h2>Approved Complaints</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Email</th>
                            <th>Telephone</th>
                            <th>Type</th>
                            <th>Description</th>
                            <th>Message</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!---- contenuuuuuuuuuuuuuuu--->
                          
                        <?php foreach ($complaintsA as $cc): ?>
    <tr>
        <td>
            <?php echo htmlspecialchars($cc['nom']); ?>
        </td>  
        <td>
            <?php echo htmlspecialchars($cc['email']); ?>
        </td>  
        <td>
            <?php echo htmlspecialchars($cc['telephone']); ?>
        </td>  
        <td>
            <?php echo htmlspecialchars($cc['type_reclamation']); ?>
        </td>  
        <td>
            <?php echo htmlspecialchars($cc['description']); ?>
        </td>  
        <td>
            <?php
            // Assuming $complaintController is the object of the controller containing showreponse
            $rep = $c->showreponse($cc['id_form']); // Use the controller object
            if (!empty($rep)) {
                foreach ($rep as $repon) {
                    echo htmlspecialchars($repon['rep']); // Safely display each response
                }
            } else {
                echo "No responses available.";
            }
            ?>
        </td> 
    </tr>
<?php endforeach; ?>






                        <!---- contenuuuuuuuuuuuuuuu--->
                    </tbody>
                </table>
                <!----- wfe el tableauu el theni-------->
                 <!------- tableau theleth --------------->
                 <h2>Pending Complaints</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Email</th>
                            <th>Telephone</th>
                            <th>Type</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!---- contenuuuuuuuuuuuuuuu--->
                          
                            <?php foreach ($complaintsD as $cc): ?>
                                <tr>
                                <td>
                                        <?php echo htmlspecialchars($cc['nom'] ); ?>
                                    </td>  
                                      <td>
                                        <?php echo htmlspecialchars($cc['email'] ); ?>
                                    </td>  
                                      <td>
                                        <?php echo htmlspecialchars($cc['telephone'] ); ?>
                                    </td>  
                                      <td>
                                        <?php echo htmlspecialchars($cc['type_reclamation'] ); ?>
                                    </td>  
                                    <td>
                                        <?php echo htmlspecialchars($cc['description'] ); ?>
                                    </td>  
                                    <td>
        <button class="openModal" data-id="<?php echo $cc['id_form']; ?>">Review Complaint</button>
    </td>
                                 
                                </tr>
                                <?php endforeach; ?>





                        <!---- contenuuuuuuuuuuuuuuu--->
                    </tbody>
                </table>
                <!----- wfe el tableauu el theleth-------->
            </section>
        </main>
    </div>

    <!-- Page 2: Voir Réclamation -->
    <div id="page2" class="page">
        <header>
            <h1>Complaint Details</h1>
        </header>
        <main>
            <div id="reclamation-details">
                <!-- Détails de la réclamation -->
            </div>
            <button id="back-to-page1">Back</button>
        </main>
    </div>

    <!-- Page 3: Résoudre Réclamation -->
    <div id="page3" class="page">
        <header>
            <h1>Complaint Resolution</h1>
        </header>
        <main>
            <div id="resolution-details">
                <!-- Détails pour la résolution -->
            </div>
            <textarea id="resolution-text" placeholder="Add solution..."></textarea>
            <button id="submit-resolution">Submit</button>
            <button id="back-to-page1-resolver">Back</button>
        </main>
    </div>

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
    <!--- code modal (chebek)-->

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
        <div>
            <a id="approveLink" href="#">
                <button style="background-color: #28a745; color: white; border: none; padding: 10px 15px; border-radius: 5px; cursor: pointer;">
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


     <!-- end  of the window -->

</body>
</html>