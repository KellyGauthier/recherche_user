<?php require_once 'layout/header.php'; ?>

<div>
    <h1>Rechercher un utilisateur</h1>
</div>

<div>
    <form action="resultat_recherche.php" method="GET">
        <label for="recherche">Entrez un nom d'utilisateur : </label>
        <input type="text" name="recherche" id="recherche">

        <input type="submit" value="Rechercher">
    </form>
</div>

<div>
    <a href="index.php" class="btn btn-primary" role="button">Retour à la page d'accueil</a>
    <a href="liste_utilisateurs.php" class="btn btn-primary" role="button">Voir la liste des utilisateurs</a>
</div>

<?php require_once 'layout/footer.php'; ?>