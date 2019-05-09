<?php

require('connexion.php');

$id = intval($_POST['id']);

$req = $bdd->prepare("DELETE * FROM articles WHERE id = $id");
$req->execute();
header('Location: edit.php');
