<?php
require '../../config.php';

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
            
            $success = $query->execute([
                'title' => $course->getTitle(),
                'category' => $course->getCategory(),
                'price' => $course->getPrice(),
                'duration' => $course->getDuration(),
                'description' => $course->getDescription(),
                'id_module' => $course->getIdModule()
            ]);
            
            if ($success) {
                echo "Course added successfully!";
            } else {
                echo "Failed to execute query!";
                print_r($query->errorInfo()); // Display error information
            }
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

public function filterCourses($id_module = null) {
    $db = config::getConnexion();
    
    // Base query for fetching courses
    $sql = "SELECT * FROM courses";
    
    // If id_module is provided, filter the courses by the specified module
    if ($id_module !== null && $id_module !== 'all') {
        $sql .= " WHERE id_module = :id_module";
    }

    // Prepare and execute the query
    $query = $db->prepare($sql);
    
    if ($id_module !== null && $id_module !== 'all') {
        $query->bindParam(':id_module', $id_module, PDO::PARAM_INT);
    }

    $query->execute();
    
    // Return the filtered courses
    return $query->fetchAll(PDO::FETCH_ASSOC);
}



}
?>
