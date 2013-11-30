<?php
	include ("seguridad.php");


		$nombre = $_POST['nombre'];
		$apaterno = $_POST['apellidop'];
		$amaterno = $_POST['apellidom'];
		$direccion = $_POST['direccion'];
		$telefono = $_POST['telefono'];
		$ci = $_POST['ci'];
		$email = $_SESSION["email"];

		$db = mysql_connect("localhost", "root", "");
		if (!$db)
		{
			echo "error en base de datoss: ".mysql_error($db);
		}
		else
		{
			mysql_select_db("autito",$db);
			mysql_query("UPDATE usuarios SET Nombre='$nombre', APaterno='$apaterno', AMaterno='$amaterno', Direccion='$direccion', Telefono='$telefono', Carnet='$ci' WHERE Email='$email'");
			$_SESSION['nombre'] = $nombre;
			$_SESSION['apaterno'] = $apaterno;
			$_SESSION['amaterno'] = $amaterno;
			$_SESSION['direccion'] = $direccion;
			$_SESSION['telefono'] = $telefono;
			$_SESSION['ci'] = $ci;
			mysql_close($db);
			if($_SESSION['tipo'] == "user")
			{
				header ("Location: usuario.php");	  	
			}
			else
			{
				header ("Location: administrador.php");	  		
			}
		}
	
?>
