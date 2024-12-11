<?php
require_once 'controllers/DiscussionController.php';
require_once 'controllers/ReponseController.php';

$action = $_GET['action'] ?? 'index';
$id = $_GET['id'] ?? null;
$id_thread = $_GET['id_thread'] ?? null;

$discussionController = new DiscussionController();
$reponseController = new ReponseController();

switch ($action) {
    case 'create':
        $discussionController->create();
        break;
    case 'edit':
        $discussionController->edit($id);
        break;
    case 'delete':
        $discussionController->delete($id);
        break;
    case 'createReponse':
        $reponseController->create($id_thread);
        break;
    case 'editReponse':
        $reponseController->editRep($id, $id_thread);
        break;
    case 'deleteReponse':
        $reponseController->delete($id, $id_thread);
        break;
    case 'show':
        $discussionController->index($id);
        break;
    default:
        $discussionController->index();
        break;
}

