<?php 
    require_once 'layout/header.php';
    require_once 'data/users.php'; ?>

<h1>Liste des utilisateurs</h1>
<div class="produits_container">
    <?php foreach ($users as $user) {

        require_once 'templates/fiche_user.php';
    } ?>
</div>

<div>
    <ul>
        <li><a href="index.php">Retour à la page d'accueil</a></li>
        <li><a href="recherche.php">Rechercher un utilisateur</a></li>
    </ul>
</div>

<?php require_once 'layout/footer.php'; ?>