
<?php
require '../../config.php'; 
require_once '../../model/Formulaire.php';
include_once '../../controller/FormulaireC.php';
include_once '../../controller/NotificationC.php';
$sent_by=1;
$id_user=1;
$notif=new NotificationC();
$all_notifs_any=$notif->showNotifAdmin();
$all_notifs=$notif->showNotifUserUnseen();



// Fetch only unseen notifications sent by the admin
if (($_SERVER['REQUEST_METHOD'] === 'POST') && (isset($_POST['submit']))) {
    // Retrieve form inputs
    $nom = htmlspecialchars($_POST['nom']);
    $identifiant = '1';
    $email = htmlspecialchars($_POST['email']);
    $telephone = htmlspecialchars($_POST['telephone']);
    $type_reclamation = htmlspecialchars($_POST['type_reclamation']);
    $prof = isset($_POST['prof']) ? htmlspecialchars($_POST['prof']) : "";
    $service = isset($_POST['service']) ? htmlspecialchars($_POST['service']) : "";
    $description = htmlspecialchars($_POST['description']);
    $urgent = isset($_POST['urgent']) ? 1 : 0;

   
    // Save the complaint using FormulaireC
    $formulaireC = new FormulaireC();
    $contenu = ("New Complaint submitted by a student");
    $lastId=$formulaireC->addComplaint($nom, $identifiant, $email, $telephone, $type_reclamation, $prof, $service, $description, $urgent);
    $notif->addNotification($contenu,$id_user,$sent_by,$lastId,null);

    // Redirect or display a success message
 //header("Location: ./thankyou.html");
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">

<meta charset="utf-8">
    <title>Questerra</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="../Front_Office/img/favicon.ico">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <link rel="preconnect" href="https:/fonts.googleapis.com">
    <link rel="preconnect" href="https:/fonts.gstatic.com" crossorigin>
    <link href="https:/fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Jost:wght@500;600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https:/cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https:/cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../Front_Office/lib/animate/animate.min.css" rel="stylesheet">
    <link href="../Front_Office/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../Front_Office/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../Front_Office/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../Front_Office/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


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



    /* General styles */
.notification-author {
    background-color: #ffffff;
    border-radius: 12px;
    box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.15);
    width: 320px;
    overflow: hidden;
    padding: 0;
    font-family: 'Arial', sans-serif;
}

.notification-single-top {
    padding: 20px;
    border-bottom: 1px solid #e0e0e0;
    background-color: #f8f8fc;
    text-align: center;
}

.notification-single-top h6 {
    margin: 0;
    font-size: 18px;
    font-weight: bold;
    color: #222222;
}

.notification-menu {
    list-style: none;
    margin: 0;
    padding: 0;
    max-height: 300px;
    overflow-y: auto;
}

.notification-menu li {
    display: flex;
    align-items: center;
    border-bottom: 1px solid #e0e0e0;
    padding: 12px;
    transition: background-color 0.3s ease, transform 0.2s ease;
    cursor: pointer;
}

.notification-menu li:hover {
    background-color: #f2f2ff;
    transform: translateY(-2px);
}

.notification-icon {
    margin-right: 15px;
    color: #5a67d8;
    font-size: 24px;
}

.notification-content {
    flex: 1;
}

.notification-content h2 {
    margin: 0 0 4px;
    font-size: 15px;
    font-weight: bold;
    color: #333333;
}

.notification-content h2 .icon-wrap {
    font-size: 12px;
    color: #999999;
    margin-left: 6px;
}

.notification-date {
    font-size: 12px;
    color: #bbbbbb;
    margin-bottom: 6px;
}

.notification-content p {
    margin: 0;
    font-size: 14px;
    color: #555555;
}

.notification-view {
    text-align: center;
    padding: 15px;
    border-top: 1px solid #e0e0e0;
    background-color: #f8f8fc;
}

.notification-view a {
    color: #5a67d8;
    font-size: 14px;
    font-weight: bold;
    text-decoration: none;
    transition: color 0.3s ease;
}

.notification-view a:hover {
    color: #6b46c1; /* Purple hover effect */
    text-decoration: underline;
}

</style>
   

   <style>
       /* Form Container Styling */
#form-container {
    max-width: 800px;
    margin: 100px auto; /* Adjusted to keep the form centered but not too high */
    padding: 30px;
    border-radius: 12px;
    background: #f9f9f9;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    font-family: Arial, sans-serif;
}

/* General Form Styling */
.form-group {
    margin-bottom: 20px;
}

label {
    font-weight: bold;
    display: block;
    margin-bottom: 5px;
    color: #333;
}

input[type="text"],
textarea,
select {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 6px;
    font-size: 16px;
    color: #333;
}

textarea {
    resize: vertical;
}

input[type="file"] {
    font-size: 14px;
    background-color: #b39ddb;
    color: white;
    border: none;
    border-radius: 20px;
    padding: 10px 15px;
    cursor: pointer;
    transition: all 0.3s ease;
}

input[type="file"]:hover {
    background-color: #ffecb3;
    color: #333;
}

input:focus, 
textarea:focus, 
select:focus {
    outline: none;
    border-color: #a680ff;
    box-shadow: 0 0 5px rgba(166, 128, 255, 0.5);
}

/* Submit Button Styling */
button.submit-btn {
    display: block;
    margin: 20px auto 0;
    background-color: #b39ddb;
    color: white;
    padding: 12px 25px;
    font-size: 18px;
    border: none;
    border-radius: 20px;
    cursor: pointer;
    transition: all 0.3s ease;
}

button.submit-btn:hover {
    background-color: #ffecb3;
    color: #333;
    transform: scale(1.05);
}

/* Checkbox Styling */
.form-check-input {
    margin-right: 10px;
}

/* Responsive Design */
@media (max-width: 768px) {
    #form-container {
        padding: 20px;
    }

    button.submit-btn {
        width: 100%;
    }
}

.dropdowncomplaint-content {
    display: none;
    position: absolute;
    background-color: #fff;
    min-width: 200px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
    border-radius: 6px;
    overflow: hidden;
    z-index: 1;
}

.dropdowncomplaint-content a {
    color: #333;
    padding: 10px 15px;
    text-decoration: none;
    display: block;
    font-size: 14px;
    transition: background-color 0.3s ease, color 0.3s ease;
}

.dropdowncomplaint-content a:hover {
    background-color: #b39ddb;
    color: white;
}

/* Show Dropdown on Hover */
.dropdowncomplaint:hover .dropdowncomplaint-content {
    display: block;
}
    </style>
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Chargement...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
<!-- Navbar & Hero Start -->
<div class="container-xxl position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
        <a href="" class="navbar-brand p-0">
            <div class="logo-container">
                <img src="../Front_Office/img/logo.png" alt="Logo de Questerra">
                <h1 class="m-0">Questerra</h1>
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto py-0">
                <a href="../Front_Office/index.php" class="nav-item nav-link">Accueil</a>
                <a href="C:\Users\bessa\Downloads\wetransfer_projet-web_2024-11-16_2230\Projet Web\view\Front_Office\les taches\imen\blog.html" class="nav-item nav-link ">Blog</a>
                <a href="C:\Users\bessa\Downloads\wetransfer_projet-web_2024-11-16_2230\Projet Web\view\Front_Office\les taches\akrem\Cours.html" class="nav-item nav-link ">Cours</a>
                <a href="C:\Users\bessa\Downloads\wetransfer_projet-web_2024-11-16_2230\Projet Web\view\Front_Office\les taches\firas\ecahnge.html" class="nav-item nav-link ">Questions</a>
                <a href="C:\Users\bessa\Downloads\wetransfer_projet-web_2024-11-16_2230\Projet Web\view\Front_Office\les taches\nader\event.html" class="nav-item nav-link ">Evénement</a>
                <a href="../Front_Office/contact.php" class="nav-item nav-link active">Complaint</a>
            </div>
        </div>
        

    <!----------------------------------------START NOTIFICATION REC-------------------------------->
 <ul class="nav navbar-nav mai-top-nav header-right-menu">
<li class="nav-item">
    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
    <i class="material-icons" aria-hidden="true">notifications</i>
        <span class="indicator-nt"></span>
    </a>
    <div role="menu" class="notification-author dropdown-menu animated zoomIn">
        <div class="notification-single-top">
            <h6>Notifications</h6>
        </div>
        <ul class="notification-menu">
            <?php foreach($all_notifs as $notf) { ?>
                <li>
                    <a href="seennotifFRONT.php?id=<?php echo $notf['id_notif']; ?>&id_res=<?php echo $notf['id_comp']; ?>">
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
</ul>
        <!----------------------------------------END notif Rec------------------------------------------------->
              
                   
                    <div class="dropdown">
                        <button class="dropdown-button">Settings</button>
                        <div class="dropdown-content">
                          <a href="../Front_Office/les taches/sadek/account.html">Mon compte</a>
                          <a href="../Front_Office/les taches/sadek/index.php">Se déconnecter</a>
                        </div>
                    </div>
                    <div class="dropdowncomplaint">
                      <button class="dropdowncomplaint-button">Complaint</button>
                        <div class="dropdowncomplaint-content">
                        <a href="../Front_Office/contact.php">Add Complaint</a>
                          <!--<a href="./history.php">View Complaints</a>-->
                          <a href="./ComplaintResponse.php">Complaint Progress</a>
                        </div>
                    </div>


                    
            </nav>

            <!-- ending of header -->
<!----------------------------------------START NOTIFICATION REC-------------------------------->
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
 <!----------------------------------------END NOTIFICATION REC-------------------------------->
 
        <!-- Navbar & Hero End -->

        <div class="container-xxl py-5 bg-primary hero-header">
            <div class="container my-5 py-5 px-lg-5">
                <div class="row g-5 py-5">
                    <div class="col-12 text-center">
                        <h1 class="text-white animated slideInDown">Complaint Form :</h1>
                        <p class="text-white pb-3 animated slideInDown">
                            "If you encounter any issues or have any questions, we are here to assist you. Feel free to share your concerns with us."
                        </p>
                        <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Form avant le php-->
    <div id="form-container" class="form-container">
    <form  method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="nom">Full Name:
                <button style="font-size: 16px;
            padding: 10px;
            background-color: transparent;
            border: none;
            cursor: pointer;" id="startButtonNom"><i class="fas fa-microphone"></i></button>
                
            </label>
            <input type="text" id="nom" name="nom">
        </div>

        <div class="form-group">
            <label for="identifiant">ID:
                <button style="font-size: 16px;
            padding: 10px;
            background-color: transparent;
            border: none;
            cursor: pointer;" id="startButtonId"><i class="fas fa-microphone"></i></button>

            </label>
            <input type="text" id="identifiant" name="identifiant">
        </div>

        <div class="form-group">
            <label for="email">E-mail Address:
                <button style="font-size: 16px;
            padding: 10px;
            background-color: transparent;
            border: none;
            cursor: pointer;" id="startButtonEmail"><i class="fas fa-microphone"></i></button>
            </label>
            <input type="text" id="email" name="email">
        </div>

        <div class="form-group">
            <label for="telephone">Phone Number:
                <button style="font-size: 16px;
            padding: 10px;
            background-color: transparent;
            border: none;
            cursor: pointer;" id="startButtonPhone"><i class="fas fa-microphone"></i></button>
            </label>
            <input type="text" id="telephone" name="telephone">
        </div>

        <div class="form-group">
            <label for="type_reclamation">Type of Complaint:
                
            </label>
            <select id="type_reclamation" name="type_reclamation" onchange="verifierTypeReclamation()">
                <option value="">-- Select a type of complaint --</option>
                <option value="professeur">Complaint about a professor</option>
                <option value="cours">Complaint about a course</option>
                <option value="site_web">Technical issue with the website</option>
                <option value="service_specifique">Complaint about a specific service</option>
                <option value="autre">Other</option>
            </select>
        </div>

        <div class="form-group" style="display: none;">
            <label for="prof">Teacher's Name:
                
            </label>
            <input type="text" id="prof" name="prof">
        </div>

        <div class="form-group" id="service-container" style="display: none;">
            <label for="service">Course or Service Concerned:
                
            </label>
            <select id="service" name="service">
                <option value="">-- Select a subject --</option>
                <option value="architecture">Architecture</option>
                <option value="marketing">Marketing</option>
                <option value="francais">French</option>
                <option value="anglais">English</option>
                <option value="informatique">Computer Science</option>
                <option value="sciences">Scientific Subjects</option>
            </select>
        </div>

        <div class="form-group">
            <label for="description">Detailed Description:
                <button style="font-size: 16px;
            padding: 10px;
            background-color: transparent;
            border: none;
            cursor: pointer;" id="startButtonDescription"><i class="fas fa-microphone"></i></button>
            </label>
            <textarea id="description" name="description" rows="5"></textarea>
        </div>

        <div class="form-group">
            <label for="pieces_jointes">Download Files:</label>
            <input type="file" id="file" name="file[]" multiple>
        </div>

        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="urgent">
            <label class="form-check-label" for="urgent">Marked as URGENT</label>
        </div>

        <button id="submit" name="submit" class="submit-btn">Submit</button>





</div>

    
     
<!----------------------------------------------------->

     
<div id="message-merci" class="merci-message" style="display: none;">
<h2>Thank you for your input!</h2><br>
<p>Your complaint has been successfully submitted. We will process it as soon as possible.</p>
</div>
        
<!-- Footer Start -->
<div class="container-fluid bg-primary text-light footer wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5 px-lg-5">
        <div class="row g-5">
            <div class="col-md-6 col-lg-3">
                <p class="section-title text-white h5 mb-4">Address<span></span></p>
                <p><i class="fa fa-map-marker-alt me-3"></i>2083 Cité La Gazelle, Ariana, Tunisia</p>
                <p><i class="fa fa-phone-alt me-3"></i>+016 23 989 000</p>
                <p><i class="fa fa-envelope me-3"></i>questerra@gmail.com</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-outline-light btn-social" href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <p class="section-title text-white h5 mb-4">Lien rapide<span></span></p>
                <a class="btn btn-link" href="C:\Users\bessa\Downloads\wetransfer_projet-web_2024-11-16_2230\Projet Web\view\Front_Office\les taches\imen\blog.html">Blog</a>
                <a class="btn btn-link" href="C:\Users\bessa\Downloads\wetransfer_projet-web_2024-11-16_2230\Projet Web\view\Front_Office\les taches\akrem\Cours.html">    Cours</a>
                <a class="btn btn-link" href="C:\Users\bessa\Downloads\wetransfer_projet-web_2024-11-16_2230\Projet Web\view\Front_Office\les taches\firas\ecahnge.html">Questions</a>
                <a class="btn btn-link" href="C:\Users\bessa\Downloads\wetransfer_projet-web_2024-11-16_2230\Projet Web\view\Front_Office\les taches\nader\event.html">Evénement</a>
                <a class="btn btn-link" href="C:\Users\bessa\Downloads\wetransfer_projet-web_2024-11-16_2230\Projet Web\view\Front_Office\les taches\maram\contact.html" class="nav-item nav-link">Complaint</a>
            </div>
            <div class="col-md-6 col-lg-3">
                <p class="section-title text-white h5 mb-4">Founders<span></span></p>
                <div class="row g-2">
                    <p>Akrem Jouini</p>
                    <p>Firas Ben Hamouda</p>
                    <p>Imen Goutali</p>
                    <p>Maram Bessaoud</p>
                    <p>Mohamed Sadek Dejoui</p>
                    <p>Nader Abdellaoui</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <p class="section-title text-white h5 mb-4">Rapport<span></span></p>
                <div class="position-relative w-100 mt-3">
                    <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="Votre email" style="height: 48px;">
                    <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i class="fa fa-paper-plane text-primary fs-4"></i></button>
                </div>
            </div>
        </div>
    </div>
    <div class="container px-lg-5">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <div class="footer-menu">
                        <a href="../Front_Office/index.html">Accueille</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-secondary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>
<!----------------------------------------START NOTIFICATION REC-------------------------------->
<script>
 document.querySelectorAll('.openNotificationPopup').forEach(button => {
    button.addEventListener('click', function () {
        console.log("Button clicked");  // This should log when the button is clicked
        const modal = document.getElementById('notificationModal');
        modal.style.display = 'block'; // Show the modal

        // Fetch notifications and populate the modal
        fetch('fetch_notifFRONT.php')
            .then(response => response.json())
            .then(data => {
                console.log('Fetched Data:', data);  // Log the fetched data
                const detailsDiv = document.getElementById('notificationDetails');
                if (data.length > 0) {
                    detailsDiv.innerHTML = data.map(notification => `
                        <div style="border: 1px solid #ddd; padding: 10px; margin-bottom: 10px;">
                            <p><strong>Complaint:</strong> ${notification.contenu}</p>
                            
                            <a href="ComplaintResponse.php?id=${notification.id_notif}" style="text-decoration: none;">
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
 <!----------------------------------------END NOTIFICATION REC-------------------------------->


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="../Front_Office/lib/wow/wow.js"></script>
<script src="../Front_Office/lib/easing/easing.min.js"></script>
<script src="../Front_Office/lib/waypoints/waypoints.min.js"></script>
<script src="../Front_Office/lib/counterup/counterup.min.js"></script>
<script src="../Front_Office/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="../Front_Office/lib/isotope/isotope.pkgd.min.js"></script>
<script src="../Front_Office/lib/lightbox/js/lightbox.min.js"></script>

<!-- Template Javascript--> 
<script src="../Front_Office/js/main.js"></script>
<script>
    function afficherMessageMerci() {
        document.getElementById("form-container").style.display = "none";
        document.getElementById("message-merci").style.display = "flex";
    }

    function verifierTypeReclamation() {
        const typeReclamation = document.getElementById("type_reclamation").value;
        const champProf = document.getElementById("prof");
        const champService = document.getElementById("service-container");

        if (typeReclamation === "professeur") {
            champProf.required = true;
            champProf.parentNode.style.display = "block"; // Affiche le champ "Nom de l'enseignant"
            champService.style.display = "none"; // Cache "Cours ou Service"
        } else if (typeReclamation === "cours") {
            champService.style.display = "block"; // Affiche "Cours ou Service"
            champProf.parentNode.style.display = "none"; // Cache "Nom de l'enseignant"
            champProf.required = false;
        } else {
            champProf.parentNode.style.display = "none";
            champService.style.display = "none";
            champProf.required = false;
        }
    }
</script>
<!--<script src="../Front_Office/js/contactScript.js"></script>-->
</body>
<body>
    <!---------------------CONTROL DE SAISIE ----------------------->
    <script>
   document.addEventListener("DOMContentLoaded", function () {
        function validateForm(event) {
            const nom = document.getElementById("nom");
            const identifiant = document.getElementById("identifiant");
            const email = document.getElementById("email");
            const telephone = document.getElementById("telephone");
            const description = document.getElementById("description");
            const type_reclamation = document.getElementById("type_reclamation");

            // Regular expressions
            const nameRegex = /^[A-Za-zÀ-ÿ]+ [A-Za-zÀ-ÿ]+$/;
            const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
            const phoneRegex = /^[0-9]{8}$/;

            let isValid = true; // Tracks overall form validity
            let firstInvalidField = null; // Tracks the first invalid field

            // Helper function to set error message
            function setErrorMessage(field, message) {
                let errorContainer = field.nextElementSibling;
                if (!errorContainer || !errorContainer.classList.contains("field-error")) {
                    errorContainer = document.createElement("div");
                    errorContainer.classList.add("field-error");
                    errorContainer.style.color = "red";
                    errorContainer.style.fontSize = "0.9em";
                    errorContainer.style.marginTop = "5px";
                    field.parentNode.insertBefore(errorContainer, field.nextSibling);
                }
                errorContainer.textContent = message;
                if (isValid) {
                    isValid = false;
                    firstInvalidField = field; // Focus on the first invalid field
                }
            }

            // Helper function to clear error message
            function clearErrorMessage(field) {
                const errorContainer = field.nextElementSibling;
                if (errorContainer && errorContainer.classList.contains("field-error")) {
                    errorContainer.textContent = "";
                }
            }

            // Clear all error messages before validation
            clearErrorMessage(nom);
            clearErrorMessage(identifiant);
            clearErrorMessage(email);
            clearErrorMessage(telephone);
            clearErrorMessage(description);
            clearErrorMessage(type_reclamation);

            // Validation rules
            if (!nom.value) setErrorMessage(nom, "Full name is required.");
            else if (!nameRegex.test(nom.value)) setErrorMessage(nom, "The full name must consist of two parts (letters only) separated by a space.");

            if (!identifiant.value) setErrorMessage(identifiant, "Identifier is required.");

            if (!email.value) setErrorMessage(email, "Email address is required.");
            else if (!emailRegex.test(email.value)) setErrorMessage(email, "Please enter a valid email address (e.g., name@example.com).");

            if (!telephone.value) setErrorMessage(telephone, "Phone number is required.");
            else if (!phoneRegex.test(telephone.value)) setErrorMessage(telephone, "Please enter a valid phone number (8 digits).");

            if (!description.value) setErrorMessage(description, "Description is required.");

            if (!type_reclamation.value) setErrorMessage(type_reclamation, "Type of complaint is required.");

            // Prevent form submission if invalid and scroll to the first invalid field
            if (!isValid) {
                event.preventDefault();
                firstInvalidField.scrollIntoView({ behavior: "smooth", block: "center" });
                firstInvalidField.focus();
            }
        }

        const form = document.querySelector("form");
        form.addEventListener("submit", validateForm);
    });
</script>


    </script>
   
    <!--------lel record mic----->
    <script>
// Open Modal on Button Click    let recognition;
    let isRecording = false;  // To track the recording state

// Check if the browser supports speech recognition
if ('webkitSpeechRecognition' in window) {
    recognition = new webkitSpeechRecognition();
    recognition.continuous = false;
    recognition.interimResults = false;
    recognition.lang = 'en-US';

    // Function to handle speech input for different fields
    function startSpeechRecognition(buttonId, fieldId) {
        document.getElementById(buttonId).onclick = function() {
            if (isRecording) {
                recognition.stop(); // Stop recording if it's already recording
            } else {
                recognition.start(); // Start recording if not already
            }

            recognition.onresult = function(event) {
    const transcript = event.results[0][0].transcript;

    // Remove the trailing period if it exists
    const cleanedTranscript = transcript.replace(/\.$/, '');

    // Update the input field with the speech transcript
    const field = document.getElementById(fieldId);
    if (field.tagName === 'INPUT') {
        field.value = cleanedTranscript;  // Set value for input and textarea fields
    }else if(field.tagName === 'TEXTAREA'){
        field.innerHTML=cleanedTranscript;
    } 
    else {
        field.placeholder = cleanedTranscript; // Set placeholder if not an input or textarea
    }
};


            // Update the button icon when speech recognition starts or stops
            recognition.onstart = function() {
                isRecording = true;
                document.getElementById(buttonId).innerHTML = '<i class="fas fa-circle-notch fa-spin"></i>'; // Show recording icon
            };

            recognition.onend = function() {
                isRecording = false;
                document.getElementById(buttonId).innerHTML = '<i class="fas fa-microphone"></i>'; // Show microphone icon again
            };

            recognition.onerror = function(event) {
                console.error('Error occurred in speech recognition: ', event.error);
            };
        };
    }

    // Start speech recognition for each input field
    startSpeechRecognition('startButtonNom', 'nom');
    startSpeechRecognition('startButtonId', 'identifiant');
    startSpeechRecognition('startButtonEmail', 'email');
    startSpeechRecognition('startButtonPhone', 'telephone');
    startSpeechRecognition('startButtonDescription', 'description');
} else {
    console.error('Speech recognition is not supported in this browser.');
}




    </script>
</body>
</html>
