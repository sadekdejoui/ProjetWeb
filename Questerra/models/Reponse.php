<?php
class Reponse {
    private $conn;
    private $table_name = "reponse";  // Nom correct de la table

    public $id_reponse;
    public $contenu;
    public $date_creation;
    public $id_thread;
    public $user;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->getConnection();
    }

    public function getPaginatedAndSearch($limit, $offset, $search) {
        $query = "SELECT r.id_reponse, r.contenu, r.date_creation, r.user, d.titre AS discussion_titre
                  FROM reponse r  -- Utilisation correcte de la table 'reponse'
                  LEFT JOIN discussions d ON r.id_thread = d.id_thread
                  WHERE r.contenu LIKE :search OR r.user LIKE :search
                  ORDER BY r.date_creation DESC
                  LIMIT :limit OFFSET :offset";
    
        $stmt = $this->conn->prepare($query);
        $searchTerm = "%$search%"; // Préparer le terme de recherche
        $stmt->bindParam(":search", $searchTerm, PDO::PARAM_STR);
        $stmt->bindParam(":limit", $limit, PDO::PARAM_INT);
        $stmt->bindParam(":offset", $offset, PDO::PARAM_INT);
        $stmt->execute();
        $reponses = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        // Compter le total des résultats
        $countQuery = "SELECT COUNT(*) as total FROM reponse r
                       WHERE r.contenu LIKE :search OR r.user LIKE :search";
        $countStmt = $this->conn->prepare($countQuery);
        $countStmt->bindParam(":search", $searchTerm, PDO::PARAM_STR);
        $countStmt->execute();
        $total = $countStmt->fetch(PDO::FETCH_ASSOC)['total'];
    
        return ['reponses' => $reponses, 'total' => $total];
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

    public function delete($id_reponse) {
        // Préparer la requête pour supprimer uniquement la réponse
        $query = "DELETE FROM reponse WHERE id_reponse = :id_reponse";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id_reponse", $id_reponse);
        
        return $stmt->execute(); // Retourne vrai si la suppression est réussie
    }
    public function getByThreadId($id_thread) {
        $query = "SELECT id_reponse, contenu, date_creation, user 
                  FROM reponse 
                  WHERE id_thread = :id_thread 
                  ORDER BY date_creation DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id_thread", $id_thread, PDO::PARAM_INT);
        $stmt->execute();
    
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    
}


