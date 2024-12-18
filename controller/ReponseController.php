<?php
require_once '../../model/Discussion.php';
require_once '../../config/database.php';
require_once '../../model/Reponse.php';

class ReponseController {
    private $reponse;
    private $discussion;
    private $role; // 'admin' ou 'user'

    public function __construct($role = 'user') {
        $this->reponse = new Reponse();
        $this->discussion = new Discussion();
        $this->role = $role; // Détermine les fonctionnalités accessibles
    }

    public function index() {
        $search = $_GET['search'] ?? ''; // Récupération de la recherche
        $page = $_GET['page'] ?? 1; // Page courante
        $limit = $this->role === 'admin' ? 6 : 3; // Limite différente selon le rôle
        $offset = ($page - 1) * $limit;

        // Récupération des réponses filtrées et paginées
        $result = $this->reponse->getPaginatedAndSearch($limit, $offset, $search);
        $reponses = $result['reponses'];
        $total = $result['total'];

        // Calcul du nombre total de pages
        $totalPages = ceil($total / $limit);

        require_once 'views/reponses/indexr.php';
    }

    public function create($id_thread) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->reponse->contenu = $_POST['contenu'];
            $this->reponse->id_thread = $id_thread;
            $this->reponse->user = $_POST['user'];

            if ($this->reponse->create()) {
                header("Location: index3.php?action=show&id=$id_thread");
                exit;
            }
        }
    }

    public function edit($id, $id_thread) {
        $reponse = $this->reponse->getAllByThread($id);

        if (!$reponse) {
            echo "Réponse non trouvée.";
            exit;
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->reponse->id_reponse = $id;
            $this->reponse->contenu = $_POST['contenu'];

            if ($this->reponse->update()) {
                header("Location: index3.php?action=show&id=$id_thread");
                exit;
            }
        }

        require_once 'views/reponses/editRep.php';
    }


}


