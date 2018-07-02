<?php 
	
	function incluirClasses($nomeClasse){

		if(file_exists($nomeClasse.".php")===true){
			require_once($nomeClasse. ".php");
		}
		
	}

	spl_autoload_register("incluirClasses");
	spl_autoload_register(function($nomeClasse){

		if(file_exists("abstratas". DIRECTORY_SEPARATOR. $nomeClasse.".php")===true){
			require_once("abstratas". DIRECTORY_SEPARATOR.$nomeClasse. ".php");
		}

	});

	$pluto = new Cachorro();
	echo $pluto->falar();

 ?>