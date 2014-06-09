<?php

// Inclus les dépendances
require_once 'include'.DIRECTORY_SEPARATOR.'head.php';



// §§§ EN AVANT §§§ EDITER LES LIGNES SUIVANTES

define('GROUPE', 'Tour 3 - Poule Hirschfeld');

	
	// Versions en lice
	$calculator->addCandidate('B2');
	$calculator->addCandidate('C4');
	$calculator->addCandidate('F2');
	$calculator->addCandidate('G4');
	$calculator->addCandidate('H1');


	// Votants
	$calculator->addVote('B2=H1>C4', 'Asinius Pollion');
	$calculator->addVote('B2=H1>C4', 'Draffin');
	$calculator->addVote('B2>H1>G4>C4', 'Eleanore-clo');
	$calculator->addVote('H1>G4>B2>C4', 'Resigned');
	$calculator->addVote('C4>F2>H1>B2', 'Schmürz');
	$calculator->addVote('G4>F2>H1>B2', 'warren 60');


		// Note, le renseignement du dernier rang de chaque vote est optionnel. Il sera automatiquement déduit si absent, j'ai d'ailleur procédé ainsi ci-dessus.


// Lance l'affichage §§§ On ne touche plus aux suivantes
require_once 'include'.DIRECTORY_SEPARATOR.'affichage.php';

?>
