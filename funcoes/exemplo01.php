<?php 

func_get_args(); //coloca as variáveis de uma função em um array

$pessoa = array(
	'nome'=>'Fernando',
	'idade'=>27
);

var_dump($pessoa);

foreach ($pessoa as &$value) {
	
	if (gettype($value)==='integer') {
		$value +=10;
	}
	echo $value.'<br>';
}

print_r($pessoa);



?>