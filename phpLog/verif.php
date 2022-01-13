<?php
require 'config.php';
$query = "SELECT * FROM `register` WHERE username=:mail and mdp=:mdp";

    $donnes = $pdo->prepare($query);

    $donnes->bindValue(':mail', $_POST['mail'], PDO::PARAM_STR);
    $donnes->bindValue(':mdp', $_POST['mdp'], PDO::PARAM_STR); 

    $row = $donnes->execute();

    if($_POST['mail'] === $_POST['mdp']){
        echo "Connection validé";
    }else{
        echo "Connection échouée";
    }

?>