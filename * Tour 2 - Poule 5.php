<?php

// Inclus les dépendances
require_once 'include'.DIRECTORY_SEPARATOR.'head.php';



// §§§ EN AVANT §§§ EDITER LES LIGNES SUIVANTES

define('GROUPE', 'Tour 2 - Poule 5');

	
	// Versions en lice
	$calculator->addCandidate('A1');
	$calculator->addCandidate('B3');
	$calculator->addCandidate('C1');
	$calculator->addCandidate('F2');
	$calculator->addCandidate('H4');


	// Votants
	$calculator->addVote('C1=F2>H4>B3>A1', 'Draffin');
	$calculator->addVote('H4>F2>C1>A1>B3', 'Warren 60');
	$calculator->addVote('H4>F2>A1>C1>B3', 'Resigned');	
	$calculator->addVote('C1>A1>H4>B3>F2', 'Asinius Pollion');
	$calculator->addVote('A1>F2>C1>B3>H4', 'Siegmund');	

		// Note, le renseignement du dernier rang de chaque vote est optionnel. Il sera automatiquement déduit si absent, j'ai d'ailleur procédé ainsi ci-dessus.


// Lance l'affichage §§§ On ne touche plus aux suivantes
require_once 'include'.DIRECTORY_SEPARATOR.'affichage.php';

?>
