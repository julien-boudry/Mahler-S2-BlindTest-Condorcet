<?php

// Inclus les dépendances
require_once 'include'.DIRECTORY_SEPARATOR.'head.php';



// §§§ EN AVANT §§§ EDITER LES LIGNES SUIVANTES

define('GROUPE', 'Finale');

	
	// Versions en lice
	$calculator->addCandidate('B2');
	$calculator->addCandidate('F3');
	$calculator->addCandidate('G1');
	$calculator->addCandidate('G3');
	$calculator->addCandidate('H1');
	$calculator->addCandidate('H4');


	// Votants
		// Memoire format : tag,tag2 || vote
	$calculator->parseVotes('
	
	');


		// Note, le renseignement du dernier rang de chaque vote est optionnel. Il sera automatiquement déduit si absent, j'ai d'ailleur procédé ainsi ci-dessus.


// Lance l'affichage §§§ On ne touche plus aux suivantes
require_once 'include'.DIRECTORY_SEPARATOR.'affichage.php';

?>
