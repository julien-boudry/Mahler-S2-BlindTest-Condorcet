<?php

// Inclus les dépendances
require_once 'include'.DIRECTORY_SEPARATOR.'head.php';



// §§§ EN AVANT §§§ EDITER LES LIGNES SUIVANTES

define('GROUPE', 'Tour 3 - Poule Debussy');

	
	// Versions en lice
	$calculator->addCandidate('C3');
	$calculator->addCandidate('D2');
	$calculator->addCandidate('D4');
	$calculator->addCandidate('F3');
	$calculator->addCandidate('H4');


	// Votants
	$calculator->addVote('D4=F3>D2=H4=C3', 'Asinius Pollion');
	$calculator->addVote('F3>C3=H4>D2>D4', 'Draffin');
	$calculator->addVote('D2>C3>F3>D4>H4', 'Siegmund');	
	$calculator->addVote('F3 > D4 > H4 = D2 > C3', 'Pipus');	

		// Note, le renseignement du dernier rang de chaque vote est optionnel. Il sera automatiquement déduit si absent, j'ai d'ailleur procédé ainsi ci-dessus.


// Lance l'affichage §§§ On ne touche plus aux suivantes
require_once 'include'.DIRECTORY_SEPARATOR.'affichage.php';

?>
