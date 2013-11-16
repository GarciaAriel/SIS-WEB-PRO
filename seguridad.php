<?php
//Inicio la sesión
session_start();

//COMPRUEBA QUE EL USUARIO ESTA AUTENTIFICADO
if ( empty($_SESSION["pedro"]) )
{
	//si no existe, envio a la página de autentificacion
	header("Location: proyecto.php");
	//ademas salgo de este script
	exit();
}	
?>