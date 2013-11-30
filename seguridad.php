<?php
//Inicio la sesión
session_start();
//COMPRUEBA QUE EL USUARIO ESTA AUTENTIFICADO
if ( empty($_SESSION["nombre"]) )
{
	echo "moerrdaaa";
	//si no existe, envio a la página de autentificacion
	header("Location: index.php");
	//ademas salgo de este script
	exit();
}	
?>