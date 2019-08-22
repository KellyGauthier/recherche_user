<?php
    require_once 'layout/header.php';
    require_once 'data/users.php';

    var_dump($_GET);

$id = $_GET['recherche'];

$id_values = array_column($users, 'email');
$key = array_search($id, $id_values);

if ($key === false) {
    exit("Cet utilisateur n'existe pas");
}

$user = $users[$key];
   
require_once 'templates/fiche_user.php'; 

?>




<?php require_once 'layout/footer.php' ?>