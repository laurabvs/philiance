<?php

class config{

    public function connect(){
        try {
        $conn = new PDO("mysql:host=localhost;dbname=philiance", "root","");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Vous etes connecté";
        } catch(PDOException $e) {
        echo "connection échouée" . $e->getMessage();
        }  
    }

    public function logout(){
        mysqli_close($conn);

        if (mysqli_close($conn)) {
            header('index.php');
        } 
        
    }

    public function create(){
        $insert = prepare("INSERT INTO `register`(`nom`, `prenom`, `mail`, `tel`, `mdp`) VALUES (:nom,:prenom,:mail,:tel,:mdp)");
    }

    public function read(){
        
    }

    public function update(){

    }

    public function delete(){

    }

}