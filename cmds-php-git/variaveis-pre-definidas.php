<?php

/* recebendo uma variável via url e convertendo ela em inteiro

$nome = (int)$_GET["a"];*/

//var_dump($nome);

//recupera o ip do usuario

$ip = $_SERVER["REMOTE_ADDR"];

//echo $ip;

//Recupera a url onde o usuario esta acessando

$ip = $_SERVER["SCRIPT_NAME"];

echo $ip;





?>