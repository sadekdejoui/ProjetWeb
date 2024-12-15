<?php
require "C:\\xampp\\htdocs\\akrem web\\Model\\courses.php";
require_once "C:\\xampp\\htdocs\\akrem web\\config.php";
require "C:\\xampp\\htdocs\\akrem web\\Controller\\coursesC.php";

$error = ""; // Initialize an error variable

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the form fields are set and not empty
    if (
        isset($_POST["title"], $_POST["category"], $_POST["price"], 
              $_POST["duration"], $_POST["description"], $_POST["id_module"]) &&
        !empty($_POST["title"]) && !empty($_POST["category"]) &&
        !empty($_POST["price"]) && !empty($_POST["duration"]) &&
        !empty($_POST["description"]) && !empty($_POST["id_module"])
    ) {
        // Create a new course object
        $course = new Course(
            null,
            $_POST["title"],
            $_POST["category"],
            $_POST["price"],
            $_POST["duration"],
            $_POST["description"],
            $_POST["id_module"]
        );

        // Add course to the database
        $courseC = new courseC();
        try {
            $courseC->add($course);
            echo "Course added successfully.";
            header('Location: afficher.php'); // Redirect after successful addition
            exit;
        } catch (Exception $e) {
            $error = "Error adding course: " . $e->getMessage();
        }
    } else {
        $error = "All fields are required.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Course</title>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .form-container {
            background-color: #fff;
            padding: 20px 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
        }
        .form-container h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
            font-weight: bold;
        }
        input, textarea, button {
            width: 100%;
            margin-bottom: 15px;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input:focus, textarea:focus {
            border-color: #6c63ff;
            outline: none;
            box-shadow: 0 0 4px #6c63ff;
        }
        button {
            background-color: #ac81f2;
            color: white;
            border: none;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #ffd891;
            color: #333;
        }


        .dropdown {
            background-color: white;
            border-radius: 10px;
            padding: 20px 5px;
            width: 100%;
            max-width: 500px;
            text-align: center;
        }

        h1 {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }

        label {
            display: block;
            text-align: left;
            font-size: 16px;
            color: #555;
            margin-bottom: 8px;
            font-weight: bold;
        }

        .dropdown select {
            width: 100%;
            padding: 12px;
            font-size: 16px;
            color: #444;
            background-color: #fafafa;
            border: 2px solid #ddd;
            border-radius: 8px;
            box-sizing: border-box;
            cursor: pointer;
            transition: border-color 0.3s ease, background-color 0.3s ease;
        }

        .dropdown select:focus {
            border-color: #6c63ff;
            background-color: #f3f3f3;
            outline: none;
        }

        .dropdown option {
            padding: 12px;
            font-size: 16px;
        }

        .dropdown select:hover {
            border-color: #6c63ff;
        }

        .dropdown button {
            padding: 12px 25px;
            font-size: 18px;
            color: white;
            background-color: #6c63ff;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: 20px;
        }

        .dropdown button:hover {
            background-color: #ffd891;
            color: #333;
        }
    </style>

</head>
<body>
    

    <div class="form-container">
        <h1>Add a New Course</h1>
        <form method="POST" action="http://localhost/akrem%20web/View/back_office/add.php">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required>

             <!-- Catégorie du Cours -->
            <div class="dropdown">
                <label for="category">Catégorie :</label>
                <select id="category" name="category" >
            <option value="English">English</option>
            <option value="French">French</option>
            <option value="DevWeb">Web Development</option>
            <option value="Marketing">Marketing</option>
            <option value="Science">Sciences</option>
            <option value="Architecture">Architecture</option>
            <!-- Des catégories supplémentaires peuvent être ajoutées ici -->
        </select>
        </div>

            <label for="price">Price:</label>
            <input type="number" id="price" name="price" step="0.01" required>

            <label for="duration">Duration:</label>
            <input type="text" id="duration" name="duration" required>

            <label for="description">Description:</label>
            <textarea id="description" name="description" rows="4" cols="50" required></textarea>

            <label for="id_module">Module ID:</label>
            <input type="number" id="id_module" name="id_module" required>

            <button type="submit">Add Course</button>
        </form>
        
    </div>
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
</body>
</html>