<?php
// Inclure la bibliothèque FPDF
require('C:\xampp\htdocs\akrem web\View\Front_Office\fpdf.php\fpdf186\fpdf.php');

// Connexion à la base de données MySQL
$servername = "localhost";
$username = "root";  // Remplacez par votre utilisateur MySQL
$password = "";      // Remplacez par votre mot de passe MySQL
$dbname = "base de données 1";  // Nom de votre base de données

// Création de la connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérification de la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Traitement du formulaire après soumission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les informations de l'utilisateur
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);
    
    // Insertion des informations de l'utilisateur dans la table 'users'
    $stmt = $conn->prepare("INSERT INTO users (name, phone, email) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $phone, $email);
    $stmt->execute();
    $userId = $stmt->insert_id;  // Récupérer l'ID de l'utilisateur

    // Récupérer les réponses du quiz depuis le formulaire
    $answers = $_POST;

    // Récupérer les questions depuis la base de données
    $questionsQuery = "SELECT id, correct_answer FROM questions4";
    $result = $conn->query($questionsQuery);

    $score = 0;
    $totalQuestions = $result->num_rows;

    // Calculer le score
    while ($row = $result->fetch_assoc()) {
        $questionId = $row['id'];
        $correctAnswer = $row['correct_answer'];
        if (isset($answers["q$questionId"]) && $answers["q$questionId"] === $correctAnswer) {
            $score++;
        }
    }

    $percentageScore = ($score / $totalQuestions) * 100;
    $passed = $percentageScore >= 80;

    // Générer le certificat PDF si l'utilisateur a réussi
    if ($passed) {
        // Créer un certificat en PDF
        $pdf = new FPDF();
        $pdf->AddPage();
        $pdf->SetFont('Arial', 'B', 16);
        $pdf->Cell(200, 10, "Certificate of Completion", 0, 1, 'C');
        $pdf->Ln(10);
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(200, 10, "This is to certify that", 0, 1, 'C');
        $pdf->Ln(5);
        $pdf->SetFont('Arial', 'I', 14);
        $pdf->Cell(200, 10, $name, 0, 1, 'C');
        $pdf->Ln(10);
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(200, 10, "has successfully completed the English Quiz", 0, 1, 'C');
        $pdf->Cell(200, 10, "with a score of $percentageScore%.", 0, 1, 'C');
        
        // Enregistrer le fichier PDF
        $certificatePath = "certificates/Certificate_" . urlencode($name) . ".pdf";
        $pdf->Output('F', $certificatePath);

        // Ajouter le chemin du certificat à la base de données
        $certificateLink = $certificatePath;
    } else {
        $certificateLink = NULL;
    }

    // Enregistrer les résultats dans la table 'quiz_results'
    $stmt = $conn->prepare("INSERT INTO quiz_results (user_id, score, passed, certificate_link) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("diss", $userId, $percentageScore, $passed, $certificateLink);
    $stmt->execute();

    // Message de résultat
    $resultMessage = $passed
        ? "Congratulations, $name! You passed with a score of $percentageScore%. <br>Your certificate is available <a href='$certificateLink' target='_blank'>here</a>."
        : "Sorry, $name. You scored $percentageScore% and did not pass.";
}
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
    <link rel="shortcut icon" type="image/x-icon" href="..\Front_Office\img\favicon.ico">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Jost:wght@500;600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="..\Front_Office\lib\animate\animate.min.css" rel="stylesheet">
    <link href="..\Front_Office\lib\owlcarousel\assets\owl.carousel.min.css" rel="stylesheet">
    <link href="..\Front_Office\lib\lightbox\css\lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="..\Front_Office\css\bootstrap.min.css" rel="stylesheet">
   
    <!-- Template Stylesheet -->
    <link href="..\Front_Office\css\style.css" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>English Quiz</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 20px;
        }
        .container {
            max-width: 600px;
            margin: auto;
        }
        h1 {
            color: #333;
        }
        form {
            background-color: #f9f9f9;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        input, button {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            background-color: #007BFF;
            color: #fff;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
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
                        <img src="../Front_Office/img/logo.png" alt="Logo de Questerra">
                        <h1 class="m-0">Questerra</h1>
                    </div>
                    
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto py-0">
                        <a href="../Front_Office/index.html" class="nav-item nav-link">Home</a>
                        <a href="../Front_Office/les taches/imen/blog.html" class="nav-item nav-link ">Blog</a>
                        <a href="../Front_Office/Cours.html" class="nav-item nav-link active">Courses</a>
                       <a href="c:\Users\21628\Downloads\wetransfer_projet-web_2024-11-18_2122\Projet Web\view\Front_Office\les taches\firas\ecahnge.html" class="nav-item nav-link">Questions</a>
                        <a href="c:\Users\21628\Downloads\wetransfer_projet-web_2024-11-18_2122\Projet Web\view\Front_Office\les taches\nader\event.html" class="nav-item nav-link">Events</a>
                        <a href="c:\Users\21628\Downloads\wetransfer_projet-web_2024-11-18_2122\Projet Web\view\Front_Office\les taches\maram\contact.html" class="nav-item nav-link">Complaints</a>
                      
                    </div>
                </div>
                    
                    <div class="dropdown">
                        
                        <button class="dropdown-button">Settings</button>
                        <div class="dropdown-content">
                          <a href="c:\Users\21628\Downloads\wetransfer_projet-web_2024-11-18_2122\Projet Web\view\Front_Office\les taches\sadek\account.html">Mon compte</a>
                          <a href="c:\Users\21628\Downloads\wetransfer_projet-web_2024-11-18_2122\Projet Web\view\Front_Office\les taches\sadek\index.html">Se déconnecter</a>
                        </div>
                      </div>
            </nav>

            <!-- ending of header -->   
            <div class="container-xxl py-5 bg-primary hero-header">
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5 py-5">
                        <div class="col-12 text-center">
                            <h1 class="text-white animated slideInDown">Courses</h1>
                            <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

<!-- Formulaire du quiz -->
<h1>Architecture Quiz</h1>

<?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
    <div id="resultMessage">
        <h2>Congratulations!</h2>
        <p><?= $resultMessage ?></p>
    </div>
<?php else: ?>
    <form method="POST" action="">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br>

        <label for="phone">Phone:</label><br>
        <input type="text" id="phone" name="phone" required><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br>

        <?php
        // Récupérer les questions depuis la base de données (table questions1)
        $questions1Query = "SELECT id, question_text FROM questions4";
        $result = $conn->query($questions1Query);

        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $questionId = $row['id'];
                $questionText = $row['question_text'];
        ?>
                <div class="question">
                    <label><?= htmlspecialchars($questionText) ?></label><br>
                    <input type="radio" name="q<?= $questionId ?>" value="a" required> Option A<br>
                    <input type="radio" name="q<?= $questionId ?>" value="b"> Option B<br>
                    <input type="radio" name="q<?= $questionId ?>" value="c"> Option C<br>
                </div>
        <?php
            }
        } else {
            echo "<p>No questions available.</p>";
        }
        ?>

        <button type="submit">Submit Quiz</button>
    </form>
<?php endif; ?>


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
                <a class="btn btn-link" href="c:\Users\21628\Downloads\wetransfer_projet-web_2024-11-18_2122\Projet Web\view\Front-office\les taches\imen\blog.html">Blog</a>
                <a class="btn btn-link" href="c:\Users\21628\Downloads\wetransfer_projet-web_2024-11-18_2122\Projet Web\view\Front-office\les taches\akrem\Cours.html">    Cours</a>
                <a class="btn btn-link" href="c:\Users\21628\Downloads\wetransfer_projet-web_2024-11-18_2122\Projet Web\view\Front-office\les taches\firas\ecahnge.html">Questions</a>
                <a class="btn btn-link" href="c:\Users\21628\Downloads\wetransfer_projet-web_2024-11-18_2122\Projet Web\view\Front-office\les taches\nader\event.html">Evénement</a>
                <a class="btn btn-link" href="c:\Users\21628\Downloads\wetransfer_projet-web_2024-11-18_2122\Projet Web\view\Front-office\les taches\maram\contact.html" class="nav-item nav-link">Complaint</a>
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
                        <a href="c:\Users\21628\Downloads\wetransfer_projet-web_2024-11-18_2122\Projet Web\view\Front-office\index.html">Accueille</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->
!-- Back to Top -->
<a href="#" class="btn btn-lg btn-secondary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>

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

<!-- Template Javascript -->
<script src="../Front_Office/js/main.js"></script>

</body>
</html>
