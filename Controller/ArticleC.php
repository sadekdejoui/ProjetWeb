<?php

class articleC
{
    private $conn;

    // Constructeur pour initialiser la connexion à la base de données
    public function __construct($connexion)
    {
        $this->conn = $connexion;
    }

    // Ajouter un nouvel article
    public function addArticle($titre, $contenu, $auteur, $image = null)
{
    try {
        $query = "INSERT INTO articles (titre, contenu, auteur, date_publication, image) 
                  VALUES (:titre, :contenu, :auteur, NOW(), :image)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':titre', $titre);
        $stmt->bindParam(':contenu', $contenu);
        $stmt->bindParam(':auteur', $auteur);
        $stmt->bindParam(':image', $image);
        
        $stmt->execute();
        echo "Article ajouté avec succès.";
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
}


    // Modifier un article existant
    public function updateArticle($id, $titre, $contenu, $image = null)
    {
        if ($image) {
            $query = "UPDATE articles SET titre = :titre, contenu = :contenu, image = :image WHERE id = :id";
        } else {
            $query = "UPDATE articles SET titre = :titre, contenu = :contenu WHERE id = :id";
        }

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':titre', $titre);
        $stmt->bindParam(':contenu', $contenu);
        if ($image) {
            $stmt->bindParam(':image', $image);
        }
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
    }

    // Supprimer un article
    public function deleteArticle($id)
    {
        $query = "DELETE FROM articles WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
    }
    public function getAllArticles() {
        $query = "SELECT * FROM articles";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getLatestArticles($limit = 3) {
        $sql = "SELECT * FROM articles ORDER BY date_publication DESC LIMIT :limit";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getArticleById($id) {
        $query = "SELECT * FROM articles WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC); // Retourne un seul article
    }
    public function searchArticles($search) {
        // Préparer la requête SQL pour rechercher des articles par titre ou auteur
        $query = "SELECT * FROM articles WHERE titre LIKE :search OR auteur LIKE :search";
        $stmt = $this->conn->prepare($query);
        
        // Utiliser des jokers pour la recherche
        $searchParam = "%" . $search . "%";
        $stmt->bindParam(':search', $searchParam, PDO::PARAM_STR);
        
        // Exécuter la requête
        $stmt->execute();
        
        // Récupérer tous les articles correspondants
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>
