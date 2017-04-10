<!DOCTYPE html>

<html>

<?php
include 'db/database.php';

if(isset($_POST['button']) and ($_POST['pseudo']) and ($_POST['message']) ){

  $req = $bdd->prepare('INSERT INTO minichat (pseudo, message) VALUES (:pseudo, :message)');

  $req->execute(array(

    'pseudo' => $_POST['pseudo'],

    'message' => $_POST['message']

  ));

  echo 'Votre message a bien été envoyé. Merci!';

}

?>

  <head>

    <meta charset="utf-8">

    <title>Minichat</title>

  </head>

  <body>

    <fieldset>

      <form class="" action="" method="post">

        <label for="pseudo">Pseudo :</label><br>

        <input id="pseudo" type="text" name="pseudo" value=""><br>

        <label for="message">Message :</label><br>

        <textarea id="message" name="message" rows="8" cols="80"></textarea><br>

        <button type="submit" name="button">Envoyer</button>

      </form>

    </fieldset>

  <fieldset>

<?php

include 'content.php';

?>

</fieldset>

  </body>

</html>
