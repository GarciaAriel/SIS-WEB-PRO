<?php
$email = $_POST["email"];
$pass = $_POST["contra"];
echo $_POST["contra"];

	$db = mysql_connect("localhost", "root", "");
	if (!$db)
	{
		echo "error en base de datos: ".mysql_error($db);
	}
	else 
	{
		mysql_select_db("autito",$db);
		$res = mysql_query("SELECT * FROM usuarios WHERE Email = '$email' and contrasena = '$pass'", $db);
		
		if($res != false)
		{
			if(mysql_num_rows($res)>0)
			{
				$row = mysql_fetch_assoc($res);
				
				if ($row['TipoUsuario'] == "user") 
				{

				 	mysql_close($db);
					echo "Usuario Correcto";
					session_start();
					$_SESSION['nombre'] = $row['Nombre'];
					$_SESSION['aPaterno'] = $row['APaterno'];
					$_SESSION['aMaterno'] = $row['AMaterno'];
					$_SESSION['direccion'] = $row['Direcion'];
					$_SESSION['telefono'] = $row['Telefono'];
					$_SESSION['email'] = $row['Email'];
					
					header ("Location: usuario.php");	  	
				}
				else
				{
				  	mysql_close($db);
					echo "administrador Correcto";
					session_start();
					$_SESSION['pedro'] = $row['Nombre'];
					header ("Location: administrador.php");	 
				}
				  

				
			}
			else 
			{
				echo "error en base de datos:".mysql_error($db);
				mysql_close($db);
				header("Location: index.php"); //?errorusuario=si
			}
		}
	}	


?>