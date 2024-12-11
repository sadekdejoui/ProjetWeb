<?php require_once 'views/layout.php'; ?>
<div class="content">
    <h1>Liste des Réponses</h1>

    <!-- Tableau des réponses -->
    <div class="card" id="reponses">
        <h2>Toutes les réponses</h2>
        <table class="table-dashboard">
            <thead>
                <tr>
                    <th>Discussion</th>
                    <th>Auteur</th>
                    <th>Contenu</th>
                    <th>Date de publication</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if (isset($reponses) && count($reponses) > 0): ?>
                    <?php foreach ($reponses as $reponse): ?>
                        <tr>
                            <td><?= htmlspecialchars($reponse['discussion_titre']); ?></td>
                            <td><?= htmlspecialchars($reponse['user']); ?></td>
                            <td><p><?= htmlspecialchars($reponse['contenu']); ?></p></td>
                            <td><?= htmlspecialchars($reponse['date_creation']); ?></td>
                            <td>
                                
                            <button class="button" onclick="location.href='index.php?action=deleteReponse&id=<?= $reponse['id_reponse']; ?>'">
                                <i class="fa fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5">Aucune réponse disponible.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="pagination">
        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
            <a href="index.php?action=indexr&page=<?= $i ?>&search=<?= urlencode($search) ?>" class="<?= $i == $page ? 'active' : ''; ?>"><?= $i ?></a>
        <?php endfor; ?>
    </div>
</div>

