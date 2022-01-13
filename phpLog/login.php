<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Création de compte</h1>
<form action="register.php" method="post">
    <p>User</p>
    <input type="text" name="username">
    <br>
    <p>Email</p>
    <input type="text" name="mail">
    <br>
    <p>Pass</p>
    <input type="password" name="mdp">
    <br><br>
    <input type="submit" value="Valider" >
</form>
    <hr>


    <h2>Connectez-vous!</h2>
<form action="verif.php" method="post">

    <p>Email</p>
    <input type="text" name="mail">
    <br>
    <p>Pass</p>
    <input type="password" name="mdp">

    <input type="submit" value="verif">
</form>

</body>
</html>