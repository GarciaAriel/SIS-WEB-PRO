<?php
//Inicio la sesi�n
session_start();

//COMPRUEBA QUE EL USUARIO ESTA AUTENTIFICADO
if ( empty($_SESSION["pedro"]) )
{
	//si no existe, envio a la p�gina de autentificacion
	header("Location: proyecto.php");
	//ademas salgo de este script
	exit();
}	
?>