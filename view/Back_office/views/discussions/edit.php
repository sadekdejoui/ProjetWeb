<?php require_once 'views/layout.php'; ?>
<div class="content">
    <h1>Forums</h1>

    <!-- Modifier une discussion existante -->
    <div class="card" id="editDiscussion">
        <h2>Modifier la discussion</h2>
        <form method="POST" action="index3.php?action=edit&id=<?= $discussion['id_thread']; ?>">
            <!-- Champ pour le titre -->
            <label for="title">Titre de la Discussion</label>
            <input class="form-control" type="text" name="titre" value="<?= htmlspecialchars($discussion['titre']); ?>" required>

            <!-- Champ pour le contenu -->
            <label for="content">Contenu de la Discussion</label>
            <textarea class="form-control" name="contenu" rows="6" required><?= htmlspecialchars($discussion['contenu']); ?></textarea>

            <!-- Sélection de la catégorie -->
            <label for="category">Catégorie</label>
            <select class="form-control" name="id_categorie" required>
                <option value="<?= $discussion['id_categorie']; ?>" selected>
                    <?= htmlspecialchars($discussion['categorie_nom']); ?>
                </option>
                <!-- Charger dynamiquement les autres catégories -->
                <?php foreach ($categories as $categorie): ?>
                    <?php if ($categorie['id_categorie'] !== $discussion['id_categorie']): ?>
                        <option value="<?= $categorie['id_categorie']; ?>">
                            <?= htmlspecialchars($categorie['nom']); ?>
                        </option>
                    <?php endif; ?>
                <?php endforeach; ?>
            </select>

            <!-- Bouton pour soumettre le formulaire -->
            <button class="button" type="submit">Mettre à jour</button>
        </form>
    </div>
</div>





