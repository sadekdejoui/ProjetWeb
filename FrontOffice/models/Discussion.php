<?php
class Discussion {
    private $conn;
    private $table_name = "discussions";

    public $id_thread;
    public $titre;
    public $contenu;
    public $date_creation;
    public $id_categorie;
    public $user;
    public $media;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->getConnection();
    }

    public function getAll() {
        $query = "SELECT d.id_thread, d.titre, d.contenu, d.date_creation, d.user, c.nom AS categorie_nom
                  FROM discussions d
                  LEFT JOIN categorie c ON d.id_categorie = c.id_categorie
                  ORDER BY d.date_creation DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
    

    public function getById($id) {
        $query = "SELECT d.*, c.nom AS categorie_nom FROM " . $this->table_name . " d
                  JOIN categorie c ON d.id_categorie = c.id_categorie
                  WHERE d.id_thread = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    

public function create() {
    $query = "INSERT INTO " . $this->table_name . " (titre, contenu, date_creation, id_categorie, user, media)
              VALUES (:titre, :contenu, NOW(), :id_categorie, :user, :media)";
    $stmt = $this->conn->prepare($query);

    $stmt->bindParam(":titre", $this->titre);
    $stmt->bindParam(":contenu", $this->contenu);
    $stmt->bindParam(":id_categorie", $this->id_categorie);
    $stmt->bindParam(":user", $this->user);
    $stmt->bindParam(":media", $this->media);

    return $stmt->execute();
}


    public function update() {
        $query = "UPDATE " . $this->table_name . " 
                  SET titre = :titre, contenu = :contenu, id_categorie = :id_categorie 
                  WHERE id_thread = :id";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":titre", $this->titre);
        $stmt->bindParam(":contenu", $this->contenu);
        $stmt->bindParam(":id_categorie", $this->id_categorie);
        $stmt->bindParam(":id", $this->id_thread);

        return $stmt->execute();
    }

    public function delete($id) {
        $query = "DELETE FROM " . $this->table_name . " WHERE id_thread = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $id);
        return $stmt->execute();
    }

    public function getPaginated($limit, $offset) {
        $query = "SELECT d.id_thread, d.titre, d.contenu, d.date_creation, d.user, c.nom AS categorie_nom
                  FROM discussions d
                  LEFT JOIN categorie c ON d.id_categorie = c.id_categorie
                  ORDER BY d.date_creation DESC
                  LIMIT :limit OFFSET :offset";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
        $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt;
    }
    
    public function getCount() {
        $query = "SELECT COUNT(*) AS total FROM discussions";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row['total'];
    }
    
}
