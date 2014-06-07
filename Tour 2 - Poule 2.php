<?php

// Inclus les dépendances
require_once 'include'.DIRECTORY_SEPARATOR.'head.php';



// §§§ EN AVANT §§§ EDITER LES LIGNES SUIVANTES

define('GROUPE', 'Tour 2 - Poule 2');

	
	// Versions en lice
	$calculator->addCandidate('A3');
	$calculator->addCandidate('B2');
	$calculator->addCandidate('F3');
	$calculator->addCandidate('G1');
	$calculator->addCandidate('X2');


	// Votants
	$calculator->addVote('X2>B2>A3>F3', 'Siegmund');
	$calculator->addVote('F3>G1=B2=X2>A3', 'Draffin');
	$calculator->addVote('F3>G1>B2>X2>A3', 'Warren 60');
	$calculator->addVote('F3>A3=G1>B2>X2', 'Schmurz');
	$calculator->addVote('B2>X2>G1>F3>A3', 'Asinius Pollion');	

		// Note, le renseignement du dernier rang de chaque vote est optionnel. Il sera automatiquement déduit si absent, j'ai d'ailleur procédé ainsi ci-dessus.


// Lance l'affichage §§§ On ne touche plus aux suivantes
require_once 'include'.DIRECTORY_SEPARATOR.'affichage.php';

?>
