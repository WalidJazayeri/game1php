<?php
session_start();

$_SESSION['choix'] = $_POST['choix'];
header('Location: game.php');
exit();
?>