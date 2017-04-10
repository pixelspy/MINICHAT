<?php

$req = $bdd->query('SELECT * FROM minichat ORDER BY id DESC LIMIT 0, 10');

//select the last 10 messages from minichat

while ($donnees = $req ->fetch() ) {

  //fetch that data from the db

echo '<p>' . htmlspecialchars($donnees['pseudo']) . ' : ' . htmlspecialchars($donnees['message']) . '</p>';

}

?>
