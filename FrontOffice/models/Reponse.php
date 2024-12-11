<?php
class Reponse {
    private $conn;
    private $table_name = "reponse";

    public $id_reponse;
    public $contenu;
    public $date_creation;
    public $id_thread;
    public $user;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->getConnection();
    }

    public function getAllByThread($id_thread) {
        $query = "SELECT * FROM reponse WHERE id_thread = :id_thread ORDER BY date_creation ASC";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id_thread', $id_thread);
        $stmt->execute();
        return $stmt;
    }
    
    public function getById($id_reponse) {
        $query = "SELECT * FROM " . $this->table_name . " WHERE id_reponse = :id_reponse LIMIT 1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id_reponse', $id_reponse);
        $stmt->execute();
    
        // Si la réponse existe, retourner l'objet avec les données
        if ($stmt->rowCount() > 0) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $this->id_reponse = $row['id_reponse'];
            $this->contenu = $row['contenu'];
            $this->date_creation = $row['date_creation'];
            $this->id_thread = $row['id_thread'];
            $this->user = $row['user'];
            return $this; // Retourner l'objet de la réponse
        }
    
        return null; // Retourner null si la réponse n'est pas trouvée
    }
    
    

    public function create() {
        $query = "INSERT INTO " . $this->table_name . " (contenu, date_creation, id_thread, user) 
                  VALUES (:contenu, NOW(), :id_thread, :user)";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":contenu", $this->contenu);
        $stmt->bindParam(":id_thread", $this->id_thread);
        $stmt->bindParam(":user", $this->user);

        return $stmt->execute();
    }

    public function update() {
        $query = "UPDATE " . $this->table_name . " 
                  SET contenu = :contenu 
                  WHERE id_reponse = :id_reponse";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":contenu", $this->contenu);
        $stmt->bindParam(":id_reponse", $this->id_reponse);

        return $stmt->execute();
    }

    public function delete($id) {
        $query = "DELETE FROM " . $this->table_name . " WHERE id_reponse = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $id);
        return $stmt->execute();
    }
}
