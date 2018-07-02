<?php 

	require_once("config.php");

	use Cliente\Cadastro;

	$cad = new Cadastro();

	$cad->setNome("Fernando");
	$cad->setEmail("fpa1490@gmail.com");
	$cad->setSenha("123456");

	$cad->registrarVenda();

?>