<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/app.css">
    <title>ADMIN</title>
</head>

<body>
    <h1>Inscription</h1>
    <form method='post' action="inscription.php">
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" required>
        </div>
        <div>
            <label for="pseudo">Pseudo</label>
            <input type="text" name="pseudo" required>
        </div>
        <div>
            <label for="password">Mot de passe</label>
            <input type="password" name="password" required>
        </div>
        <div>
        <button type="submit">Envoyer</button>
        </div>
    </form>
</body>

</html>