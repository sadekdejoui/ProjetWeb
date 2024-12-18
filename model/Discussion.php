<?php
class Discussion {
    private $conn;
    private $table_name = "discussions";

    // Attributs de la table
    public $id_thread;
    public $titre;
    public $contenu;
    public $date_creation;
    public $id_categorie;
    public $user;
    public $media; // Spécifique aux utilisateurs

    public function __construct() {
        $db = new Database();
        $this->conn = $db->getConnection();
    }

    // Récupère toutes les discussions
    public function getAll() {
        $query = "SELECT d.id_thread, d.titre, d.contenu, d.date_creation, d.user, c.nom AS categorie_nom
                  FROM discussions d
                  LEFT JOIN categorie c ON d.id_categorie = c.id_categorie
                  ORDER BY d.date_creation DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    // Récupère une discussion par son ID
    public function getById($id) {
        $query = "SELECT d.*, c.nom AS categorie_nom FROM " . $this->table_name . " d
                  JOIN categorie c ON d.id_categorie = c.id_categorie
                  WHERE d.id_thread = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Création d'une nouvelle discussion
    public function create($role = 'user') {
        $query = "INSERT INTO " . $this->table_name . " (titre, contenu, date_creation, id_categorie, user" .
                 ($role === 'user' ? ", media" : "") . ")
                 VALUES (:titre, :contenu, NOW(), :id_categorie, :user" .
                 ($role === 'user' ? ", :media" : "") . ")";
        $stmt = $this->conn->prepare($query);

        // Paramètres communs
        $stmt->bindParam(":titre", $this->titre);
        $stmt->bindParam(":contenu", $this->contenu);
        $stmt->bindParam(":id_categorie", $this->id_categorie);
        $stmt->bindParam(":user", $this->user);

        // Paramètre spécifique à l'utilisateur
        if ($role === 'user') {
            $stmt->bindParam(":media", $this->media);
        }

        return $stmt->execute();
    }

    // Mise à jour d'une discussion
    public function update() {
        $query = "UPDATE " . $this->table_name . " 
                  SET titre = :titre, contenu = :contenu, id_categorie = :id_categorie 
                  WHERE id_thread = :id";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":titre", $this->titre);
        $stmt->bindParam(":contenu", $this->contenu);
        $stmt->bindParam(":id_categorie", $this->id_categorie);
        $stmt->bindParam(":id", $this->id_thread, PDO::PARAM_INT);

        return $stmt->execute();
    }

    // Suppression d'une discussion
    public function delete($id) {
        $query = "DELETE FROM " . $this->table_name . " WHERE id_thread = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        return $stmt->execute();
    }

    // Récupération avec pagination
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
        $discussions = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Récupère le nombre total de discussions
        $countQuery = "SELECT COUNT(*) AS total FROM discussions";
        $countStmt = $this->conn->prepare($countQuery);
        $countStmt->execute();
        $total = $countStmt->fetch(PDO::FETCH_ASSOC)['total'];

        return ['discussions' => $discussions, 'total' => $total];
    }

    // Récupération avec filtres (utilisée par l'admin)
    public function getFiltered($filters) {
        $query = "SELECT d.id_thread, d.titre, d.contenu, d.date_creation, d.user, c.nom AS categorie_nom
                  FROM discussions d
                  LEFT JOIN categorie c ON d.id_categorie = c.id_categorie
                  WHERE 1=1";

        $params = [];

        if (!empty($filters['categorie_nom'])) {
            $query .= " AND c.nom LIKE :categorie_nom";
            $params[':categorie_nom'] = '%' . $filters['categorie_nom'] . '%';
        }

        if (!empty($filters['user'])) {
            $query .= " AND d.user LIKE :user";
            $params[':user'] = '%' . $filters['user'] . '%';
        }

        if (!empty($filters['contenu'])) {
            $query .= " AND d.contenu LIKE :contenu";
            $params[':contenu'] = '%' . $filters['contenu'] . '%';
        }

        if (!empty($filters['date_publication'])) {
            $query .= " AND DATE(d.date_creation) = :date_publication";
            $params[':date_publication'] = $filters['date_publication'];
        }

        $query .= " ORDER BY d.date_creation DESC";

        $stmt = $this->conn->prepare($query);
        $stmt->execute($params);

        return $stmt;
    }

    // Récupération du nombre total de discussions
    public function getCount() {
        $query = "SELECT COUNT(*) AS total FROM discussions";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row['total'];
    }
}
