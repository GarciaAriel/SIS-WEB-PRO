<?php
$nombre = $_POST['nombre'];
$apaterno = $_POST['apellidop'];
$amaterno = $_POST['apellidom'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$ci = $_POST['ci'];
$email = $_POST['email'];
$cont = $_POST['con1'];
$tipouser = "user";

$db = mysql_connect("localhost", "root", "");
if (!$db)
{
	echo "error en base de datos: ".mysql_error($db);
}
else 
{
	mysql_select_db("autito",$db);	
	$res = mysql_query("SELECT Carnet FROM usuarios WHERE Carnet = '$ci'", $db);	
	#echo $res;
	if($res != false)
	{
		#echo "dentro de iffffffffff";
		if(mysql_num_rows($res)>0)
		{
			#echo("ya existe ese login");
			header("Location: index.php");//?errorusuario=si
		}
		else
		{
			//$encrip=MD5('$password');
			$inserta = mysql_query("INSERT INTO usuarios (Carnet,Nombre,AMaterno,APaterno,Direccion,Telefono,TipoUsuario,Email,Contrasena) VALUES ('$ci','$nombre','$apaterno','$amaterno','$direccion','$telefono','$tipouser','$email',MD5('$cont'))", $db);
			if($inserta != false)
			{
				mysql_close($db);
				header("Location: index.php");
				#echo "Usuario Insertado";	
						
				//?errorusuario=si
			}
			else 
			{				
				echo "error en base de datos:".mysql_error($db);
				mysql_close($db);
				header("Location: index.php");//?errorusuario=si
			}
		}
	}
}
?>



