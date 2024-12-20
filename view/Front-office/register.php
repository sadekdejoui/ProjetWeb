<?php
require '../../config.php';
require '../../PHPMailer/src/PHPMailer.php';
require '../../PHPMailer/src/SMTP.php';
require '../../PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

try {
    $pdo = config::getConnexion();

    if (isset($_GET['id_evenement']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
        $id_evenement = (int)$_GET['id_evenement'];
        $id_user = (int)$_POST['id_user'];
        $password = $_POST['password'];
        $notes = $_POST['notes']; // Capture the notes input

        // Validate user credentials
        $userQuery = "SELECT * FROM utilisateur WHERE id = :id_user AND psw = :password";
        $userStmt = $pdo->prepare($userQuery);
        $userStmt->bindParam(':id_user', $id_user, PDO::PARAM_INT); // Match placeholder in SQL
        $userStmt->bindParam(':password', $password, PDO::PARAM_STR);
        $userStmt->execute();
        $user = $userStmt->fetch(PDO::FETCH_ASSOC);        

        if (!$user) {
            die("Invalid credentials.");
        }

        // Check if already registered
        $alreadyRegisteredQuery = "SELECT * FROM inscription WHERE id_evenement = :id_evenement AND id_user = :id_user";
        $alreadyRegisteredStmt = $pdo->prepare($alreadyRegisteredQuery);
        $alreadyRegisteredStmt->bindParam(':id_evenement', $id_evenement, PDO::PARAM_INT);
        $alreadyRegisteredStmt->bindParam(':id_user', $id_user, PDO::PARAM_INT);
        $alreadyRegisteredStmt->execute();
        $alreadyRegistered = $alreadyRegisteredStmt->fetch();

        if ($alreadyRegistered) {
            echo "You are already registered for this event.";
        } else {
            // Check capacity
            $capacityQuery = "SELECT COUNT(*) as total FROM inscription WHERE id_evenement = :id_evenement";
            $capacityStmt = $pdo->prepare($capacityQuery);
            $capacityStmt->bindParam(':id_evenement', $id_evenement, PDO::PARAM_INT);
            $capacityStmt->execute();
            $currentRegistrations = $capacityStmt->fetchColumn();

            $eventQuery = "SELECT capacité_maximale FROM evénements WHERE id_evenement = :id_evenement";
            $eventStmt = $pdo->prepare($eventQuery);
            $eventStmt->bindParam(':id_evenement', $id_evenement, PDO::PARAM_INT);
            $eventStmt->execute();
            $eventCapacity = $eventStmt->fetchColumn();

            if ($currentRegistrations >= $eventCapacity) {
                echo "Event is fully booked.";
            } else {
                // Register user with notes
                $insertQuery = "INSERT INTO inscription (id_evenement, id_user, date_inscription, notes) 
                VALUES (:id_evenement, :id_user, NOW(), :notes)";
$insertStmt = $pdo->prepare($insertQuery);
$insertStmt->bindParam(':id_evenement', $id_evenement, PDO::PARAM_INT);
$insertStmt->bindParam(':id_user', $id_user, PDO::PARAM_INT);
$insertStmt->bindParam(':notes', $notes, PDO::PARAM_STR);
$insertStmt->execute();


                echo "Registration successful!";

                // Send confirmation email
                try {
                    $mail = new PHPMailer(true);

                    // Server settings
                    $mail->isSMTP();
                    $mail->Host = 'smtp.gmail.com'; // Replace with your SMTP host
                    $mail->SMTPAuth = true;
                    $mail->Username = 'lola07517@gmail.com'; // Replace with your email
                    $mail->Password = 'bdhv wqeu ypiu wgky';   // Replace with your email password
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                    $mail->Port = 587;

                    // Recipient and sender
                    $mail->setFrom('your-email@example.com', 'Event Organizer');
                    $mail->addAddress($user['email'], $user['nom']); // Use user's email and name

                    // Email content
                    $mail->isHTML(true);
                    $mail->Subject = 'Event Registration Confirmation';
                    $mail->Body = "
                        <h1>Registration Successful!</h1>
                        <p>Dear {$user['nom']},</p>
                        <p>You have successfully registered for the event. Thank you for joining us!</p>
                        <p>Event ID: $id_evenement</p>
                        <p>Notes: $notes</p>
                    ";

                    $mail->send();
                    echo " Confirmation email sent.";
                } catch (Exception $e) {
                    echo " Registration successful, but email could not be sent. Error: {$mail->ErrorInfo}";
                }
            }
        }
    } elseif (isset($_GET['id_evenement'])) {
        $id_evenement = (int)$_GET['id_evenement'];
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
    <link rel="shortcut icon" type="image/x-icon" href="..\Front-office\img\favicon.ico">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Jost:wght@500;600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="..\Front-office\lib\animate\animate.min.css" rel="stylesheet">
    <link href="..\Front-office\lib\owlcarousel\assets\owl.carousel.min.css" rel="stylesheet">
    <link href="..\Front-office\lib\lightbox\css\lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="..\Front-office\css\bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="..\Front-office\css\style.css" rel="stylesheet">
    <style>
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
                <span class="sr-only">Chargement</span>
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
                        <a href="..\Front-office\index2.php" class="nav-item nav-link ">Home</a>
                        <a href="..\Front-office\blog.php" class="nav-item nav-link ">Blog</a>
                        <a href="..\Front-office\Cours.html" class="nav-item nav-link ">Courses</a>
                        <a href="..\Front-office\ecahnge.html" class="nav-item nav-link">Questions</a>
                        <a href="..\Front-office\event.php" class="nav-item nav-link active">Events</a>
                        <a href="contact.php" class="nav-item nav-link ">Complaints</a>
                      
                    </div>
                </div>

                <div class="dropdowncomplaint" style="margin-right: 7px;">
                        <button class="dropdowncomplaint-button">Settings</button>
                        <div class="dropdowncomplaint-content">
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

            <div class="container-xxl py-5 bg-primary hero-header">
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5 py-5">
                        <div class="col-12 text-center">
                            <h1 class="text-white animated slideInDown">Evénements</h1>
                            <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <!-- Events Section Start -->
        <div class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                

                    <center><div id="errorMessages" style="color: red; margin-bottom: 10px;"></div>
                    <h1>Register for Event</h1></center>
            <center><form id="registerform" method="POST">
            <input type="hidden" name="id_evenement" value="<?= $id_evenement; ?>">
            <label for="id_user">User ID:</label>
            <input type="text" name="id_user" id="id_user" ><br><br>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" ><br><br>
            <label for="notes">Notes:</label><br>
            <textarea name="notes" id="notes" rows="4" cols="50" placeholder="Add notes here (optional)"></textarea><br><br>
            <button type="submit" style="background-color:#9465d4; color: white;">Register</button>
        </form></center>
                    
</div>
                
                
            </div>
        </div>
        <!-- Events Section End -->

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
                        <a class="btn btn-link" href="..\Front-office\blog.php">Blog</a>
                        <a class="btn btn-link" href="..\Front-office\Cours.html">    Cours</a>
                        <a class="btn btn-link" href="..\Front-office\ecahnge.html">Questions</a>
                        <a class="btn btn-link" href="..\Front-office\event.php">Evénement</a>
                        <a class="btn btn-link" href="..\Front-office\contact.php" class="nav-item nav-link">Complaint</a>
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
                                <a href="..\Front-office\index.php">Accueille</a>
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

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="..\Front-office\lib\wow\wow.js"></script>
    <script src="..\Front-office\lib\easing\easing.min.js"></script>
    <script src="..\Front-office\lib\waypoints\waypoints.min.js"></script>
    <script src="..\Front-office\lib\counterup\counterup.min.js"></script>
    <script src="..\Front-office\lib\owlcarousel\owl.carousel.min.js"></script>
    <script src="..\Front-office\lib\isotope\isotope.pkgd.min.js"></script>
    <script src="..\Front-office\lib\lightbox\js\lightbox.min.js"></script>

    <!-- Template Javascript -->
     <script src="js\scriptregister.js"></script>
    <script src="..\Front-office\js\main.js"></script>
</body>

</html>
<?php
    } else {
        echo "Invalid request.";
    }
} catch (Exception $e) {
    die("Error: " . $e->getMessage());
}
?>
