<?php

// Inclus les dépendances
require_once 'include'.DIRECTORY_SEPARATOR.'head.php';



// §§§ EN AVANT §§§ EDITER LES LIGNES SUIVANTES

define('GROUPE', 'Finale');

	
	// Versions en lice
	$calculator->parseCandidates('
		B2
		H4
		F3 
		H1
		G1
		G3
	');


	// Votants
		// Memoire format : tag,tag2 || vote
	$calculator->parseVotes('
	Pipus || G3 > G1 > H1 > F3 > B2 > H4
	');


		// Note, le renseignement du dernier rang de chaque vote est optionnel. Il sera automatiquement déduit si absent, j'ai d'ailleur procédé ainsi ci-dessus.


// Lance l'affichage §§§ On ne touche plus aux suivantes
require_once 'include'.DIRECTORY_SEPARATOR.'affichage.php';

?>
