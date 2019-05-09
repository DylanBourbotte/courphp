<?php

$host = "localhost";
$dbname = "espaceadmin";
$user = "root";
$password = "";

// Montre les erreurs au dev
error_reporting(E_ALL);
ini_set("display_errors", 1);

// Connexion à la base de données
try{
    $bdd = new PDO ('mysql:host=localhost; dbname=espaceadmin;charset=UTF8','root','');
    }catch (Exception $e)
{
    die('Erreur:' . $e->getMessage());
}

?>