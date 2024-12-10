<?php
require_once "C:\\xampp\htdocs\projet web\config.php";

class CourseC
{
    // Method to list all courses
    public function afficher()
    {
        $sql = "SELECT * FROM courses";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    // Method to add a course
    public function add($course)
{
    $sql = "INSERT INTO courses (title, category, price, duration, description, id_module) 
            VALUES (:title, :category, :price, :duration, :description, :id_module)";
    $db = config::getConnexion();
    try {
        $query = $db->prepare($sql);
        $query->execute([
            'title' => $course->getTitle(),
            'category' => $course->getCategory(),
            'price' => $course->getPrice(),
            'duration' => $course->getDuration(),
            'description' => $course->getDescription(),
            'id_module' => $course->getIdModule()  // Ajouter l'ID du module
        ]);
        echo "Course added successfully!";
    } catch (Exception $e) {
        die('Error: ' . $e->getMessage());
    }
}


    // Method to update a course
    public function edit_Courses($course, $id)
    {
        $sql = "UPDATE courses SET title = :title, category = :category, price = :price, 
                duration = :duration, description = :description, id_module = :id_module 
                WHERE id = :id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'id' => $id,
                'title' => $course->getTitle(),
                'category' => $course->getCategory(),
                'price' => $course->getPrice(),
                'duration' => $course->getDuration(),
                'description' => $course->getDescription(),
                'id_module' => $course->getIdModule()  // Ajouter l'ID du module
            ]);
            echo "Course updated successfully!";
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
    

    // Method to delete a course
    public function delete($id)
    {
        $sql = "DELETE FROM courses WHERE id = :id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->bindValue(':id', $id);
            $query->execute();
            echo "Course deleted successfully!";
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    public function showCourse($id)
{
    $sql = "SELECT c.*, m.title AS module_title FROM courses c 
            LEFT JOIN modules m ON c.id_module = m.id 
            WHERE c.id = :id";
    $db = config::getConnexion();
    try {
        $query = $db->prepare($sql);
        $query->bindValue(':id', $id);
        $query->execute();
        $course = $query->fetch(PDO::FETCH_ASSOC);
        return $course;
    } catch (Exception $e) {
        die('Error: ' . $e->getMessage());
    }
}

}
?>
