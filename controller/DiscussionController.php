<?php
require_once '../../model/Reponse.php';
require_once '../../config.php';
require_once '../../model/Discussion.php';


class DiscussionController
{
    private $discussion;
    private $reponse;
    private $role; // 'admin' ou 'user'

    public function __construct($role = 'user')
    {
        $this->discussion = new Discussion();
        $this->reponse = new Reponse();
        $this->role = $role; // Détermine les fonctionnalités accessibles
    }

    public function index()
    {
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $limit = $this->role === 'admin' ? 6 : 3; // Différent selon le rôle
        $offset = ($page - 1) * $limit;

        $result = $this->discussion->getPaginated($limit, $offset);
        $discussions = $result['discussions'];
        $totalDiscussions = $result['total'];
        $totalPages = ceil($totalDiscussions / $limit);

        // Ajout des réponses pour l'utilisateur
        if ($this->role === 'user') {
            foreach ($discussions as &$discussion) {
                $discussion['reponses'] = $this->reponse->getAllByThread($discussion['id_thread'])->fetchAll(PDO::FETCH_ASSOC);
            }
        }

        require_once './views/discussions/index.php';
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->discussion->titre = $_POST['titre'];
            $this->discussion->contenu = $_POST['contenu'];
            $this->discussion->id_categorie = $_POST['id_categorie'];
            $this->discussion->user = $_POST['user'];

            // Gestion du fichier uniquement pour l'utilisateur
            if ($this->role === 'user' && isset($_FILES['media']) && $_FILES['media']['error'] === 0) {
                $fileTmpPath = $_FILES['media']['tmp_name'];
                $fileName = $_FILES['media']['name'];
                $fileType = $_FILES['media']['type'];
                $uploadDir = 'uploads/';
                $destPath = $uploadDir . $fileName;

                $allowedFileTypes = ['image/jpeg', 'image/png', 'image/gif', 'video/mp4', 'video/webm'];
                if (in_array($fileType, $allowedFileTypes)) {
                    if (move_uploaded_file($fileTmpPath, $destPath)) {
                        $this->discussion->media = $fileName;
                    }
                }
            }

            if ($this->discussion->create()) {
                header("Location: index3.php");
                exit;
            }
        }
        require_once './views/discussions/create.php';
    }

    public function edit($id)
    {
        $discussion = $this->discussion->getById($id);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->discussion->id_thread = $id;
            $this->discussion->titre = $_POST['titre'];
            $this->discussion->contenu = $_POST['contenu'];
            $this->discussion->id_categorie = $_POST['id_categorie'];

            if ($this->discussion->update()) {
                header("Location: index3.php");
                exit;
            }
        }
        require_once './views/discussions/edit.php';
    }

    public function delete($id)
    {
        // Suppression accessible uniquement à l'admin
        if ($this->role === 'admin' && $this->discussion->delete($id)) {
            header("Location: index3.php");
            exit;
        }
    }

    public function search()
    {
        $filters = [
            'categorie_nom' => $_GET['categorie_nom'] ?? null,
            'user' => $_GET['user'] ?? null,
            'contenu' => $_GET['contenu'] ?? null,
            'date_publication' => $_GET['date_publication'] ?? null,
        ];

        $result = $this->discussion->getFiltered($filters);
        $discussions = $result->fetchAll(PDO::FETCH_ASSOC);

        require_once './views/discussions/index.php';
    }

   
}
