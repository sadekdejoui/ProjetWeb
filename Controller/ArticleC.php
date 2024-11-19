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
    public function addArticle($titre, $contenu, $auteur)
    {
        $query = "INSERT INTO articles (titre, contenu, auteur, date_publication) 
                  VALUES (:titre, :contenu, :auteur, NOW())";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':titre', $titre);
        $stmt->bindParam(':contenu', $contenu);
        $stmt->bindParam(':auteur', $auteur);
        $stmt->execute();
    }

    // Modifier un article existant
    public function updateArticle($id, $titre, $contenu)
    {
        $query = "UPDATE articles SET titre = :titre, contenu = :contenu WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':titre', $titre);
        $stmt->bindParam(':contenu', $contenu);
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
    
}

?>
