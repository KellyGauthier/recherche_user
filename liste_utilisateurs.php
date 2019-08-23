<?php
require_once 'layout/header.php';
require_once 'data/users.php'; ?>

<h1>Liste des utilisateurs</h1>
<div>
    <div class="fiche_user">
        <?php foreach ($users as $user) {
            require 'templates/fiche_user.php';
        } ?>
    </div>
</div>

<div>
    <a href="index.php" class="btn btn-primary" role="button">Retour à la page d'accueil</a>
    <a href="recherche.php" class="btn btn-primary" role="button">Rechercher un utilisateur</a>

</div>

<?php require_once 'layout/footer.php'; ?>