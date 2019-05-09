<?php
session_start();
require('connexion.php');

$email = htmlspecialchars($_POST['email']);
    
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo "Désolé, l'email n'est pas valide ! ";
    } 
    else 
    {
        $password = htmlspecialchars($_POST['password']);
        $result = $bdd->query("SELECT * FROM users WHERE email = '$email'");
        // $result = $bdd->execute();

        if($result->rowCount() == 0) {
            echo "Email, non trouvé.";
        } else {
            // while ($donnees = $result->fetch()) {
                $donnees = $result->fetch();
                $hash = $donnees['password'];
                if (!password_verify($password, $hash)) {
                    echo 'Le mot de passe est invalide !';
                } else {
                    echo 'Le mot de passe est valide.';
                    $_SESSION['pseudo'] = $donnees['pseudo'];
                    $_SESSION['idrole'] = $donnees['idrole'];
                    // echo $_SESSION['pseudo']."<br>";
                    // echo $_SESSION['idrole'];
                    header('Location: edit.php');



                    
                }
            }
            
        // }
    
      
      

    }