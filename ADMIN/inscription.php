<?php
    require 'connexion.php';
    // On empêche l'injection de code..
   
    $email = htmlspecialchars($_POST['email']);
    
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo "Désolé, l'email n'est pas valide ! ";
    } 
    else 
    {
      // $email = filter_var($email, FILTER_VALIDATE_EMAIL);
      $pseudo = htmlspecialchars($_POST['pseudo']);
      $password = htmlspecialchars($_POST['password']);

      // On sécurise le mot de passe en le hashant 
      $password = password_hash($password, PASSWORD_DEFAULT);
      $idrole = 2;

    // echo $email .' '. $password;
    if(!isset($pseudo) && !isset($password)){
    echo "Tout les champs doivent être remplie";

   } else {
    // ICI REQUETE A FAIRE selcetionner tous les emails de la tavle ou lemai sera egal a dollar email 
    // Il faudra récup un compteur de resultat si réponse au dessus de zero cest qu'il y a un inscrit
    // SINON :
     $req=$bdd->prepare("SELECT email FROM users WHERE email = '$email'");
     $req->execute();
     
     if($req->rowCount() > 0) {
      echo "L'émail est déja inscrit";
     } else {


     $insertmbr=$bdd->prepare("INSERT INTO users (email, pseudo, password, idrole) VALUES ('$email', '$pseudo', '$password', '$idrole')");
     $insertmbr->execute();
     echo "Félication, vous êtes enfin inscrit au bout de 8 heures. :) ";
   }
    }
    }
    

?>