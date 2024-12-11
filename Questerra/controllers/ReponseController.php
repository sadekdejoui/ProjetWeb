<?php
require_once 'models/Reponse.php';
require_once 'models/Discussion.php';  
require_once 'config/database.php';

class ReponseController {
    private $reponse;
    private $discussion;

    public function __construct() {
        $this->reponse = new Reponse();
        $this->discussion = new Discussion();
    }

    public function index() {
        $search = $_GET['search'] ?? ''; // Récupère la recherche
        $page = $_GET['page'] ?? 1; // Récupère le numéro de la page
        $limit = 6;
        $offset = ($page - 1) * $limit;
        
        // Récupération des réponses filtrées et paginées
        $result = $this->reponse->getPaginatedAndSearch($limit, $offset, $search);
        $reponses = $result['reponses'];
        $total = $result['total'];
        
        // Calcul du nombre total de pages
        $totalPages = ceil($total / $limit);
        
        require_once 'views/reponses/indexr.php';
    }
    public function delete($id) {
        if ($this->reponse->delete($id)) {
            // Rediriger vers la page de liste des réponses après la suppression
            header("Location: index.php?action=indexr");
            exit;
        } else {
            // Gérer l'erreur si la suppression échoue
            echo "Erreur lors de la suppression de la réponse.";
        }
    }
    
    public function getReponses() {
        $id_thread = $_GET['id_thread'] ?? 0;
        $reponses = $this->reponse->getByThreadId($id_thread); // Nouvelle méthode dans le modèle Reponse
    
        // Retourne les réponses au format JSON
        header('Content-Type: application/json');
        echo json_encode(['reponses' => $reponses]);
    }
    
    

    
}

