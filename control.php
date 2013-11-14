<?php
$email = $_POST["email"];
$pass = $_POST["contra"];
$db = mysql_connect("localhost", "root", "");
if (!$db)
{
	echo "error en base de datos: ".mysql_error($db);
}
else 
{
	mysql_select_db("autito",$db);
	$res = mysql_query("SELECT Email, Contrasena FROM usuario WHERE Email = '$email' and contrasena = '$pass'", $db);
	
	if($res != false)
	{
		if(mysql_num_rows($res)>0)
		{
			mysql_close($db);
			echo "Usuario Correcto";
			//header ("Location: aplicacion.php");	
		}
		else 
		{
			echo "error en base de datos:".mysql_error($db);
			mysql_close($db);
			header("Location: index.php?errorusuario=si");
		}
	}
}
?>