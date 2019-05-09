<?php
include 'INC/header.php';
require('ADMIN/connexion.php');

$req = $bdd->query("SELECT * FROM articles");
$donnees = $req->fetch();
$titre = $donnees['titre'];
$desc = $donnees['description'];
$image = $donnees['image'];
?>
    <h1>BLOG</h1>
    <a href="ADMIN/index.php">Inscription</a>
    <a href="ADMIN/login.php">Se connecter</a>




    <section class="home">
        <h2><?php echo $titre; ?></h2>
        <p><?php echo $desc; ?></p>
    <img src="<?php echo $image; ?>" alt="Photo d'un chat" style="width: 250px; height: 250px;">
    </section>
    <script src="JS/app.js"></script>

</body>
</html>

