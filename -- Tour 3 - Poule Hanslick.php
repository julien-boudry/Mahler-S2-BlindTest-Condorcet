<?php

// Inclus les dépendances
require_once 'include'.DIRECTORY_SEPARATOR.'head.php';



// §§§ EN AVANT §§§ EDITER LES LIGNES SUIVANTES

define('GROUPE', 'Tour 3 - Poule Eduard Hanslick');

	
	// Versions en lice
	$calculator->addCandidate('C1');
	$calculator->addCandidate('E1');
	$calculator->addCandidate('E2');
	$calculator->addCandidate('G1');
	$calculator->addCandidate('G3');


	// Votants
	$calculator->addVote('G3=G1>C1>E1=E2', 'Draffin');
	$calculator->addVote('E1 > G3 > G1 > C1 > E2', 'Resigned');
	$calculator->addVote('E2=G1>G3>C1>E1', 'Asinius Pollion');
	$calculator->addVote('G3>G1=E1>C1', 'Siegmund');
	$calculator->addVote('G3 > E2 > G1 > C1 > E1', 'Pipus');

		// Note, le renseignement du dernier rang de chaque vote est optionnel. Il sera automatiquement déduit si absent, j'ai d'ailleur procédé ainsi ci-dessus.


// Lance l'affichage §§§ On ne touche plus aux suivantes
require_once 'include'.DIRECTORY_SEPARATOR.'affichage.php';

?>
