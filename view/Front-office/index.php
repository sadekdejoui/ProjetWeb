<?php
require '../../config.php';
include_once '../../Controller/NotificationC.php';
session_start();
$_SESSION['id']='1';
$notif=new NotificationC();
$all_notifs_any=$notif->showNotifAdmin();
$all_notifs=$notif->showNotifUserUnseen();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Questerra</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="../Front-office/img/favicon.ico">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <link rel="preconnect" href="https:/fonts.googleapis.com">
    <link rel="preconnect" href="https:/fonts.gstatic.com" crossorigin>
    <link href="https:/fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Jost:wght@500;600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https:/cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https:/cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../Front-office/lib/animate/animate.min.css" rel="stylesheet">
    <link href="../Front-office/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../Front-office/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../Front-office/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../Front-office/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


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
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <div class="logo-container">
                        <img src="..\Front-office\img\logo.png" alt="Logo de Questerra">
                        <h1 class="m-0">Questerra</h1>
                    </div>
                    
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto py-0">
                        <a href="..\Front-office\index2.php" class="nav-item nav-link active">Home</a>
                        <a href="..\Front-office\blog.php" class="nav-item nav-link">Blog</a>
                        <a href="..\Front-office\Cours.html" class="nav-item nav-link">Courses</a>
                        <a href="..\Front-office\ecahnge.html" class="nav-item nav-link">Questions</a>
                        <a href="..\Front-office\event.html" class="nav-item nav-link">Events</a>
                        <a href="contact.php" class="nav-item nav-link">Complaints</a>
                      
                    </div>
                </div>
              
                        <!--Notification-->
                        
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
                          <a href="..\Front-office\account.php">Mon compte</a>
                          <a href="..\Front-office\login.html">Se déconnecter</a>
                        </div>
                    </div>
                    <div class="dropdowncomplaint">

                      <button class="dropdowncomplaint-button">Complaint</button>
                        <div class="dropdowncomplaint-content">
                        <a href="..\Front-office\contact.php">Add Complaint</a>
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
 

















            <div class="container-xxl bg-primary hero-header">
                <div class="container px-lg-5">
                    <div class="row g-5 align-items-end">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="text-white mb-4 animated slideInDown"><br>Unlock your potential. </br>Level up your skills.</h1>
                            <p class="text-white pb-3 animated slideInDown">"Discover an online learning platform that adapts to your lifestyle. Learn new skills at your own pace, with a focus on innovation and sustainable growth, all while empowering your journey."</p>
                            <a href="..\Front-office\Cours.html" class="btn btn-secondary py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">See More</a>
                            <!--<a href="login.html">Login</a>-->
                        </div>
                        <div class="col-lg-6 text-center text-lg-start">
                            <img class="img-fluid animated zoomIn" src="img/hero.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Feature Start -->
        <div class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <p class="section-title text-secondary justify-content-center"><span></span>Our Services.<span></span></p>
                    <!--<h1 class="text-center mb-5">Quelles solutions proposons-nous</h1>-->
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item d-flex flex-column text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-search fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Personalized Courses and Training</h5>
                            <p class="m-0">Adaptive learning paths for each user.</p>
                            
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item d-flex flex-column text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-laptop-code fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Community and Discussion Forum</h5>
                            <p class="m-0">A collaborative space where users can ask questions, exchange ideas, and learn from each other.</p>
                            
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item d-flex flex-column text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fab fa-facebook-f fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Skills Certification</h5>
                            <p class="m-0">End-of-course assessments that lead to certifications recognized in the professional field.</p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature End -->


        <!-- About Start -->
        <div class="container-xxl py-5">
            
            <div class="container py-5 px-lg-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <p class="section-title text-secondary">About Us<span></span></p>
                        <h1 class="mb-5">Questerra</h1>
                        <p class="mb-4">At Questerra, we transform online learning with an interactive platform, offering unlimited courses tailored to each user's growth needs.</p>
                        <div class="skill mb-4">
                            <div class="d-flex justify-content-between">
                                <p class="mb-2">Students and recent graduates.</p>
                                <p class="mb-2">30%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="skill mb-4">
                            <div class="d-flex justify-content-between">
                                <p class="mb-2">Professionals in career transition.</p>
                                <p class="mb-2">25%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="skill mb-4">
                            <div class="d-flex justify-content-between">
                                <p class="mb-2">Learning enthusiasts</p>
                                <p class="mb-2">20%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="skill mb-4">
                            <div class="d-flex justify-content-between">
                                <p class="mb-2">Companies and Organizations</p>
                                <p class="mb-2">15%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="skill mb-4">
                            <div class="d-flex justify-content-between">
                                <p class="mb-2">Educational Institutions and Universities</p>
                                <p class="mb-2">10%</p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-lg-6">
                        <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="img/about.png">
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Facts Start -->
        <div class="container-xxl bg-primary fact py-5 wow fadeInUp" data-wow-delay="0.1s">
           <!-- <div class="container py-5 px-lg-5">
                <p class="section-title text-secondary justify-content-center"><span></span>Nos services<span></span></p>
                
            </div>-->
        </div>
        <!-- Facts End -->


        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <p class="section-title text-secondary justify-content-center"><span></span>Our Top Courses<span></span></p>
                    <!--<h1 class="text-center mb-5">Quelles solutions proposons-nous</h1>-->
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item d-flex flex-column text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-search fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Languages</h5>
                            <p class="m-0"> Enhance your language skills at all levels.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item d-flex flex-column text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-laptop-code fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Web Design</h5>
                            <p class="m-0"> Create aesthetic and functional websites.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item d-flex flex-column text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fab fa-facebook-f fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Marketing</h5>
                            <p class="m-0">Learn strategies to succeed in modern marketing.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item d-flex flex-column text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-mail-bulk fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Science</h5>
                            <p class="m-0">Explore the fundamentals of biology, chemistry, and physics.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item d-flex flex-column text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-thumbs-up fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Electronics</h5>
                            <p class="m-0">Learn the basics of circuit and electronic system design.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item d-flex flex-column text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fab fa-android fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Software Development</h5>
                            <p class="m-0">Master the basics of coding and software.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->


        <!-- Newsletter Start -->
        <div class="container-xxl bg-primary newsletter py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="row justify-content-center">
                    <div class="col-lg-7 text-center">
                        <h1 class="text-center text-white mb-4">Stay connected at all times.</h1>
                        <div class="position-relative w-100 mt-3">
                            <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="Entrez votre email" style="height: 48px;">
                            <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i class="fa fa-paper-plane text-primary fs-4"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter End -->


        <!-- Projects Start -->
        <div class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <p class="section-title text-secondary justify-content-center"><span></span>Our Events<span></span></p>
                    <!--<h1 class="text-center mb-5">Projets récemment terminés</h1>-->
                </div>
                <div class="row g-4 portfolio-container">
                    <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/portfolio-1.jpg" alt="">
                                
                            </div>
                            <div class="bg-light p-4">
                                <p class="text-primary fw-medium mb-2">Website Design</p><br>
                                <h5 class="lh-base mb-0">Create aesthetic and functional websites.</a><br>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.3s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/portfolio-2.jpg" alt="">
                                
                            </div>
                            <div class="bg-light p-4">
                                <p class="text-primary fw-medium mb-2"> Adobe Illustrator - Création de logo</p><br>
                                <h5 class="lh-base mb-0">Création d'un logo pour une marque de vêtements écologique.</a><br>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.5s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/portfolio-3.jpg" alt="">
                               
                            </div>
                            <div class="bg-light p-4">
                                <p class="text-primary fw-medium mb-2">Analyse des Réseaux Sociaux</p><br>
                                <h5 class="lh-base mb-0">Analyse des performances des réseaux sociaux pour une petite entreprise.</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.1s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/portfolio-4.jpg" alt="">
                                
                            </div>
                            <div class="bg-light p-4">
                                <p class="text-primary fw-medium mb-2">Campagne de Marketing Digital</p><br>
                                <h5 class="lh-base mb-0">Lancement d'une campagne publicitaire pour promouvoir un produit local.       </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.3s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/portfolio-5.jpg" alt="">
                               
                            </div>
                            <div class="bg-light p-4">
                                <p class="text-primary fw-medium mb-2">Application Mobile</p><br>
                                <h5 class="lh-base mb-0">Développement d'une application pour suivre les habitudes de santé.   </a><br>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.5s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/portfolio-6.jpg" alt="">
                                
                            </div>
                            <div class="bg-light p-4">
                                <p class="text-primary fw-medium mb-2">Vidéo de Présentation</p><br>
                                <h5 class="lh-base mb-0">Création d'une vidéo pour présenter les services d'une agence de voyage.</a><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Projects End -->


        <!-- Testimonial Start -->
        <!-- Section Besoin d'aide -->
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
            <h2 class="mb-4">Besoin d'aide ?</h2>
            <p class="mb-4">Si vous rencontrez un problème ou si vous avez une question, nous sommes là pour vous aider. N’hésitez pas à nous faire part de vos préoccupations.</p>
           <!-- <a href="../Front-office/les taches/maram/contact.html" class="btn btn-custom py-2 px-4 ms-3 d-none d-lg-block">Faire une réclamation</a>-->
        </div>
    </div>
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
                            <a class="btn btn-outline-light btn-social" href="https:/www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https:/www.instagram.com/"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https:/www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <p class="section-title text-white h5 mb-4">Lien rapide<span></span></p>
                        <a class="btn btn-link" href="..\Front-office\blog.php">Blog</a>
                        <a class="btn btn-link" href="..\Front-office\Cours.php">    Cours</a>
                        <a class="btn btn-link" href="..\Front-office\ecahnge.php">Questions</a>
                        <a class="btn btn-link" href="..\Front-office\event.php">Evénement</a>
                       <!-- <a class="btn btn-link" href="../Front-office/contact.php" class="nav-item nav-link">Complaint</a>-->
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
                                <a href="..\Front-office\index2.php">Accueille</a>
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
    <script src="https:/code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https:/cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../Front-office/lib/wow/wow.js"></script>
    <script src="../Front-office/lib/easing/easing.min.js"></script>
    <script src="../Front-office/lib/waypoints/waypoints.min.js"></script>
    <script src="../Front-office/lib/counterup/counterup.min.js"></script>
    <script src="../Front-office/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../Front-office/lib/isotope/isotope.pkgd.min.js"></script>
    <script src="../Front-office/lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="../Front-office/js/main.js"></script>
    <!--<script src="../Front-office/contactScript.js"></script>-->



  
</body>

</html>