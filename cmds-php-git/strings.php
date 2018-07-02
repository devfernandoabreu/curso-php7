<?php

	//Funções string

	//deixa os caracteres todos em maiusculo

	strtoupper();

	//deixa os caracteres todos em minusculo

	strtolower();

	//deixa as primeiras letras em maiusculo

	ucwords();

	//deixa a primeira letra em maiusculo

	ucfirst();

	//substituição de uma palavra por outra

	$empresa = "Ghfly";

	$empresa = str_replace("l", "1", $empresa);

	//echo $empresa;

	// procura inteligente

	$frase = "A repetição é mãe da retenção.";

	$q = strpos($frase, "mãe");

	$texto = substr($frase, 0, $q);

	var_dump($texto);
?>