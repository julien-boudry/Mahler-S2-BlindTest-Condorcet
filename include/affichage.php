<?php 
	use Condorcet\Condorcet ;

	function get_timer ($html)
	{
		$timer = number_format(microtime(true) - START, 4) ;
		$out = str_replace('{timer}', ($timer >= 2) ? $timer.' secondes' : $timer.' seconde', $html);

		return $out ;
	}

	ob_start('get_timer');

 ?>
<!doctype html>
 <html lang="fr">
 <head>
 	<meta charset="UTF-8">
 	<title><?php echo GROUPE ;?></title>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>

<script>
$(function() {
$( ".accordion" ).accordion({ active: false, collapsible: true });
});
</script>
	
	
 	<style>
		.votant {
		  float: left;
		  margin-right: 2cm;
		}
		
		.method {
			border-bottom: dotted 1px;
			margin-bottom:1cm;
			padding-bottom:1cm;
		}
		
		ul li {
			list-style-type:square;
		}
 	</style>
 </head>
 <body>
 
	<em>Calculé grâce à <a href="https://github.com/julien-boudry/Condorcet_Schulze-PHP_Class" target="_blank">Condorcet Class</a> : <span style="font-weight:bold;">Version : <?php echo $calculator->getClassVersion(); ?></span>
	<br> Par Julien Boudry</em><br>

	<h1><?php echo GROUPE ;?></h1>	
	<em>
		Nombre de versions candidates : 
		<?php echo $calculator->countCandidates() ;?>
		|
		Nombre de votants :
		<?php echo $calculator->countVotes() ;?>
		|
		Ratio Votants / Candidats :
		<?php echo round( $calculator->countVotes() / $calculator->countCandidates(), 2 ) ;?>
		<br>
		<span style="color:green;">Calculé en {timer}</span>
	</em>

	<h2>Liste des candidats :</h2>

	<ul>
	<?php	
		foreach ($calculator->getCandidatesList() as $value)
		{
			echo '<li>'.$value.'</li>' ;
		}	
	?>
	</ul>


	<h2>Détail des votes enregistrés :</h2>
<?php
	foreach ($calculator->getVotesList() as $vote)
	{
		echo '<div class="votant">';

		echo '<strong style="color:green;">'.$vote['tag'][0].'</strong><br>';

		echo "<ol>";

		foreach ($vote as $rank => $value)
		{
			if ($rank == 'tag') {continue ;}
		?>

			<li><?php echo implode(',',$value) ; ?></li>

		<?php
		}

		echo '</ol><br></div>' ;
	}
?>

<hr style="clear:both;">

<section>

	<h2>Gagnant de <a target="blank" href="http://en.wikipedia.org/wiki/Condorcet_method">Condorcet naturel</a> :</h2>

	<strong style="color:green;">
		<?php
		if ( !is_null($calculator->getWinner()) )
			{ echo $calculator->getWinner() ;}
		else
			{ echo '<span style="color:red;">Les votes de ce groupe ne permettent pas de gagnant naturel de Condorcet en cause du <a href="http://fr.wikipedia.org/wiki/Paradoxe_de_Condorcet" target="_blank">paradoxe de Condorcet</a>.</span>'; }
		?>
	</strong>

	<h2>Perdant de <a target="blank" href="http://en.wikipedia.org/wiki/Condorcet_method">Condorcet naturel</a> :</h2>

	<strong style="color:green;">
		<?php
		if ( !is_null($calculator->getLoser()) )
			{ echo $calculator->getLoser() ;}
		else
			{ echo '<span style="color:red;">Les votes de ce groupe ne permettent pas de perdant naturel de Condorcet en cause du <a href="http://fr.wikipedia.org/wiki/Paradoxe_de_Condorcet" target="_blank">paradoxe de Condorcet</a>.</span>'; }
		?>
	</strong>
	
	<br><br><br>
	
	<div class="accordion">
		<h3>Duels de pairs :</h3>
		<div>
			<pre><?php print_r($calculator->getPairwise()); ?></pre>
		</div>
	</div>
	
</section>

<br><br><hr>
	
	<section class="method">

		<h2>Classement par défaut (de <a target="blank" href="http://en.wikipedia.org/wiki/Schulze_method"><?php echo $calculator->getMethod(); ?></a>) :</h2>

		<pre>
		<?php print_r($calculator->getResult()); ?>
		</pre>
		
		<div class="accordion">
			<h3>Statistiques de calcul pour Schulze Winning</h3>
			<div>
				<pre><?php print_r($calculator->getResultStats()); ?></pre>
			</div>
		</div>
	
	</section>
	
	<section class="method">
	
		<h2>Classement d'après <a target="blank" href="http://en.wikipedia.org/wiki/Schulze_method">Schulze Margin Variant</a> :</h2>

		<pre>
		<?php print_r($calculator->getResult('Schulze_Margin')); ?>
		</pre>
		
		<div class="accordion">
			<h3>Statistiques de calcul pour Schulze Margin</h3>
			<div>
				<pre><?php print_r($calculator->getResultStats('Schulze_Margin')); ?></pre>
			</div>
		</div>
		
	</section>
		
	<section class="method">
		
		<h2>Classement d'après <a target="blank" href="http://en.wikipedia.org/wiki/Schulze_method">Schulze Ratio Variant</a> :</h2>

		<pre>
		<?php print_r($calculator->getResult('Schulze_Ratio')); ?>
		</pre>
		
		<div class="accordion">
			<h3>Statistiques de calcul pour Schulze Ratio</h3>
			<div>
				<pre><?php print_r($calculator->getResultStats('Schulze_Ratio')); ?></pre>
			</div>
		</div>
	
	</section>
	
	<section class="method">
	
		<h2>Classement d'après <a target="blank" href="http://en.wikipedia.org/wiki/Kemeny-Young_method">Kemeny-Young</a> :</h2>
		<?php 
			if ( !is_array( $calculator->getResult( 'KemenyYoung', array('noConflict' => true) ) ) )
			{
				echo '<strong style="color:red;">Résultat Kemeny-Young detecté arbitraire : '.'Kemeny-Young rencontre '.explode(';',$calculator->getResult('KemenyYoung', array('noConflict' => true)))[0].' solutions possibles avec un score commun de '.explode(';',$calculator->getResult('KemenyYoung', array('noConflict' => true)))[1].'. Le classement suivant est l\'un de ces prétendants finaux arbitrairement choisi.</strong>' ;
			}
			else
			{
				echo '<strong style="color:green;">Aucun conflit detecté sur les résultats Kemeny-Young, les résultats suivants sont valables.</strong>' ;
			}
		?> 

		<pre>
		<?php print_r($calculator->getResult('KemenyYoung')); ?>
		</pre>
		
		<div class="accordion">
			<h3>Statistiques de calcul pour Kemeny-Young</h3>
			<div>
				<pre><?php print_r($calculator->getResultStats('KemenyYoung')); ?></pre>
			</div>
		</div>
	
	</section>

	<section class="method">	
	
		<h2>Classement d'après <a target="blank" href="http://en.wikipedia.org/wiki/Copeland%27s_method">Copeland</a> :</h2>

		<pre>
		<?php print_r($calculator->getResult('Copeland')); ?>
		</pre>
		
		<div class="accordion">
			<h3>Statistiques de calcul pour Copeland</h3>
			<div>
				<pre><?php print_r($calculator->getResultStats('Copeland')); ?></pre>
			</div>
		</div>
	
	</section>
	
	<section class="method">

		<h2>Classement d'après <a target="blank" href="http://en.wikipedia.org/wiki/Minimax_Condorcet">Minimax</a> (Variante "Winning") :</h2>
		<em>Cette méthode ne respecte par nature pas le critère du perdant de Condorcet</em><br>

		<pre>
		<?php print_r($calculator->getResult('Minimax_Winning')); ?>
		</pre>
		
		<div class="accordion">
			<h3>Statistiques de calcul pour Minimax Winning</h3>
			<div>
				<pre><?php print_r($calculator->getResultStats('Minimax_Winning')); ?></pre>
			</div>
		</div>
	
	</section>
	
	<section class="method">
	
		<h2>Classement d'après <a target="blank" href="http://en.wikipedia.org/wiki/Minimax_Condorcet">Minimax</a> (Variante "Margin") :</h2>
		<em>Cette méthode ne respecte par nature pas le critère du perdant de Condorcet</em><br>

		<pre>
		<?php print_r($calculator->getResult('Minimax_Margin')); ?>
		</pre>
		
		<div class="accordion">
			<h3>Statistiques de calcul pour Minimax Margin</h3>
			<div>
				<pre><?php print_r($calculator->getResultStats('Minimax_Margin')); ?></pre>
			</div>
		</div>
	
	</section>
	
	<section class="method">
	
		<h2>Classement d'après <a target="blank" href="hhttp://en.wikipedia.org/wiki/Minimax_Condorcet">Minimax</a> (Variante "Opposition") :</h2>
		<em>Cette méthode ne respecte par nature aucun des critères de Condorcet.</em><br>

		<pre>
		<?php print_r($calculator->getResult('Minimax_Opposition')); ?>
		</pre>
		
		<div class="accordion">
			<h3>Statistiques de calcul pour Minimax Opposition</h3>
			<div>
				<pre><?php print_r($calculator->getResultStats('Minimax_Opposition')); ?></pre>
			</div>
		</div>
	
	</section>
	
	<section class="method">
	
		<h2>Classement d'après <a target="blank" href="http://en.wikipedia.org/wiki/Ranked_pairs">Ranked Pairs</a> :</h2>
		<strong style="color:red;">L'implémentation de cette méthode dans le courant script est tout à fait expérimentale et suspecte. Notre écoute comparée en bénéficie en première mondiale, voyons voir... par pure curiosité.</strong>
		<pre>
		<?php print_r($calculator->getResult('RankedPairs')); ?>
		</pre>
		
		<div class="accordion">
			<h3>Statistiques de calcul pour Ranked Pairs</h3>
			<div>
				<pre><?php print_r($calculator->getResultStats('RankedPairs')); ?></pre>
			</div>
		</div>

	</section>
	

 <br><br><hr>
 
<h2>Debug Data :</h2>

	<div class="accordion">
		<h3>Methodes supportées par Condorcet Class</h3>
		<div>
			 <pre>
			<?php print_r(Condorcet::getAuthMethods()); ?>
			 </pre>
		</div>
	</div>


 	<div class="accordion">
		<h3>Configuration de l'objet</h3>
		<div>
			 <pre>
			<?php var_dump($calculator->getConfig()); ?>
			 </pre>
		</div>
	</div>

		<h3>Temps d'execution :</h3>
		<strong style="color:red;">
			<?php 
				echo (\Condorcet\KemenyYoung::$_maxCandidates > 5 && $calculator->countCandidates() > 5) ? 'ATTENTION : <em>KemenyYoung sur plus de 5 candidats ralenti fortement le systéme.</em><br><br>' : '' ;
			?>
		</strong>
		<strong style="color:green;">
			<?php
				echo '{timer}<br>';
			?>
		</strong <br><br>
 
<h4>Dump de l'objet :</h4>

 <pre>
<?php //print_r($calculator); ?>
 </pre>

 </body>
 </html> 