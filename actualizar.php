<?php
	$id = $_POST["placa"];
	$modelo = $_POST["modelo"];
	$puertas = $_POST["puertas"];
	$pasajeros = $_POST["pasajero"];
	$aire = $_POST["aire"];
	$combustible = $_POST["combustible"];
	$motor = $_POST["motor"];
	$categoria = $_POST["categoria"];
	$db = mysql_connect("localhost", "root", "");
	mysql_select_db("autito",$db);
	$inserta=mysql_query("UPDATE vehiculos SET Modelo='$modelo', NumeroPuertas='$puertas', NumeroPasajeros='$pasajeros', AireAcondicionado='$aire', TipoCombustible='$combustible', Motor='$motor', Categoria='$categoria' WHERE NumeroPlaca='$id'");
	if($inserta != false)
	{
		mysql_close($db);	
		header("Location: administrador.php");//?errorusuario=si
	}
	else 
	{				
		echo "error en base de datos:".mysql_error($db);
		mysql_close($db);
	}
?>