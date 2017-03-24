<!-- //contient formulaire d'ajout de message + la liste des 10 derniers -->
<?php
try{
  $bdd = new PDO('mysql:host=localhost; dbname=minichat; charset=utf8', 'phpmyadmin', 'simplon');
}catch (Exception $e){
  die('Erreur : ' . $e->getMessage());
}

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Mini chat</title>
  </head>
  <body>
<form class="" action="minichat_post.php" method="post">
  <label for="pseudo">Pseudo: </label><input type="text" name="pseudo" value="">
  <label for="message">Message: </label><input type="text" name="message" value="">
  <button type="button" name="button">Envoyer</button>
</form>
  </body>

  <!-- liste des derniers messages : display de la BDD -->
</html>
