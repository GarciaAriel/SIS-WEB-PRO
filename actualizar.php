<?php
	$id = $_POST["placa"];
	$modelo = $_POST["modelo"];
	$puertas = $_POST["puertas"];
	$pasajeros = $_POST["pasajero"];
	$aire = $_POST["aire"];
	$combustible = $_POST["combustible"];
	$motor = $_POST["motor"];
	$categoria = $_POST["categoria"];
	if(isset($_POST['cd'])) $cd = 1; else $cd = 0;
	if(isset($_POST['radio'])) $radio = 1; else $radio = 0;
	if(isset($_POST['mp3'])) $mp3 = 1; else $mp3 = 0;
	if(isset($_POST['usb'])) $usb = 1; else $usb = 0;
	$costo=$_POST['costo'];
	$db = mysql_connect("localhost", "root", "root");
	mysql_select_db("autito",$db);
	$inserta=mysql_query("UPDATE vehiculos SET Modelo='$modelo', NumeroPuertas='$puertas', NumeroPasajeros='$pasajeros', AireAcondicionado='$aire', TipoCombustible='$combustible', Motor='$motor', Categoria='$categoria', Costo='$costo', CD='$cd',USB='$usb',MP3='$mp3',RADIO='$radio' WHERE NumeroPlaca='$id'");
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