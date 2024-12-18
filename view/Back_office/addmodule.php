<?php
// Include necessary files
include "../Model/courses.php";
include "../Controller/coursesC.php";

// Process form submission
if (
    isset($_POST["id_module"]) && isset($_POST["description"]) &&
    isset($_POST["duration"]) && isset($_POST["id"])
) {
    if (
        !empty($_POST["id_module"]) && !empty($_POST["description"]) && 
        !empty($_POST["duration"]) && !empty($_POST["id"]) 
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
        $courseC = new CourseController();
        $courseC->add($course);

        // Redirect to a course list or success page
        header('Location:afficher.php');
        exit;
    } else {
        $error = "All fields are required.";
    }
}
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un Cours</title>
</head>
<body>
    <h1>Ajouter un Cours</h1>
    <form>
        <label>Titre :</label>
        <input type="text" name="title" ><br>
        
        <label>description :</label>
        <input type="text" name="category" ><br>
        
        <label>description :</label>
        <input type="number" step="0.01" name="price" ><br>
        
        <label>duration :</label>
        <input type="number" name="duration" ><br>
        
        <label>Description :</label>
        <textarea name="description" ></textarea><br>
        
        <button type="submit">Ajouter</button>
    </form>
</body>
</html>
