<?php require_once 'views/layout.php'; ?>
<div class="container">
    <h1><?= htmlspecialchars($discussion['titre']); ?></h1>
    <p><?= htmlspecialchars($discussion['contenu']); ?></p>
    <small>Posté par <?= htmlspecialchars($discussion['user']); ?> le <?= $discussion['date_creation']; ?></small>

    <hr>

    <h2>Réponses</h2>
<?php if (!empty($reponses)): ?>
    <ul>
        <?php foreach ($reponses as $reponse): ?>
            <li>
                <p><?= htmlspecialchars($reponse['contenu']); ?></p>
                <small>Posté par <?= htmlspecialchars($reponse['user']); ?> le <?= $reponse['date_creation']; ?></small>
                <a href="index.php?action=editReponse&id=<?= $reponse['id_reponse']; ?>&id_thread=<?= $discussion['id_thread']; ?>">Modifier</a>
                <a href="index.php?action=deleteReponse&id=<?= $reponse['id_reponse']; ?>&id_thread=<?= $discussion['id_thread']; ?>" 
                   onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette réponse ?');">Supprimer</a>
            </li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <p>Aucune réponse n'a été publiée pour cette discussion.</p>
<?php endif; ?>
