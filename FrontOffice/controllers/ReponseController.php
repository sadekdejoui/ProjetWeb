<?php
require_once 'models/Reponse.php';
require_once 'config/database.php';

class ReponseController {
    private $db;
    private $reponse;

    public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
        $this->reponse = new Reponse($this->db);
    }

    public function create($id_thread) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->reponse->contenu = $_POST['contenu'];
            $this->reponse->id_thread = $id_thread;
            $this->reponse->user = $_POST['user'];
            if ($this->reponse->create()) {
                header("Location: index.php?action=show&id=$id_thread");
                exit;
            }
        }
    }

    public function editRep($id, $id_thread) {
        
        $reponse = $this->reponse->getById($id);
        
        
        if (!$reponse) {
            
            echo "Réponse non trouvée.";
            exit;
        }
        
        // Si la méthode est en POST, on met à jour la réponse
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->reponse->id_reponse = $id;
            $this->reponse->contenu = $_POST['contenu'];
            
            // Si la mise à jour est réussie, rediriger vers la page du thread
            if ($this->reponse->update()) {
                header("Location: index.php?action=index&id=$id_thread");
                exit;
            }
        }
    
        
        require_once 'views/reponses/editRep.php';
    }
    
    

    public function delete($id, $id_thread) {
        if ($this->reponse->delete($id)) {
            header("Location: index.php?action=index&id=$id_thread");
            exit;
        }
    }
}
