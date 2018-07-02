<?php

$name = "images";

if(!is_dir($name)){
	mkdir($name);//cria uma pasta
	//rmdir($name);//remove uma pasta
	echo "Diretório $name criado com sucesso!";
}else{
	echo "Já existe o diretório: $name";
}

?>