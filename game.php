<?php

session_start();

$options = ['pierre','feuille','ciseaux'];

$choixJoueur = $_SESSION['choix'];
$choixOrdinateur = $options[array_rand($options)];

// Conditions de victoire

if ($choixJoueur == 'pierre' && $choixOrdinateur == 'ciseaux') {
    $resultat = "Vous gagnez !";
  
  } elseif ($choixJoueur == 'pierre' && $choixOrdinateur == 'feuille') {
    $resultat = "Vous perdez !";
    
  } elseif ($choixJoueur == 'pierre' && $choixOrdinateur == 'pierre') {
    $resultat = "Egalité !";
  
  } elseif ($choixJoueur == 'feuille' && $choixOrdinateur == 'pierre') {
    $resultat = "Vous gagnez !";
    
  } elseif ($choixJoueur == 'feuille' && $choixOrdinateur == 'ciseaux') {
    $resultat = "Vous perdez !";
  
  } elseif ($choixJoueur == 'feuille' && $choixOrdinateur == 'feuille') {
    $resultat = "Egalité !";
    
  } elseif ($choixJoueur == 'ciseaux' && $choixOrdinateur == 'feuille') {
    $resultat = "Vous gagnez !";
    
  } elseif ($choixJoueur == 'ciseaux' && $choixOrdinateur == 'pierre') {
    $resultat = "Vous perdez !";
    
  } elseif ($choixJoueur == 'ciseaux' && $choixOrdinateur == 'ciseaux') {
    $resultat = "Egalité !";
  }

echo "Vous avez joué $choixJoueur. L'ordinateur a joué $choixOrdinateur.</p>";
echo "<p>$resultat</p>";

var_dump($choixJoueur);

?>