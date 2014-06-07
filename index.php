<?php 
      // ini_set('display_errors', 1); error_reporting(E_ALL);
?> 
<html>
<head>
	<meta charset="UTF-8">
	<title>Mahler 2 - Condorcet</title>
</head>

<body>

<h1>Condorcet, Mahler 2 : Feuilles de score</h1>

<ul>

<?php
	$etapes = scandir(dirname(__FILE__));
	
	foreach ($etapes as $value)
	{
		if ( substr( $value, 0, 1 ) === '*' )
		{

			echo '<li>';
	     	     	     echo '<a href="'.$value.'">'.str_replace('* ', '', $value).'</a>' ;
			echo '</li>';
		}
	}

?>

</ul>
</body>
</html>