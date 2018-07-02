<?php 

function __autoload($nomeClasse){

	//var_dump($nomeClasse);
	require_once("$nomeClasse.php");
}

$pluto = new Cachorro();
echo $pluto->falar();


?>