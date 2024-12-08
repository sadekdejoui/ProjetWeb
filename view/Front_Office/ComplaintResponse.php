<?php
require '../../config.php';
require_once '../../model/Formulaire.php';
include_once '../../Controller/FormulaireC.php';
session_start();
$c=new FormulaireC();
$id=1;
$message=$c->showmessage($id);

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
    <link rel="shortcut icon" type="image/x-icon" href="../Front_Office/img/favicon.ico">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Jost:wght@500;600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../Front_Office/lib/animate/animate.min.css" rel="stylesheet">
    <link href="../Front_Office/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../Front_Office/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/modal.css">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="../Front_Office/css/bootstrap.min.css" rel="stylesheet">
    <link href="../Front_Office/css/recform.css" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="../Front_Office/css/style.css" rel="stylesheet">
    <!-- our css history link-->
    <link rel="stylesheet" href="./css/csscardshistory.css">
   
   <style>
        .response-container {
    display: grid;
    grid-template-columns: repeat(4, 1fr); /* 4 cards per row */
    gap: 20px; /* Space between cards */
    padding: 20px; /* Padding around the grid */
}

.response-card {
    border: 1px solid #ddd;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    background-color: #fff;
    padding: 10px;
    transition: transform 0.3s ease;
}

.response-card:hover {
    transform: translateY(-5px); /* Slight hover effect */
}

.card-header h3 {
    font-size: 18px;
    margin-bottom: 10px;
}

.card-body p {
    font-size: 14px;
    margin-bottom: 10px;
}

.card-footer {
    text-align: center;
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
<!--cssn modal modify-->
    <style>
        /* Ensure all modals are centered and prevent overlap */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Fixed position */
    z-index: 1000; /* Higher than content */
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent background */
    justify-content: center; /* Center modal content horizontally */
    align-items: center; /* Center modal content vertically */
    transition: all 0.3s ease-in-out;
}

.modal-content {
    background-color: white;
    padding: 20px;
    border-radius: 10px;
    width: 400px; /* Width of the modal */
    text-align: center;
}

.close, .closeModifyModal {
    color: #aaa;
    font-size: 28px;
    font-weight: bold;
    position: absolute;
    top: 10px;
    right: 10px;
}

.close:hover,
.close:focus,
.closeModifyModal:hover,
.closeModifyModal:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
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
                        <a href="../Front_Office/index.php" class="nav-item nav-link">Home</a>
                        <a href="C:\Users\bessa\Downloads\wetransfer_projet-web_2024-11-16_2230\Projet Web\view\Front-office\les taches\imen\blog.html" class="nav-item nav-link ">Blog</a>
                        <a href="C:\Users\bessa\Downloads\wetransfer_projet-web_2024-11-16_2230\Projet Web\view\Front-office\les taches\akrem\Cours.html" class="nav-item nav-link ">Courses</a>
                        <a href="C:\Users\bessa\Downloads\wetransfer_projet-web_2024-11-16_2230\Projet Web\view\Front-office\les taches\firas\ecahnge.html" class="nav-item nav-link ">Questions</a>
                        <a href="C:\Users\bessa\Downloads\wetransfer_projet-web_2024-11-16_2230\Projet Web\view\Front-office\les taches\nader\event.html" class="nav-item nav-link ">Events</a>
                        <a href="../Front_Office/contact.php" class="nav-item nav-link active">Complaint</a>
                      
                    </div>
                </div>
                    
                    <div class="dropdown">
                        
                        <button class="dropdown-button">Settings</button>
                        <div class="dropdown-content">
                          <a href="C:\Users\bessa\Downloads\wetransfer_projet-web_2024-11-16_2230\Projet Web\view\Front-office\les taches\sadek\account.html">Mon compte</a>
                          <a href="C:\Users\bessa\Downloads\wetransfer_projet-web_2024-11-16_2230\Projet Web\view\Front-office\les taches\sadek\index.html">Se déconnecter</a>
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

        
        <!-- Navbar & Hero End -->

        <div class="container-xxl py-5 bg-primary hero-header">
            <div class="container my-5 py-5 px-lg-5">
                <div class="row g-5 py-5">
                    <div class="col-12 text-center">
                        <h1 class="text-white animated slideInDown">Your Complaint Responses:</h1>
                       
                        <hr class="bg-white mx-auto mt-0" style="width: 60px;">
                    </div>
                </div>
            </div>
        </div>
    </div>

   <!--response-->
        
   
   <div class="response-container">
    <?php foreach ($message as $cc): ?>
    <div class="response-card">
        <div class="card-header">
            <h3>Response ID: <?php echo htmlspecialchars($cc['id_form'] ?? 'Unknown'); ?></h3>
        </div>
        <div class="card-body">
            <p><strong>Status:</strong> 
                <?php 
                $status = isset($cc['status']) ? $cc['status'] : 'Unknown'; // Assigning status
                if ($status == '1') {
                    echo "Treated and Answered";
                } elseif ($status == '0') {
                    echo "Pending";
                } elseif ($status == '2') {
                    echo "Refused";
                } else {
                    echo "Unknown";
                }
                ?>
            </p>
        </div>

        <!-- Show View Details Button if status is Treated and Answered or Refused -->
        <?php if ($status == '1' || $status == '2'): ?>
            <div class="card-footer">
                <button style="background-color: #ac81f2; color: white; border: none; border-radius: 5px; cursor: pointer;" class="openModal" data-id="<?php echo $cc['id_form']; ?>">View Details</button>
            </div>
        <?php endif; ?>

        <!-- Show Make Changes Button if status is Pending -->
        <?php if ($status == '0'): ?>
            <div class="card-footer">
                <button class="openModifyModalBtn" data-id="<?php echo $cc['id_form']; ?>" style="background-color: #ac81f2; color: white; border: none; border-radius: 5px; cursor: pointer;">Make Changes</button>
            </div>
        <?php endif; ?>
    </div>
    <?php endforeach; ?>

    <!-- Modal for Making Changes (separate modal from View Details) -->
    <!-- <div id="makeChangesModal" class="modal">
        <div class="modal-content">
            <span class="closeModifyModal">&times;</span>
            <h3>Make Some Changes</h3>
            <div id="complaintDetailsChanges">
                <p>Loading...</p>
            </div>

            <!-- Textarea for making changes -->
            <!-- <div>
                <label for="changeText">Enter your changes:</label>
                <textarea id="changeText" rows="4" cols="50"></textarea>
            </div>
            

            <div style="text-align: center;">
            <button id="closeModifyModalBtn" 
                style="background-color: #ac81f2; color: white; border: none; 
                padding: 10px 15px; border-radius: 5px; cursor: pointer;"
                onmouseover="this.style.backgroundColor='green';" 
                onmouseout="this.style.backgroundColor='#ac81f2';">
                 <i class="fa fa-check" style="margin-right: 5px;"></i> Update
            </button>

                <button id="closeModifyModalBtn"
                 style="background-color: #ac81f2; color: white; border: none;
                  padding: 10px 15px; border-radius: 5px; cursor: pointer;"
                  onmouseover="this.style.backgroundColor='red';"
                  onmouseout="this.style.backgroundColor='#ac81f2';">
                    <i class="fa fa-check" style="margin-right: 5px;"></i> Discard 
                </button> -->
                 <!-- Message that will appear after clicking the update button -->
                    <!-- <div id="successMessage" style="color: green; font-size: 16px; margin-top: 10px; display: none;">
                        Updated Successfully.
                     </div>
                      <!-- Message for discard action -->
                    <!-- <div id="discardMessage" style="color: red; font-size: 16px; margin-top: 10px; display: none;">
                        Changes Discarded.
                </div>
            </div>
        </div>
    </div>  --> 
        
    <!-- View Details Modal (unchanged) -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h3>Response Details</h3>
            <div id="complaintDetails">
                <p>Loading...</p>
            </div>
            <div style="text-align: center;">
                <button id="closeModalBtn" style="background-color: #ac81f2; color: white; border: none; padding: 10px 15px; border-radius: 5px; cursor: pointer;">
                    <i class="fa fa-check" style="margin-right: 5px;"></i> Return!
                </button>
            </div>
        </div>
    </div>

    <!--- chebekkkk modifyyy -->
    <div id="myModalPending" class="modal">
        <div class="modal-content">
            <span class="closePending">&times;</span>
            <h3>Make Some Changes</h3>
            <div id="complaintModifyDetails">
            
            </div>
            <div style="text-align: center;">

            <button id="updateModifyModalBtn" 
                style="background-color: #ac81f2; color: white; border: none; 
                padding: 10px 15px; border-radius: 5px; cursor: pointer;"
                onmouseover="this.style.backgroundColor='green';" 
                onmouseout="this.style.backgroundColor='#ac81f2';">
                 <i class="fa fa-check" style="margin-right: 5px;"></i> Update
            </button>

                <button id="closeModifyModalBtn"
                 style="background-color: #ac81f2; color: white; border: none;
                  padding: 10px 15px; border-radius: 5px; cursor: pointer;"
                  onmouseover="this.style.backgroundColor='red';"
                  onmouseout="this.style.backgroundColor='#ac81f2';">
                    <i class="fa fa-check" style="margin-right: 5px;"></i> Discard 
                </button> 
                 <!-- Message that will appear after clicking the update button -->
                    <div id="successMessage"  data-id="<?php echo $cc['id_form']; ?>" style="color: green; font-size: 16px; margin-top: 10px; display: none;">
                        Updated Successfully.
                     </div>
                      <!-- Message for discard action -->
                     <div id="discardMessage"  style="color: red; font-size: 16px; margin-top: 10px; display: none;">
                        Changes Discarded.
                </div>
            </div>
        </div>
    </div>
</div>




    <!--- wfeeeee chebekkkk modifyyy -->


   
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
                <a class="btn btn-link" href="C:\Users\bessa\Downloads\wetransfer_projet-web_2024-11-16_2230\Projet Web\view\Front-office\les taches\imen\blog.html">Blog</a>
                <a class="btn btn-link" href="C:\Users\bessa\Downloads\wetransfer_projet-web_2024-11-16_2230\Projet Web\view\Front-office\les taches\akrem\Cours.html">    Cours</a>
                <a class="btn btn-link" href="C:\Users\bessa\Downloads\wetransfer_projet-web_2024-11-16_2230\Projet Web\view\Front-office\les taches\firas\ecahnge.html">Questions</a>
                <a class="btn btn-link" href="C:\Users\bessa\Downloads\wetransfer_projet-web_2024-11-16_2230\Projet Web\view\Front-office\les taches\nader\event.html">Evénement</a>
                <a class="btn btn-link" href="C:\Users\bessa\Downloads\wetransfer_projet-web_2024-11-16_2230\Projet Web\view\Front-office\les taches\maram\contact.html" class="nav-item nav-link">Complaint</a>
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
                        <a href="../Front_Office/index.php">Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Modal aka chobek-
<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h3>Response Details</h3>
        <div id="complaintDetails">
            <p>Loading...</p>
        </div>
        <div>
        </div>
        <div style="text-align: center;">
            <a id="approveLink" href="#">
                <button id="closeModalBtn" style="background-color: #ac81f2; color: white; border: none; padding: 10px 15px; border-radius: 5px; cursor: pointer;">
                    <i class="fa fa-check" style="margin-right: 5px;"></i> Return!
                </button>
            </a>
        </div>
    </div>
</div>---------->



<!-- Modal aka chobek
<div id="modifyModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h3>Make Some Changes</h3>
        <div id="complaintDetails">
            <p>Loading...</p>
        </div>
        <div>
        </div>
        <div style="text-align: center;">
            <a id="approveLink" href="#">
                <button id="closeModalBtn" style="background-color: #ac81f2; color: white; border: none; padding: 10px 15px; border-radius: 5px; cursor: pointer;">
                    <i class="fa fa-check" style="margin-right: 5px;"></i> Return!
                </button>
            
            </a>
        </div>
    </div>
</div>----------->

<!--- taskiret el chebek------------>

<!-- Back to Top -->
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

<!-- Template Javascript--> 
<script src="../Front_Office/js/main.js"></script>


<!-- taskiret l modal--> 
<script>
    document.getElementById('closeModalBtn').addEventListener('click', function(event) {
    event.preventDefault(); // Prevents default action of the button (e.g., following the link)
    
    // Close the modal (assuming the modal has the id 'myModal')
    var modal = document.getElementById('myModal');
    modal.style.display = 'none'; // Hide the modal
    
    // Optional: You could also remove any open modal classes (depending on your modal library)
    // modal.classList.remove('is-open'); 
});
document.getElementById('closeModalBtnPending').addEventListener('click', function(event) {
    event.preventDefault(); // Prevents default action of the button (e.g., following the link)
    
    // Close the modal (assuming the modal has the id 'myModal')
    var modal = document.getElementById('myModalPending');
    modal.style.display = 'none'; // Hide the modal
    
    // Optional: You could also remove any open modal classes (depending on your modal library)
    // modal.classList.remove('is-open'); 
});
</script>
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
<script src="../Front_Office/js/contactScript.js"></script>

<!---------------Script l chobek--------->
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
                        <p><strong>Response:</strong> ${data.rep}</p>
                        
                     
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
<!--------------- END Script l chobek View details --------->

<!---------------Script l chobek Modify--------->

<script>
  
  document.querySelectorAll('.openModifyModalBtn').forEach(button => {
    button.addEventListener('click', function () {
        const complaintId = this.getAttribute('data-id'); // Get the complaint ID
        const detailsDiv = document.getElementById('complaintModifyDetails');
        const modal = document.getElementById('myModalPending');
        document.getElementById('updateModifyModalBtn').setAttribute('data-id', complaintId);
        // Open the modal
        modal.style.display = 'block';

        // Fetch complaint details via AJAX
        fetch(`melekfetchdesc.php?id=${complaintId}`)
            .then(response => response.json())
            .then(data => {
                if (data.error) {
                    detailsDiv.innerHTML = `<p style="color:red;">${data.error}</p>`;
                } else {
                    // Initialize the content variable before checking conditions
                    let content = `
                        <p><strong>Description:</strong></p>
                        <label for="changeText">Make changes:</label>
                        <textarea id="changeText" rows="4" cols="37">${data.desc}</textarea>
                    `;

                    // Check if there is a file (attachment)
                    if (data.file) {
                        content += `
                            <p><strong>Attachment:</strong> <a href="${data.file}" target="_blank">View File</a></p>
                        `;
                    }

                    // Display the content
                    detailsDiv.innerHTML = content;
                }
            })
            .catch(error => {
                detailsDiv.innerHTML = `<p style="color:red;">Error loading details.</p>`;
                console.error('AJAX Error:', error);
            });
    });
});



// Close modal logic
document.querySelector('.closePending').addEventListener('click', () => {
    document.getElementById('myModalPending').style.display = 'none';
});

window.addEventListener('click', (event) => {
    const modal = document.getElementById('myModalPending');
    if (event.target === modal) {
        modal.style.display = 'none';
    }
});

//updatee modify modal changes


document.getElementById('updateModifyModalBtn').addEventListener('click', () => {
    // Retrieve the ID dynamically from the "Update" button's attribute
    const complaintId = document.getElementById('updateModifyModalBtn').getAttribute('data-id');
    const newText = document.getElementById('changeText').value;
    console.log({
    id: complaintId,
    description: newText
});

    // Validate input
    if (!newText.trim()) {
        alert('Please enter the updated text.');
        return;
    }

    fetch('melekModify.php', {
    method: 'POST',
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify({ id: complaintId, description: newText })
})
    .then(response => response.json())
    .then(data => {
        console.log(data); // Check the response in the console
        if (data.success) {
            alert(data.message);
            document.getElementById('myModalPending').style.display = 'none';
        } else {
            alert(`Error: ${data.error}`);
        }
    })
    .catch(error => console.error('Update Error:', error));

});



</script>
<!---------------END Script l chobek Modify--------->
<script>
// Get the modal and buttons
const updateModifyModalBtn = document.getElementById("updateModifyModalBtn");
const closeModifyModalBtn = document.getElementById("closeModifyModalBtn");
const makeChangesModal = document.getElementById("makeChangesModal");
const successMessage = document.getElementById("successMessage");
const updaterequest = document.getElementById("updateModifyModalBtn");
const discardMessage =document.getElementById("discardMessage");
updaterequest.addEventListener("click",function(){

});
// Event listener for the Update button
closeModifyModalBtn.addEventListener("click", function() {
    // Show the "Updated Successfully" message
    discardMessage.style.display = "block";

    // Wait for 10 seconds before closing the modal
    setTimeout(function() {
        discardMessage.style.display = "none";
        document.getElementById('myModalPending').style.display = 'none';
        makeChangesModal.style.display = "none"; // Close the modal
    }, 1000); // 10000 milliseconds = 10 seconds
});
updateModifyModalBtn.addEventListener("click", function() {
    // Show the "Updated Successfully" message
    successMessage.style.display = "block";

    // Wait for 10 seconds before closing the modal
    setTimeout(function() {
        successMessage.style.display = "none";
        document.getElementById('myModalPending').style.display = 'none';
        makeChangesModal.style.display = "none"; // Close the modal
    }, 1000); // 10000 milliseconds = 10 seconds
});
</script>




</body>

</html>