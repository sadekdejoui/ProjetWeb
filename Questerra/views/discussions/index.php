<?php require_once 'views/layout.php';
 ?>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="content">
    <h1>Forums</h1>

    <!-- Tableau de bord -->
    <div class="card" id="dashboard">
        <div class="stat-box">
            <div>
                <h3>Forums publiés</h3>
                <p><?= count($discussions); ?></p>
            </div>
        </div>
    </div>

    <!-- Gestion des articles -->
    <div class="card" id="articles">
        <h2>Tous les forums</h2>

        <!-- Tableau des résultats -->
        <table class="table-dashboard">
            <thead>
                <tr>
                    <th>
                        Catégories
                        <button href="index.php?action=search&categorie_nom=NomCategorie" class="search-button" onclick="filterColumn('categorie_nom')">
                            <i class="fa fa-search"></i>
                        </button>
                    </th>
                    <th>
                        Auteur
                        <button class="search-button" onclick="filterColumn('user')">
                            <i class="fa fa-search"></i>
                        </button>
                    </th>
                    <th>
                        Discussion
                        <button class="search-button" onclick="filterColumn('contenu')">
                            <i class="fa fa-search"></i>
                        </button>
                    </th>
                    <th>
                        Date de publication
                        <button class="search-button" onclick="filterColumn('date_creation')">
                            <i class="fa fa-search"></i>
                        </button>
                    </th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id="table-body">
                <?php foreach ($discussions as $discussion): ?>
                    <tr>
                        <td><?= htmlspecialchars($discussion['categorie_nom']); ?></td>
                        <td><?= htmlspecialchars($discussion['user']); ?></td>
                        <td>
                            <p><?= htmlspecialchars($discussion['contenu']); ?></p>
                        </td>
                        <td><?= htmlspecialchars($discussion['date_creation'] ?? 'Date inconnue'); ?></td>
                        <td>
                            <button class="button" onclick="location.href='index.php?action=edit&id=<?= $discussion['id_thread']; ?>'">Modifier</button>
                            <button class="button" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette discussion ?') ? location.href='index.php?action=delete&id=<?= $discussion['id_thread']; ?>' : '';">
                            <i class="fa fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
       <!-- Pagination -->
       <?php
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$totalPages = $totalPages ?? 0;
?>

    <center>
        <div class="pagination">
            <?php if ($page > 1): ?>
                <a href="index.php?page=<?= $page - 1; ?>">&laquo;</a>
            <?php endif; ?>

            <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                <a href="index.php?page=<?= $i; ?>" <?= $i == $page ? 'class="active"' : ''; ?>>
                    <?= $i; ?>
                </a>
            <?php endfor; ?>

            <?php if ($page < $totalPages): ?>
                <a href="index.php?page=<?= $page + 1; ?>">&raquo;</a>
            <?php endif; ?>
        </div>
    </center>
    </div>
</div>



<style>
    .search-button {
        background-color: transparent;
        border: none;
        cursor: pointer;
        padding: 5px;
    }

    .search-button i {
        font-size: 16px;
        color: #007BFF;
    }

    .search-button:hover i {
        color: #0056b3;
    }

    .table-dashboard th {
        text-align: left;
        padding: 8px;
    }

    .table-dashboard th button {
        margin-left: 5px;
    }
</style>








    
