<?php
require_once 'layout/header.php';
require_once 'data/users.php';


$id = $_GET['recherche'];

$id_values = array_column($users, 'email');
$key = array_search($id, $id_values);

if ($key === false) {
    exit("Cet utilisateur n'existe pas");
}

$user = $users[$key];

require_once 'templates/fiche_user.php';

?>

<a href="index.php" class="btn btn-primary" role="button">Retour à la page d'accueil</a>
<a href="recherche.php" class="btn btn-primary" role="button">Effectuer une nouvelle recherche</a>
<a href="liste_utilisateurs.php" class="btn btn-primary" role="button">Liste des utilisateurs</a>


<?php require_once 'layout/footer.php' ?>