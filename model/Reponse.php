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

    // Récupère toutes les réponses d'un thread (Admin et Utilisateur)
    public function getAllByThread($id_thread) {
        $query = "SELECT * FROM reponse WHERE id_thread = :id_thread ORDER BY date_creation ASC";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id_thread', $id_thread);
        $stmt->execute();
        return $stmt;
    }

    // Crée une nouvelle réponse (Admin et Utilisateur)
    public function create() {
        $query = "INSERT INTO " . $this->table_name . " (contenu, date_creation, id_thread, user) 
                  VALUES (:contenu, NOW(), :id_thread, :user)";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":contenu", $this->contenu);
        $stmt->bindParam(":id_thread", $this->id_thread);
        $stmt->bindParam(":user", $this->user);

        return $stmt->execute();
    }

    // Met à jour une réponse (Admin uniquement)
    public function update() {
        $query = "UPDATE " . $this->table_name . " 
                  SET contenu = :contenu 
                  WHERE id_reponse = :id_reponse";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":contenu", $this->contenu);
        $stmt->bindParam(":id_reponse", $this->id_reponse);

        return $stmt->execute();
    }

    // Supprime une réponse (Admin uniquement)
    public function delete($id_reponse) {
        $query = "DELETE FROM reponse WHERE id_reponse = :id_reponse";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id_reponse", $id_reponse);

        return $stmt->execute();
    }

    // Recherche et pagination pour les réponses (Admin)
    public function getPaginatedAndSearch($limit, $offset, $search) {
        $query = "SELECT r.id_reponse, r.contenu, r.date_creation, r.user, d.titre AS discussion_titre
                  FROM reponse r
                  LEFT JOIN discussions d ON r.id_thread = d.id_thread
                  WHERE r.contenu LIKE :search OR r.user LIKE :search
                  ORDER BY r.date_creation DESC
                  LIMIT :limit OFFSET :offset";
        
        $stmt = $this->conn->prepare($query);
        $searchTerm = "%$search%";
        $stmt->bindParam(":search", $searchTerm, PDO::PARAM_STR);
        $stmt->bindParam(":limit", $limit, PDO::PARAM_INT);
        $stmt->bindParam(":offset", $offset, PDO::PARAM_INT);
        $stmt->execute();
        $reponses = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Compter le nombre total de réponses
        $countQuery = "SELECT COUNT(*) as total FROM reponse r
                       WHERE r.contenu LIKE :search OR r.user LIKE :search";
        $countStmt = $this->conn->prepare($countQuery);
        $countStmt->bindParam(":search", $searchTerm, PDO::PARAM_STR);
        $countStmt->execute();
        $total = $countStmt->fetch(PDO::FETCH_ASSOC)['total'];

        return ['reponses' => $reponses, 'total' => $total];
    }
}
?>



