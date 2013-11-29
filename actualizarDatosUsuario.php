<?php
	
		$nombre = $_POST['nombre'];
		$apaterno = $_POST['apellidop'];
		$amaterno = $_POST['apellidom'];
		$direccion = $_POST['direccion'];
		$telefono = $_POST['telefono'];
		$ci = $_POST['ci'];
		$email = $_POST['email'];

		$db = mysql_connect("localhost", "root", "");
		if (!$db)
		{
			echo "error en base de datoss: ".mysql_error($db);
		}
		else
		(
			mysql_select_db("autito",$db);
			$res = mysql_query("UPDATE usuarios SET Nombre='$nombre', APaterno='$apaterno', AMaterno='$amaterno', Direccion='$direccion', Telefono='$telefono', Carnet='$ci' WHERE Email='$email'");
			if($res != false)
			{
				
			}
			header ("Location: usuario.php");	  	
		)
	
?>

<?php

	
	else 
	{
		mysql_select_db("autito",$db);
		$res = mysql_query("SELECT * FROM usuarios WHERE Email = '$email' and Contrasena = '$pa'", $db);
		if($res != false)
		{
			
			if(mysql_num_rows($res)>0)
			{
				$row = mysql_fetch_assoc($res);
				
				if ($row['TipoUsuario'] == "user") 
				{
					mysql_close($db);
				 	session_start();
					$_SESSION['nombre'] = $row['Nombre'];
					$_SESSION['apaterno'] = $row['APaterno'];
					$_SESSION['amaterno'] = $row['AMaterno'];
					$_SESSION['direccion'] = $row['Direccion'];
					$_SESSION['telefono'] = $row['Telefono'];
					$_SESSION['ci'] = $row['Carnet'];
					$_SESSION['email'] = $row['Email'];

					header ("Location: usuario.php");	  	
					
					
				}
				else
				{
				  	mysql_close($db);
					session_start();
					$_SESSION['nombre'] = $row['Nombre'];
					$_SESSION['apaterno'] = $row['APaterno'];
					$_SESSION['amaterno'] = $row['AMaterno'];
					$_SESSION['direccion'] = $row['Direccion'];
					$_SESSION['telefono'] = $row['Telefono'];
					$_SESSION['ci'] = $row['Carnet'];
					$_SESSION['email'] = $row['Email'];
					header ("Location: administrador.php");	 
				}
			}
			else 
			{
				echo $pa;#"error en base de datoos:".mysql_error($db);
				mysql_close($db);
				#header("Location: index.php"); //?errorusuario=si
			}
		}
	}	


?>