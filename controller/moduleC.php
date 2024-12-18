<?php
require_once "C:\\xampp\htdocs\projet web\config.php";

class ModuleC
{
    // Méthode pour afficher tous les modules
    /*public function affichermodule()
    {
        $sql = "SELECT * FROM module";
        $db = config::getConnexion();
        try {
            $req=$db->prepare($sql);
            $req->execute();
            $liste=$req->fetch();
            return $liste;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }*/
    public function affichermodule()
{
    $sql = "SELECT * FROM module";
    $db = config::getConnexion();
    try {
        $req = $db->prepare($sql);
        $req->execute();
        $liste = $req->fetchAll(PDO::FETCH_ASSOC); // Récupère tous les enregistrements
        return $liste;
    } catch (Exception $e) {
        die('Error: ' . $e->getMessage());
    }
}


    // Méthode pour ajouter un module
    public function addM($module)
    {
        $sql = "INSERT INTO module (title, description, duration, id, category) VALUES (:title, :description, :duration, :id_course, :category)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'title' => $module->getTitle(),
                'description' => $module->getDescription(),
                'duration' => $module->getDuration(),
                'id_course' => $module->getId(),
                'category' => $module->getCategory(),
            ]);
            echo "Module ajouté avec succès !";
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    // Méthode pour modifier un module
    public function editmodule($module, $id)
    {
        $sql = "UPDATE module SET title = :title, description = :description, duration = :duration, id = :id_course, category = :category WHERE id_module = :id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'id' => $id,
                'title' => $module->getTitle(),
                'description' => $module->getDescription(),
                'duration' => $module->getDuration(),
                'id_course' => $module->getCourseId(),
                'category' => $module->getCategory(),
            ]);
            echo "Module mis à jour avec succès !";
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    // Méthode pour supprimer un module
    public function deletemodule($id)
    {
        $sql = "DELETE FROM module WHERE id_module = :id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->bindValue(':id', $id);
            $query->execute();
            echo "Module supprimé avec succès !";
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    // Méthode pour afficher un module spécifique par ID
    public function showModule($id)
    {
        $sql = "SELECT * FROM module WHERE id_module = :id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->bindValue(':id', $id);
            $query->execute();
            $module = $query->fetch(PDO::FETCH_ASSOC);
            return $module;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
}
?>
