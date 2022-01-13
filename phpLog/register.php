<?php
require 'config.php';

$donnes = $pdo->prepare('INSERT INTO `register` (`username`, `mail`, `mdp`) VALUES (:username,:mail,:mdp);');

$donnes->bindValue(':username', $_POST['username'], PDO::PARAM_STR);
$donnes->bindValue(':mail', $_POST['mail'], PDO::PARAM_STR);
$donnes->bindValue(':mdp', $_POST['mdp'], PDO::PARAM_STR); 

$insertlogin = $donnes->execute();

if($insertlogin){
    $resultat = "Votre Compte à bien été créer";
}else{
    $resultat = "Votre compte est pas créer!";
}
?>
            <h5><?php echo $resultat ?></h5>
            <a href="login.php">Retour à l'accueil</a>
