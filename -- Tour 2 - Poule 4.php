<?php

// Inclus les dépendances
require_once 'include'.DIRECTORY_SEPARATOR.'head.php';



// §§§ EN AVANT §§§ EDITER LES LIGNES SUIVANTES

define('GROUPE', 'Tour 2 - Poule 4');

	
	// Versions en lice
	$calculator->addCandidate('C4');
	$calculator->addCandidate('D2');
	$calculator->addCandidate('F1');
	$calculator->addCandidate('G3');
	$calculator->addCandidate('H2');


	// Votants
	$calculator->addVote('D2=G3>H2=F1', 'Siegmund');
	$calculator->addVote('D2>G3>C4=F1', 'Draffin');
	$calculator->addVote('G3>C4>D2>F1', 'Resigned');
	$calculator->addVote('D2>C4>H2>G3>F1', 'Aurele');
	$calculator->addVote('G3>F1>D2>C4', 'Asinius Pollion');

		// Note, le renseignement du dernier rang de chaque vote est optionnel. Il sera automatiquement déduit si absent, j'ai d'ailleur procédé ainsi ci-dessus.


// Lance l'affichage §§§ On ne touche plus aux suivantes
require_once 'include'.DIRECTORY_SEPARATOR.'affichage.php';

?>
