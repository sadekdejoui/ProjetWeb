<?php
require_once 'models/Discussion.php';
require_once 'config/database.php';
require_once 'models/Reponse.php';

class DiscussionController {
    /* private $db; */
    private $discussion;
    private $reponse;

    /* public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
        $this->discussion = new Discussion($this->db);
    } */
    public function __construct() {
        $this->discussion = new Discussion();  // Modèle Discussion
        $this->reponse = new Reponse();        // Modèle Reponse
    }

    public function index() {
        $limit = 6; // Nombre de discussions par page
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $offset = ($page - 1) * $limit;
    
        $result = $this->discussion->getPaginated($limit, $offset);
        $discussions = $result['discussions'];
        $totalDiscussions = $result['total'];
    
        $totalPages = ceil($totalDiscussions / $limit);
    
        require_once 'views/discussions/index.php';
    }
    

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->discussion->titre = $_POST['titre'];
            $this->discussion->contenu = $_POST['contenu'];
            $this->discussion->id_categorie = $_POST['id_categorie'];
            $this->discussion->user = $_POST['user'];
            if ($this->discussion->create()) {
                header("Location: index.php");
                exit;
            }
        }
        require_once 'views/discussions/create.php';
    }

    public function edit($id) {
        $discussion = $this->discussion->getById($id);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->discussion->id_thread = $id;
            $this->discussion->titre = $_POST['titre'];
            $this->discussion->contenu = $_POST['contenu'];
            $this->discussion->id_categorie = $_POST['id_categorie'];
            if ($this->discussion->update()) {
                header("Location: index.php");
                exit;
            }
        }
        require_once 'views/discussions/edit.php';
    }

    public function delete($id) {
        if ($this->discussion->delete($id)) {
            header("Location: index.php");
            exit;
        }
    }

    public function search() {
        // Récupérer les critères de recherche depuis $_GET
        $filters = [
            'categorie_nom' => $_GET['categorie_nom'] ?? null,
            'user' => $_GET['user'] ?? null,
            'contenu' => $_GET['contenu'] ?? null,
            'date_publication' => $_GET['date_publication'] ?? null,
        ];
    
        // Récupérer les discussions filtrées
        $result = $this->discussion->getFiltered($filters);
        $discussions = $result->fetchAll(PDO::FETCH_ASSOC);
    
        // Charger la vue avec les discussions filtrées
        require_once 'views/discussions/index.php';
    }
    
    

}

