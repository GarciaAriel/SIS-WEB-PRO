<?php
//Inicio la sesi�n
session_start();
//COMPRUEBA QUE EL USUARIO ESTA AUTENTIFICADO
if ( empty($_SESSION["nombre"]) )
{
	echo "moerrdaaa";
	//si no existe, envio a la p�gina de autentificacion
	header("Location: index.php");
	//ademas salgo de este script
	exit();
}	
?>