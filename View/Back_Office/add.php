<?php
require "C:\\xampp\htdocs\akrem web\Model\courses.php";
require_once "C:\\xampp\htdocs\akrem web\config.php";
require "C:\\xampp\htdocs\akrem web\Controller\coursesC.php";
Config::getConnexion();
echo $_SERVER['REQUEST_METHOD'] ;
// Process form submission
if (
    isset($_POST["title"]) && isset($_POST["category"]) && isset($_POST["price"]) &&
    isset($_POST["duration"]) && isset($_POST["description"])
) {
    if (
        !empty($_POST["title"]) && !empty($_POST["category"]) && 
        !empty($_POST["price"]) && !empty($_POST["duration"]) &&
        !empty($_POST["description"])
    ) {
        // Create a new course object
        $course = new Course(
            null,
            $_POST["title"],
            $_POST["category"],
            $_POST["price"],
            $_POST["duration"],
            $_POST["description"]
        );

        // Add course to the database
        $courseC = new courseC();
        $courseC->add($course);
        echo"user added";

        // Redirect to a course list or success page
        header('Location:afficher.php');
        //exit;
    } else {
        $error = "All fields are required.";
    }
}

?>
