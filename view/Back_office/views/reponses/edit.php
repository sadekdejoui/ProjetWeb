<?php require_once 'views/layout.php'; ?>
<div class="container">
    <h1>Modifier la réponse</h1>
    <form method="POST">
        <textarea name="contenu" required><?= htmlspecialchars($reponse['contenu']); ?></textarea>
        <button type="submit">Mettre à jour</button>
    </form>
</div>
