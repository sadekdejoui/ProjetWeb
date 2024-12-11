<?php
// CommentaireC.php
class CommentaireC {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getAllCommentaires() {
        // Requête SQL pour récupérer tous les commentaires avec le titre de l'article associé
        $sql = "SELECT c.*, a.titre AS article_titre FROM commentaires c JOIN articles a ON c.article_id = a.id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function deleteCommentaire($id) {
        $sql = "DELETE FROM commentaires WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
    public function getCommentairesByArticle($article_id) {
        $sql = "SELECT * FROM commentaires WHERE article_id = :article_id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':article_id', $article_id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function incrementLikes($id) {
        $sql = "UPDATE commentaires SET likes = likes + 1 WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    // Nouvelle méthode pour incrémenter les dislikes
    public function incrementDislikes($id) {
        $sql = "UPDATE commentaires SET dislikes = dislikes + 1 WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
    public function likeCommentaire($id) {
        $this->incrementLikes($id);
    }

    public function dislikeCommentaire($id) {
        $this->incrementDislikes($id);
    }
}
?>