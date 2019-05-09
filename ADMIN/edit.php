<?php
session_start();
require('connexion.php');

if(empty($_SESSION)) {
    echo "Vous n'êtes pas connecté ! <a href='login.php'>Se connecter</a>";
} else if($_SESSION['idrole'] == 2 ) {
    echo "Tu é un lambda";
} else if ($_SESSION['idrole'] == 1) {
    echo "Woh, tu est un super admin";  
    $req = $bdd->query("SELECT * FROM articles");
    $donnees = $req->fetchAll();
    // $titre = $donnees['titre'];
    // $desc = $donnees['description'];
    // $image = $donnees['image']; ?>



<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edition du contenu ! </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    

<?php 

foreach ($donnees as $key => $value) {
    // echo $value['titre'];
?>
    <form action="update.php" method='post'>
        <label for='titre'>Titre : </label>
        <input type="text" name="titre" value="<?php echo $value['titre']; ?>">
        <label for='description'>Description : </label>
        <textarea name="description"><?php echo $value['description']; ?></textarea>
        <input type="submit" class='btn btn-primary' name='update' value='Update'>
        <input type="submit" class="btn btn-danger" value="Supprimer" name="delete">
        <input type="hidden" value="<?php echo $value['id']; ?>" name="id">
        <hr>
    </form>
<?php
}

?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>

<?php
}
?>


