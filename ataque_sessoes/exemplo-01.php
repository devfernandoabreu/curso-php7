<?php 

session_start();


//Depois de verificar login e senha reinicie o ID da session

session_destroy();

session_start();

session_regenerate_id();

echo session_id();



?>