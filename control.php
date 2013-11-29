<?php
$email = $_POST["email"];
$pass = $_POST["contra"];

$pa=MD5($pass);
	$db = mysql_connect("localhost", "root", "root");
	if (!$db)
	{
		echo "error en base de datoss: ".mysql_error($db);
	}
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
					$_SESSION['amaterno'] = $row['Amaterno'];
					$_SESSION['direccion'] = $row['Direccion'];
					$_SESSION['telefono'] = $row['Telefono'];
					$_SESSION['ci'] = $row['Carnet'];
					$_SESSION['email'] = $row['Email'];

					header ("Location: usuario.php");	  	
					
					
				}
				else
				{
				  	mysql_close($db);
					#echo "administrador Correcto";
					session_start();
					$_SESSION['nombre'] = $row['Nombre'];
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