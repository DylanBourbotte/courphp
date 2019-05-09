<?php

require('connexion.php');

if(isset($_POST['delete'])) {
    echo "Tu veux me supprimer ? :(";
    // header('Location: delete.php');
    
    $id = intval($_POST['id']);

$req = $bdd->prepare("DELETE FROM articles WHERE id = $id");
$req->execute();
header('Location: edit.php');
}


if(isset($_POST['update'])) {
    $titre = htmlspecialchars($_POST['titre']);
$description = htmlspecialchars($_POST['description']);
$id = intval($_POST['id']);

// $req = $bdd->prepare("UPDATE articles SET titre=$titre, description=$description WHERE id = ?");

// $req = $bdd->prepare("UPDATE artcles SET")

/* Exécution d'une requête préparée en liant des variables PHP */

$req = $bdd->prepare("UPDATE articles SET titre = :titre, description = :description WHERE id = $id");
$req->bindParam(':titre', $titre, PDO::PARAM_STR, 255);
$req->bindParam(':description', $description, PDO::PARAM_STR, 16000);
$req->execute();
header('Location: edit.php');
}
?>






















?>