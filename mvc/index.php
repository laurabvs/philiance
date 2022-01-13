<?php 
require 'model/config.php';
$pb = new config;

$pb->create();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=s, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

<h2>Créer un compte</h2>

<form action="acceuil.php" method="post">

    <div class="col">
        <label for="nom">Nom</label>
        <input type="text" name="nom">

        <label for="prenom">Prenom</label>
        <input type="text" name="prenom">

        <label for="tel">Tel</label>
        <input type="text" name="tel">

        <label for="mail">Mail</label>
        <input type="text" name="mail">

        <label for="mdp">Mot de Passe</label>
        <input type="text" name="mdp">
    </div>

    <div class="center">
        <input type="submit" value="valider">
    </div>
</form>


<h2>Se connecter</h2>
    
<form action="acceuil.php" method='post'>

    <div class="col">
        <label for="mail">Mail</label>
        <input type="text" name="mail">

        <label for="mdp">Mot de Passe</label>
        <input type="text" name="mdp">
    </div>

    <div class="center">
        <input type="submit" value="valider">
    </div>      
</form>

</body>
</html>