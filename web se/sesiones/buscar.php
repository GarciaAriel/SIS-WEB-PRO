<?php
$log = $_GET['buscar'];

$db = mysql_connect("localhost", "root", "");
if (!$db)
{
	echo "error en base de datos: ".mysql_error($db);
}
else 
{
	mysql_select_db("prueba",$db);	
	$busca = mysql_query("SELECT id_in,login,nombre,telefono,direccion,sexo,password FROM usuarios WHERE login = '$log'", $db);
	if($busca != false)
	{
		//$rs=mysql_fetch_row($busca);
		echo "Usuario Encontrado\n";
		while($v=mysql_fetch_row($busca)) 
		{			
			echo "ID_IN: $v[0] LOGIN: $v[1] NOMBRE: $v[2] TELEFONO: $v[3] DIRECCION: $v[4] SEXO: $v[5] PASSWORD: $v[6]";
		}
	}
	else 
	{		
		echo "error en base de datos:".mysql_error($db);
		mysql_close($db);
		//header("Location: index.php?errorusuario=si");		
	}
}
?>

