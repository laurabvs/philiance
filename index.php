<?php require 'connect.php'; 

$sqlquery = 'SELECT * FROM todo.faq';

$sqlstatement = $conn->prepare($sqlquery);

$sqlstatement->execute();

$sql = $sqlstatement->fetchall();



// echo $sql;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste</title>
</head>
<body>

    <form action="" method="post">

    <label for="question">Question</label>
    <br>
    <input type="text" name="question">
    <br>

    <label for="reponse">Réponse</label>
    <br>
    <input type="text" name="reponse">
    <br><br>
    <input type="submit" value="Ajouter">

    </form>




    <table class="table">
  <thead>
    <tr>
      <th scope="col">Question</th>
      <th scope="col">Réponse</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <!-- <th scope="row"></th> -->
      <td><?php foreach ($sql as $sql) {
                ?>
                        <?php echo $sql['question']; ?> <?php echo $sql['reponse']; ?>
                        
                        <br>
                <?php
                }
                ?>
        </td>      
      








</body>
</html>