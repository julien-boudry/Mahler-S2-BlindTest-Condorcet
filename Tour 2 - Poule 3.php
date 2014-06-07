<?php

// Inclus les dépendances
require_once 'include'.DIRECTORY_SEPARATOR.'head.php';



// §§§ EN AVANT §§§ EDITER LES LIGNES SUIVANTES

define('GROUPE', 'Tour 2 - Poule 3');

	
	// Versions en lice
	$calculator->addCandidate('A2');
	$calculator->addCandidate('C3');
	$calculator->addCandidate('D3');
	$calculator->addCandidate('E2');
	$calculator->addCandidate('H1');


	// Votants
	$calculator->addVote('C3=E2>A2>D3=H1', 'Draffin');
	$calculator->addVote('E2=H1>A2>D3>C3', 'Asinius Pollion');
	$calculator->addVote('E2>H1>C3>A2>D3', 'Eleanore-clo');
	$calculator->addVote('E2>C3>D3>A2>H1', 'Siegmund');
	$calculator->addVote('E2>C3>D3>H1>A2', 'Adora63');

		// Note, le renseignement du dernier rang de chaque vote est optionnel. Il sera automatiquement déduit si absent, j'ai d'ailleur procédé ainsi ci-dessus.


// Lance l'affichage §§§ On ne touche plus aux suivantes
require_once 'include'.DIRECTORY_SEPARATOR.'affichage.php';

?>
