<?php

if(isset($_POST['choix'])) {

  var_dump($_POST['choix']);

}

?>

<form method="post" action="traitement.php">

  <select name="choix">
    <option>pierre</option>
    <option>feuille</option>
    <option>ciseaux</option>
  </select>

  <button type="submit">Jouer</button>

</form>

<?php

if(isset($_POST['choix'])) {

  var_dump($_POST['choix']);

}

?>