<?php

// Inclus les dépendances
require_once 'include'.DIRECTORY_SEPARATOR.'head.php';



// §§§ EN AVANT §§§ EDITER LES LIGNES SUIVANTES

define('GROUPE', 'Tour 2 - Poule 1');

	
	// Versions en lice
	$calculator->addCandidate('A4');
	$calculator->addCandidate('B4');
	$calculator->addCandidate('D4');
	$calculator->addCandidate('E1');
	$calculator->addCandidate('G4');


	// Votants
	$calculator->addVote('A4>G4>D4=E1', 'Draffin');
	$calculator->addVote('B4=D4>A4>G4', 'Asinius Pollion');
	$calculator->addVote('G4>D4>B4>A4', 'Pipus');
	$calculator->addVote('E1>G4>D4>B4', 'Saegel');
	$calculator->addVote('G4>B4>A4>E1', 'Siegmund');
	$calculator->addVote('G4>D4>E1>B4', 'Schmürz');
	$calculator->addVote('E1>D4>G4>A4', 'Warren 60');

		// Note, le renseignement du dernier rang de chaque vote est optionnel. Il sera automatiquement déduit si absent, j'ai d'ailleur procédé ainsi ci-dessus.


// Lance l'affichage §§§ On ne touche plus aux suivantes
require_once 'include'.DIRECTORY_SEPARATOR.'affichage.php';

?>
