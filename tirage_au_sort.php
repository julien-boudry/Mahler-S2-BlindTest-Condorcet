<?php

// Définir un tableau avec les qualifiées

$boules = array() ;

$boules[] = 'Version X' ; // Boule à tirer N°1
$boules[] = 'Version B' ; // Boule à tirer N°2
$boules[] = 'Version N' ; // Boule à tirer N°3 [...]




// Procédure de tirage
shuffle($boules);


// On affiche
echo '<pre>';
var_dump($boules);
echo '</pre>';

