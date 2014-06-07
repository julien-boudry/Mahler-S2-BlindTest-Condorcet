<?php
ini_set('xdebug.var_display_max_depth', -1);
ini_set('xdebug.var_display_max_children', -1);
ini_set('xdebug.var_display_max_data', -1);
ini_set('display_errors', 1);
error_reporting(E_ALL); 


use Condorcet\Condorcet ;

require_once 'lib'.DIRECTORY_SEPARATOR.'Condorcet'.DIRECTORY_SEPARATOR.'lib'.DIRECTORY_SEPARATOR.'Condorcet'.DIRECTORY_SEPARATOR.'Condorcet.php' ;

$calculator = new Condorcet () ;
