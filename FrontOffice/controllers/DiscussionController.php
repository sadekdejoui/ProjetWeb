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
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $limit = 3;
        $offset = ($page - 1) * $limit;
    
        // Récupérer les discussions paginées
        $result = $this->discussion->getPaginated($limit, $offset);
        $discussions = $result->fetchAll(PDO::FETCH_ASSOC);
    
        // Ajouter les réponses à chaque discussion
        foreach ($discussions as &$discussion) {
            $discussion['reponses'] = $this->reponse->getAllByThread($discussion['id_thread'])->fetchAll(PDO::FETCH_ASSOC);
        }
    
        // Obtenir le nombre total de discussions pour gérer la pagination
        $totalDiscussions = $this->discussion->getCount();
        $totalPages = ceil($totalDiscussions / $limit);
    
        // Charger la vue avec les données paginées
        require_once 'views/discussions/index.php';
    }
    

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->discussion->titre = $_POST['titre'];
            $this->discussion->contenu = $_POST['contenu'];
            $this->discussion->id_categorie = $_POST['id_categorie'];
            $this->discussion->user = $_POST['user'];
    
            // Gérer l'upload du fichier
            if (isset($_FILES['media']) && $_FILES['media']['error'] === 0) {
                $fileTmpPath = $_FILES['media']['tmp_name'];
                $fileName = $_FILES['media']['name'];
                $fileSize = $_FILES['media']['size'];
                $fileType = $_FILES['media']['type'];
    
                // Définir un répertoire de téléchargement
                $uploadDir = 'uploads/';
                $destPath = $uploadDir . $fileName;
    
                // Vérifier le type de fichier (image ou vidéo)
                $allowedFileTypes = ['image/jpeg', 'image/png', 'image/gif', 'video/mp4', 'video/webm'];
                if (in_array($fileType, $allowedFileTypes)) {
                    if (move_uploaded_file($fileTmpPath, $destPath)) {
                        // Ajouter le chemin du fichier à la discussion
                        $this->discussion->media = $fileName;
                    }
                }
            }
    
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
}

