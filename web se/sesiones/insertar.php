<?php
$login = $_POST['login'];
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$sexo = $_POST['sexo'];
$password = $_POST['contrasenia'];
$db = mysql_connect("localhost", "root", "root");
if (!$db)
{
	echo "error en base de datos: ".mysql_error($db);
}
else 
{
	mysql_select_db("prueba",$db);	
	$res = mysql_query("SELECT login FROM usuarios WHERE login = '$login'", $db);	
	if($res != false)
	{
		if(mysql_num_rows($res)>0)
		{
			echo("ya existe ese login");
		}
		else
		{
			$encrip=MD5('$password');
			$inserta = mysql_query("INSERT INTO usuarios (login,nombre,telefono,direccion,sexo,password) VALUES ('$login','$nombre','$telefono','$direccion','$sexo','$encrip')", $db);
			if($inserta != false)
			{
				mysql_close($db);
				echo "Usuario Insertado";			
			}
			else 
			{				
				echo "error en base de datos:".mysql_error($db);
				mysql_close($db);
				//header("Location: index.php?errorusuario=si");
			}
		}
	}
}
?>



